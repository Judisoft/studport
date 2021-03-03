<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Vote;
use Sentinel;

class AnswerVotes extends Component
{
    public $blog_id;
    public $votes_sum;
    public $voted = false;

    public function mount($blog_id)
    {
        $this->$blog_id = $blog_id;
        $this->votes_sum = $votes_sum;
    }
    public function render()
    {
        return view('blogitem', compact('votes_sum'));
    }
    public function vote($vote){
        if (Sentinel::getUser()->votes()
                    ->where('blog_id', $this->post_id)
                    ->count() > 0){
                        $this->voted =true;
                        return;
                    }
            Vote::create([
                'blog_id' => $this->blog_id,
                'user_id' => Sentinel::getUser()->id,
                'vote' => $vote
            ]);
            Blog::find($this->post_id)->increment('votes_sum', $vote);
            $this->votes_sum += $vote;
    }
   
}
