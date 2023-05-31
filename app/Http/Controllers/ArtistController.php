<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function store(string $name, string $description) {
        $artist = new Artist;
        $artist->name = $name;
        $artist->description = $description;
        $artist->save();
        return $artist;
    }

    public function show() {
        $artists = Artist::all(['name', 'description']);
        return $artists;
    }
}
