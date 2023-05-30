<div class="text-white">
    <ul>
        @foreach ($artists as $artist)
            @php
                $artist = json_decode($artist);
            @endphp
            <li>{{ $artist->name }}</li>
            <li>{{ $artist->description }}</li>
        @endforeach
    </ul>
</div>
