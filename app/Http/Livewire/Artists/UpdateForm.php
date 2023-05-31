<?php

namespace App\Http\Livewire\Artists;

use Livewire\Component;

class UpdateForm extends Component
{
    public $isFocused = false;
    protected $listeners = ['toggleFocus'];
    public function toggleFocus() {
        $this->isFocused = !$this->isFocused;
    }
    public function render()
    {
        return view('livewire.artists.update-form');
    }
}
