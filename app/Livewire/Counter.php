<?php

namespace App\Livewire;

use App\Models\UniqueVisitor;
use App\Models\VisitorCount;
use Livewire\Component;

class Counter extends Component
{
    // public $total = '';
    // public $unique = '';


    public function render()
    {

         $total = VisitorCount::count();
         $unique = UniqueVisitor::count();
        return view('livewire.counter',[
            'total'=>$total,
            'unique'=>$unique,
        ]);
    }
}
