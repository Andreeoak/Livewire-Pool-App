<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Option;

class Polls extends Component
{
    protected $listeners =[
        "pollCreated"=> "render"
    ];

    #[\Livewire\Attributes\On('pollCreated')]
    public function render()
    {
        $polls = \App\Models\Pool::with('options.votes')->latest()->get();
        return view('livewire.polls', ['polls'=>$polls]);
    }

    public function vote(Option $option)
    {
        $option->votes()->create();
    }
}
