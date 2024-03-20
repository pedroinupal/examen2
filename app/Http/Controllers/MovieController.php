<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Director;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
    $movies = Movie::join('genres','genres.id', '=','movies.genre_id')
        ->join('directors','directors.id', '=','movies.director_id')
        ->select('movies.id','movies.movie_title','movies.poster','genres.genre_name,','directors.director_name','directors.birth_date')
        ->get();
        
        return view('movies.index',compact('movies'));


       
    }
}