<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //
    public function getMoviesData () {
        $movies_data = Movie::all();
        return view('layouts.app', compact('movies_data'));
    }
}
