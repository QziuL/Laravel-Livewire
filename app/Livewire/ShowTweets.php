<?php

namespace App\Livewire;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = "TESTE DE MESSAGEM";
    protected $rules = [
        'content' => 'required|min:3|max:255',
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(5);
        
        return view('livewire.show-tweets', compact('tweets'));
    }

    public function create()
    {
        $this->validate();
        
        // Tweet::create([
        //     'user_id' => auth()->user()->id,
        //     'content' => $this->content,
        // ]);

        auth()->user()->tweets()->create([
            'content' => $this->content,
        ]);

        $this->content = '';
    }

    public function like(int $idTweet)
    {
        $tweet = Tweet::findOrFail($idTweet);

        $tweet->likes()->create([
            'user_id' => auth()->user()->id,
        ]);
    }

    public function unlike(int $idTweet)
    {
        $tweet = Tweet::findOrFail($idTweet);

        $tweet->likes()->delete();
    }
}
