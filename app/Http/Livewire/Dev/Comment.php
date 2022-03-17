<?php

namespace App\Http\Livewire\Dev;

use Livewire\Component;
use App\Models\DevComment;

class Comment extends Component
{
    public $comment,$show = false,$align;

    protected $rules = [
        'comment.comments' => 'required',
        'comment.component' => 'required'
    ];

    public function mount($component, $align = 'center')
    {

        $this->comment =  DevComment::where('component', $component)->first();
        $this->align = $align;
        if(!$this->comment){
            $this->comment = new DevComment();
            $this->comment->component = $component;
        }

    }

    public function save()
    {
        $this->validate();
        $this->comment->unseen = true;
        $this->comment->save();
        $this->show = false;

    }

    public function showForm()
    {
        $this->show = true;
    }

    public function showUpdates()
    {
        $this->comment->unseen = false;
        $this->comment->save();
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.dev.comment');
    }


}
