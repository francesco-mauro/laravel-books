<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        //prelevare tutti i libri dal db
        $moviesList = Movie::all();
        // dd($movieList [0]->title);
        return view('movies', compact('moviesList'));
    }
}
