<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $pass = 0;
    public $reject = 0;
    public $alter = 0;
    public $washing = 0;
    public $sewing = 0;
    public $finishing = 0;
    public $other = 0;

    public function increment(){
        $this->count++;
    }
    public function pass(){
        $user = auth()->user();
        $user->pass++;
        $user->save();
    }
    public function reject(){
        $user = auth()->user();
        $user->reject++;
        $user->save();
    }
    public function alter(){
        $user = auth()->user();
        $user->alter++;
        $user->save();
    }
    public function washing(){
        $user = auth()->user();
        $user->washing++;
        $user->save();
    }
    public function sewing(){
        $user = auth()->user();
        $user->sewing++;
        $user->save();
    }
    public function finishing(){
        $user = auth()->user();
        $user->finishing++;
        $user->save();
    }
    public function other(){
        $user = auth()->user();
        $user->other++;
        $user->save();
    }

    public function render()
    {
        $user = auth()->user();
        return view('livewire.counter')->with(compact('user'));
    }
}
