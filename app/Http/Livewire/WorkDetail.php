<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WorkDetail extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.work-detail')->with(compact('user'));
    }
}
