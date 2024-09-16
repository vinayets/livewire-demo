<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TaskIndex extends Component
{
    public $tasks;

    #[Rule(['required', 'max:10', 'string'])]
    public $name;

    public function mount()
    {
        // $this->tasks = Task::with('user')->get();
    }

    public function boot()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function rendering($view, $data)
    {
        dd($view, $data);
    }



    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name,
        ]);

        session()->flash('message', 'Task successfully created');

        $this->dispatch('task-updated');

        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->title('Tasks - Hostinger Livewire')
            ->with([
                'button' => 'New Task'
            ]);
    }
}
