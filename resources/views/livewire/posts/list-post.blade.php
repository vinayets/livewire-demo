<div>
    @foreach ($posts as $post)
        <div wire:key='{{ $post->id }}'>
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->description }}</span>

            <button wire:click='delete({{ $post->id }})'>Delete</button>
        </div>
    @endforeach
</div>
