<?php

namespace App\Http\Livewire\Artists;
use App\Http\Controllers\ArtistController;

use Livewire\Component;

class ArtistList extends Component
{
    public $artists = [];
    protected $listeners = ['deleteArtist'];
    private $artistId;
    private function getArtists() {
        $artistsController = new ArtistController;
        $this->artists = $artistsController->show();
    }
    public function deleteArtist() {
        $artistController = new ArtistController;
        $artistController->destroy($this->artistId);
    }

    public function render()
    {
        $this->getArtists();
        return view('livewire.artists.artist-list', ['artists' => $this->artists]);
    }
}
