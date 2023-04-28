<?php

namespace App\Http\Controllers;
use App\Models\Artist;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function store() {
        $artist = new Artist;
        $artist->name = 'Arjun';
        $artist->description = 'Arjun is creating apps.';
        $artist->save();
    }
}
