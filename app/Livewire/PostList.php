<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class PostList extends Component
{
    use WithPagination;

    #[Computed()]
    public function posts()
    {
        return Post::published()->orderBy('published_at', 'desc')->paginate(3);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
