<form wire:submit.prevent="$emitSelf('updateArtist')">
    <button for='del' wire:click="$emitSelf('toggleFocus')">
        <i class="fa-solid fa-pen"></i>
    </button>
    <input wire:model="description" id="del" type="text" placeholder="New Description" class="indent-2 {{ $isFocused? 'w-0' :'w-96'}} duration-300 transition-width ease-in-out rounded-sm mx-1 focus:outline-none text-gray-600" />
    <button type="submit" class="transition-width overflow-hidden {{ $isFocused? 'w-0': 'w-4' }}"><i class="fa-solid fa-floppy-disk"></i></button>
</form>