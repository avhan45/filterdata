<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $post;

    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->post = Post::get();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function reloadPosts($category_id, $query)
    {
        $this->post = Post::query();

        if($category_id) {
            $this->post = $this->post->where('category_id', $category_id);
        }

        if($query) {
            $this->post = $this->post->where('title', 'like', '%'.$query.'%');
        }

        $this->post = $this->post->get();
    }
}
