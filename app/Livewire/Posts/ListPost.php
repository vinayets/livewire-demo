<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ListPost extends Component
{
    #[Title('Posts')]

    public function delete(Post $post) {
        // $this->authorize('delete', $post);
        $post->delete();
    }

    public function render()
    {
        return view('livewire.posts.list-post')->with([
            'posts' => Post::all(),
        ]);
    }
}
