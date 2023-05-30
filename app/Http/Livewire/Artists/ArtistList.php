<?php

namespace App\Http\Livewire\Artists;
use App\Http\Controllers\ArtistController;

use Livewire\Component;

class ArtistList extends Component
{
    private $artists = [];
    private function getArtists() {
        $artistsController = new ArtistController;
        $this->artists = $artistsController->show();
    }
    public function render()
    {
        $this->getArtists();
        return view('livewire.artists.artist-list', ['artists' => $this->artists]);
    }
    
}
