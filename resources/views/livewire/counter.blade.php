<div>
    <h1>{{ $count }}</h1>

    <button wire:click='increment'>+</button>
    <button wire:click='decrement'>-</button>

    <button type="button" wire:click='$refresh'>Refresh</button>
    <button type="button" wire:click='$commit' >Commit</button>
    <button type="button" x-on:click='$wire.$refresh()'>x-on:click</button>

    <button type="button" wire:click='delete' wire:confirm='Are you sure you want to delete this post?'>Delete Post</button>

    <hr>
        <p>Event: {{ $event }}</p>
        <button type="button" wire:click='clickEvent'>Click</button>
        <input type="text" placeholder="Keydown Event" wire:keydown='keydownEvent' wire:keyup='keyupEvent' wire:mouseenter='mouseenterEvent'>
        <input type="text" placeholder="Keydown Enter" wire:keydown.enter='keydownEnter'>
    <hr>

    <div style="margin-top: 10px">
        <label>Date Picker</label>
        <input type="text" name="date_picker" data-picker autocomplete="off">
    </div>
</div>

@assets
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

@script
    <script>
        setInterval(() => {
            {{-- $wire.increment()
            $wire.$refresh() --}}
        }, 2000)

        new Pikaday({ field: $wire.$el.querySelector('[data-picker]') });
    </script>
@endscript

