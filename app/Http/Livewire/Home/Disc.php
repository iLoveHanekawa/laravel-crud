<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Disc extends Component
{
    protected $listeners = ['navigate'];
    public function navigate() {
        redirect()->to('/artists');
    }
    public function render()
    {
        return view('livewire.home.disc');
    }
}
