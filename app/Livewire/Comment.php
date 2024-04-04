<?php

namespace App\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment;
    public $showReplyForm = false;
    public $newReplyContent;
    public $name;

    public function mount($comment)
    {
        $this->comment = $comment;
    }


    public function render()
    {
        return view('livewire.comment');
    }

    public function toggleReplyForm()
    {
        $this->showReplyForm = !$this->showReplyForm;
    }

    public function addReply()
    {
        $this->validate([
            'newReplyContent' => 'required',
        ]);

        // Create a new reply for the current comment
        $this->comment->replies()->create([
            'content' => $this->newReplyContent,
            'name' => $this->name,
        ]);

        // Clear the input fields
        $this->reset(['name', 'content']);

        // Toggle off the reply form after adding a reply
        $this->showReplyForm = false;

        // Refresh the comments
        $this->dispatch('emitCommentAdded');
    }
}
