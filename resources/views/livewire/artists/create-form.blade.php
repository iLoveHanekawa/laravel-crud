<div class='flex flex-col gap-2'>
    <h3 class="text-4xl border-b-2 pt-3 pl-3 border-b-gray-700 pb-3">Add New Artist</h3>
    <form wire:submit.prevent="createArtist" class = 'flex items-end gap-2 ml-3 mt-2'>
        <div class="flex flex-col">
            <label class="text-gray-400 mb-1 text-xs font-semibold tracking-wide" for="name" >ARTIST NAME</label>
            <input wire:model="name" class="text-gray-600 pt-1 pb-1 pl-2 pr-2 indent-1 rounded-sm focus:outline-none w-64" id = "name" class='' type = 'text' placeholder="Lil Uzi Vert" />
        </div>
        <div class="flex flex-col ml-4">
            <label class='text-gray-400 mb-1 text-xs font-semibold tracking-wide' for="description">DESCRIPTION</label>
            <input wire:model="description" class="text-gray-600 pt-1 pb-1 pl-2 pr-2 indent-1 rounded-sm focus:outline-none w-64" id="description" type = 'text' placeholder="Legendary Philadelphia artist." />
        </div>
        <button class="border-2 border-gray-300 pt-1 pb-1 text-sm rounded-md pl-4 pr-4 hover:bg-white hover:text-black font-semibold tracking-wide ml-3 transition duration-300 ease-in-out">ADD</button>
    </form>
</div>
