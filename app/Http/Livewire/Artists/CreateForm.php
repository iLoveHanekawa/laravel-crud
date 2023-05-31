<?php

namespace App\Http\Livewire\Artists;

use Livewire\Component;
use App\Http\Controllers\ArtistController;

class CreateForm extends Component
{
    protected $listeners = ['createArtist'];
    public $name;
    public $description;

    public function createArtist() {
        $artistController = new ArtistController;
        $artistController->store($this->name, $this->description);
    }
    public function render()
    {
        return view('livewire.artists.create-form');
    }
}
