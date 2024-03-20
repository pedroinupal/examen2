<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function index()
    {
    $genres = Genre::select('id','genre_name')
        
        ->get();
        
        return view('genres.index',compact('genres'));
    }
}