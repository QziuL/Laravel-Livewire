<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    public $message = "TESTE DE MESSAGEM";

    public function render()
    {
        $tweets = Tweet::all();
        
        return view('livewire.show-tweets', compact('tweets'));
    }
}
