@extends('backend.layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="row">
        @include('backend.contact.partials.sidebar')
        <div class="col-md-7 col-xl-9" id="message">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-options p-0">
                        <button onclick="window.location='{{ route('admin.contact', $slug) }}'"
                            class="btn btn-sm btn-alt-secondary" type="button">
                            <i class="fa fa-long-arrow-alt-left text-danger"></i>
                            <span class="d-none d-sm-inline ms-1">Back</span>
                        </button>
                    </div>
                </div>
                <div class="block-content py-0">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h3 class="mb-1 fw-bold" style="font-size:1.35rem;">{{ $contact->subject }}</h3>
                                <div class="text-muted small">
                                    From: <span class="fw-semibold">{{ $contact->name }}</span>
                                    &lt;{{ $contact->email }}&gt;
                                    &nbsp;&middot;&nbsp;
                                    <span>{{ $contact->created_at->format('M d, Y \a\t h:i A') }}</span>
                                </div>
                            </div>
                            @if ($slug != 'trash')
                                <div class="d-flex gap-2">
                                    <button id="replyBtn" class="btn btn-sm btn-light" title="Reply"><i
                                            class="fa fa-reply"></i></button>
                                    <button class="btn btn-sm btn-light" title="Delete"><i
                                            class="fa fa-trash text-danger"></i></button>
                                </div>
                            @endif
                        </div>

                        <div class="border rounded bg-white">
                            <div class="p-4 d-flex">
                                <div class="me-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center:bg-secondary text-white"
                                        style="width:56px;height:56px;font-size:1.25rem;background:#6c757d;color:#fff; justify-content:center;">
                                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">{{ $contact->name }} <small
                                                    class="text-muted">&lt;{{ $contact->email }}&gt;</small></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-muted" style="white-space:pre-wrap;">{{ $contact->message }}</div>
                                </div>
                            </div>
                        </div>

                        {{-- Replies section --}}
                        @if ($contact->replies && count($contact->replies))
                            <div class="mt-4">
                                <h5 class="fw-bold mb-3" style="font-size:1.1rem;">Replies</h5>
                                @foreach ($contact->replies as $reply)
                                    <div class="border rounded bg-light mb-3 shadow-sm">
                                        <div class="p-3 d-flex align-items-start">
                                            <div class="me-3">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-primary text-white"
                                                    style="width:40px;height:40px;font-size:1rem;">
                                                    <i class="fa fa-reply"></i>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <div class="fw-semibold text-dark">Admin</div>
                                                    <div class="text-muted small">
                                                        {{ $reply->created_at->format('M d, Y h:i A') }}</div>
                                                </div>
                                                <div class="mb-4 text-dark">
                                                   <span class="text-dark fw-semibold">Subject: {{ $reply->subject }}</span>
                                                </div>
                                                <div class="text-muted" style="white-space:pre-wrap;">{{ $reply->reply }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        {{-- Reply form (hidden until Reply clicked) --}}
                        <div id="replyForm" class="mt-3" style="display:none;">
                            <form action="{{ route('admin.contact.reply', $contact->id) }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="replySubject"
                                        value="Re: {{ $contact->subject }}" name="subject" required>
                                </div>
                                <div class="mb-2">
                                    <textarea id="replyMessage" class="form-control" rows="6" placeholder="Write your reply..." name="message"
                                        required></textarea>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="submit" id="sendReply" class="btn btn-sm btn-primary">
                                        <i class="fa fa-paper-plane me-1 opacity-50"></i> Send Reply
                                    </button>
                                    <button type="button" id="cancelReply" class="btn btn-secondary btn-sm">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            const replyBtn = document.getElementById('replyBtn');
            const replyForm = document.getElementById('replyForm');
            const cancelBtn = document.getElementById('cancelReply');

            if (replyBtn) {
                replyBtn.addEventListener('click', function() {
                    replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
                });
            }
            if (cancelBtn) {
                cancelBtn.addEventListener('click', function() {
                    replyForm.style.display = 'none';
                });
            }
        })();
    </script>
@endsection
