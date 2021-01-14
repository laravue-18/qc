<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Worklist extends Component
{
    public function render()
    {
        $list = User::all();
        return view('livewire.worklist')->with(compact('list'));
    }
}
