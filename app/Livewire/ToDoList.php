<?php

namespace App\Livewire;

use Livewire\Component;

class ToDoList extends Component
{
    public $todo = "";

    public $todos = [];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo'); // Resetting properties
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }
}
