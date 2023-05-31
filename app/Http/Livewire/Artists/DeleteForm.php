<?php

namespace App\Http\Livewire\Artists;

use App\Http\Controllers\ArtistController;
use Livewire\Component;

class DeleteForm extends Component
{
    protected $listeners = ['deleteArtist'];
    public $artistId;
    public function mount($artistId) {
        $this->artistId = $artistId;
    }
    public function deleteArtist() {
        $artistController = new ArtistController;
        $artistController->destroy($this->artistId);
    }
    public function render()
    {
        return view('livewire.artists.delete-form');
    }
}
