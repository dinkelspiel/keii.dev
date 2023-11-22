<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index');
    }
}
