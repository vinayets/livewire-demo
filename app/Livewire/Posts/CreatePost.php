<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Layout('components.layouts.header')]
class CreatePost extends Component
{
    // public $title = "Post title...";

    #[Layout('components.layouts.header')]
    #[Title('Create Post')]

    public $title = '';
    public $description = '';

    public function save()
    {
        Post::create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        return redirect()->to('/posts');
    }

    public function render()
    {
        // return view('livewire.posts.create-post')->with([
        //     'author' => 'Vinay ETS',
        // ]);

        /** Inline Component */
        // return <<<'HTML'
        //     <div>
        //         <h1>This is Inline Component!!!</h1>
        //     </div>
        // HTML;

        return view('livewire.posts.create-post');
    }
}
