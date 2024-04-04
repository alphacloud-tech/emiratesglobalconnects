<?php

namespace App\Livewire;

use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\Reply;
use Livewire\Component;

class CommentSection extends Component
{
    public $blog;
    public $content;
    public $name;

    public function mount(BlogPost $blogPost, $blog)
    {
        // dd($blogPost);
        // dd($blog);
        // dd($blog);
        $this->blog = $blogPost;
    }

    public function addComment()
    {
        $this->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        // Create a new comment for the current blog post
        $this->blog->comments()->create([
            'name' => $this->name,
            'content' => $this->content,
        ]);

        // Clear the input fields
        $this->reset(['name', 'content']);

        // Refresh the comments
        $this->dispatch('emitCommentAdded');
    }

    public function render()
    {
        $data = [
            'comments' => $this->blog->comments()->with('replies')->get(),
        ];

        // dd($data);
        return view('livewire.comment-section', $data);
    }
}
