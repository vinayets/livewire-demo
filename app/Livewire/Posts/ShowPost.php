<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Http\Response;

class ShowPost extends Component
{
    public Post $post;

    // Accessing route parameters
    // public function mount($id)
    // {
    //     $this->post = Post::findOrFail($id);
    // }

    // Using route model binding
    // public function mount(Post $post)
    // {
    //     $this->post = $post;
    // }

    public function render()
    {
        return view('livewire.posts.show-post')
                ->response(function(Response $response) {
                    $response->header('X-Custom-Header', true);
                });
    }
}
