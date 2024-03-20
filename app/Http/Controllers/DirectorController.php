<?php

namespace App\Http\Controllers;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{

    public function index()
    {
    $directors = Director::select('id','director_name','birth_date')
        
        ->get();
        //dd($conferences);
        return view('directors.index',compact('directors'));
    }
}
