<?php

namespace App\Http\Controllers;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function store(string $name, string $description) {
        $artist = new Artist;
        $artist->name = $name;
        $artist->description = $description;
        $artist->save();
    }

    public function show() {
        $artists = Artist::all(['name', 'description', 'id']);
        return $artists;
    }

    public function destroy($id) {
        Artist::destroy($id);
    }

    public function edit($id, $description) {
        Artist::query()->where(['id' => $id])->update(['description' => $description]);
    }
}
