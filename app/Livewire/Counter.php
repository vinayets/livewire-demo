<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Counter extends Component
{
    public $count = 1;

    public $event = '';

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function delete() {

    }

    public function clickEvent() {
        $this->event = 'Click';
    }

    public function keydownEvent() {
        $this->event = 'Key Down';
    }

    public function keyupEvent() {
        $this->event = 'Key Up';
    }

    public function mouseenterEvent() {
        $this->event = 'Mouse Enter';
    }

    public function keydownEnter() {
        $this->event = "Key Down Enter";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
