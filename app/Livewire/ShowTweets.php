<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{

    public $message = "TESTE DE MESSAGEM";

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
