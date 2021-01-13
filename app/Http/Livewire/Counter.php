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
    public $other1 = 0;
    public $other2 = 0;

    public function increment(){
        $this->count++;
    }
    public function pass(){
        $this->pass++;
    }
    public function reject(){
        $this->reject++;
    }
    public function alter(){
        $this->alter++;
    }
    public function washing(){
        $this->washing++;
    }
    public function sewing(){
        $this->sewing++;
    }
    public function other1(){
        $this->other1++;
    }
    public function other2(){
        $this->other2++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
