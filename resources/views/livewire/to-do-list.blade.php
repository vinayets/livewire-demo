<div>
    <input type="text" wire:model="todo" placeholder="Todo...">

    <button wire:click='add'>Add Todo</button>

    <button x-on:click="$wire.todo = ''">Clear I</button>
    <button x-on:click="$wire.set('todo', '')">Clear II</button>
    <button x-on:click="$wire.set('todo', '', false)">Clear III</button>

    <p>Todo character length:</p> <h2 x-text="$wire.todo.length"></h2>
    <p>Todo character length:</p> <h2 x-text="$wire.get('todo').length"></h2>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>


</div>
