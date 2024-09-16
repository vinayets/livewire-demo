<x-slot:lang>fr</x-slot>
{{-- <div>
    <h1>Title: {{ $title }}</h1>
    <span>Author: {{ $author }}</span>
</div> --}}

<form wire:submit='save'>
    <input type="text" wire:model='title'>
    <textarea wire:model='description' cols="30" rows="10"></textarea>
    <button type="submit">Save</button>

    <span wire:loading>Saving...</span>
</form>
