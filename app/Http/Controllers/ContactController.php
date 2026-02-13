<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Contact;
use App\Models\ContactReply;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact($slug = 'unread')
    {
        $query = Contact::query();

        switch ($slug) {

            case 'read':
                $query->where('seen', 1)
                    ->whereDoesntHave('replies');
                break;

            case 'replied':
                $query->whereHas('replies');
                break;

            case 'trash':
                $query->onlyTrashed();
                break;

            case 'unread':
            default:
                $query->where('seen', 0);
                break;
        }

        if($slug == 'sendMessage'){
            $messages = ContactReply::whereNull('contact_id')->latest()->get();
        }else{
            $messages = $query->select('id', 'name', 'subject', 'created_at')
                ->latest()->get();
        }


        return view('backend.contact.index', compact('messages', 'slug'));
    }

    public function show($id, Request $request)
    {
        $slug = $request->data;
        if ($slug == 'trash') {
            $contact = Contact::onlyTrashed()->find($id);
        } else {
            $contact = Contact::find($id);
        }
        if ($contact && $contact->seen == 0) {
            $contact->seen = 1;
            $contact->save();
        }

        return view('backend.contact.show', compact('contact', 'slug'));
    }

    public function reply(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = Contact::find($id);
        $info = [
            'name' => $contact->name,
            'email' => $contact->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'type' => 'reply',
        ];

        ContactReply::create([
            'contact_id' => $id,
            'email' => $contact->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        SendEmailJob::dispatch($info);

        return redirect()->route('admin.contact', 'replied')->with('success', 'Message replied successfully.');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $info = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'type' => 'send',
        ];

        ContactReply::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        SendEmailJob::dispatch($info);

        return redirect()->route('admin.contact', 'sendMessage')->with('success', 'Message send successfully.');
    }

    public function delete(Request $request)
    {
        if (!$request->has('message')) {
            return back()->with('error', 'Please select at least one message.');
        }

        $ids = $request->message;
        $slug = $request->slug;

        // 🔥 sendMessage tab handle
        if ($slug == 'sendMessage') {
            ContactReply::whereIn('id', $ids)->delete();
            return back()->with('success', 'Sent messages deleted successfully.');
        }

        switch ($request->action) {

            case 'restore':
                Contact::onlyTrashed()->whereIn('id', $ids)->restore();
                return back()->with('success', 'Messages restored successfully.');

            case 'forceDelete':
                Contact::onlyTrashed()->whereIn('id', $ids)->forceDelete();
                return back()->with('success', 'Messages permanently deleted.');

            case 'delete':
            default:
                Contact::whereIn('id', $ids)->delete();
                return redirect()
                    ->route('admin.contact', 'trash')
                    ->with('success', 'Messages moved to trash.');
        }
    }

}