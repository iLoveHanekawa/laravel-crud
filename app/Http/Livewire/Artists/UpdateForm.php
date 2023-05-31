<?php

namespace App\Http\Livewire\Artists;

use App\Http\Controllers\ArtistController;
use Livewire\Component;

class UpdateForm extends Component
{
    public $isFocused = false;
    public $artistId;
    public $description;
    protected $listeners = ['toggleFocus', 'updateArtist'];

    public function mount($artistId) {
        $this->artistId = $artistId;
    }

    public function updateArtist() {
        $artistController = new ArtistController;
        $artistController->edit($this->artistId, $this->description);
    }

    public function toggleFocus() {
        $this->isFocused = !$this->isFocused;
    }

    public function render()
    {
        return view('livewire.artists.update-form');
    }
}
