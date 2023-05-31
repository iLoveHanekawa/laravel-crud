<table class="text-white border-collapse mx-3 mt-5">
    <tr class="border-white border-2 text-lg">
        <th class="border-white border-2 py-2 font-bold tracking-widest">NAME</th>
        <th class="border-white border-2 font-bold tracking-widest">DESCRIPTION</th>
    </tr>
    @foreach ($artists as $artist)
        @php
            $artist = json_decode($artist);
        @endphp
        <tr wire:key="{{ $artist->id }}" class="border-white border-2">
            <td class="border-white border-2 pt-1 py-1 pl-2 text-gray-300">{{ $artist->name }}</td>
            <td class="border-white border-2 px-2 text-gray-300">
                <div class="w-full h-full flex justify-between">
                    {{ $artist->description }}
                    <div class="flex gap-2">
                        <livewire:artists.delete-form :artistId="$artist->id" :key="$artist->id" />
                        <livewire:artists.update-form :artistId="$artist->id" :key="$artist->id" />
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</table>
