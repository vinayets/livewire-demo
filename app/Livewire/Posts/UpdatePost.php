<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Locked;

class UpdatePost extends Component
{
    // #[Locked]
    // public $id;
    public Post $post;
    public $title;
    public $description;

    public function mount(Post $post)
    {
        // $this->id = $post->id;
        $this->post = $post;
        $this->title = $post->title;
        $this->description = $post->description;
    }

    public function update()
    {
        // $post = Post::findOrFail($this->id);

        // $post->update([
        //     'title' => $this->title,
        //     'description' => $this->description,
        // ]);

        $this->post->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Post updated successfully!');
    }

    public function render()
    {
        return view('livewire.posts.update-post');
    }
}
