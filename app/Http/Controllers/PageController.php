<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// questo è il namespace di Movie.php
use App\Models\Movie;

class PageController extends Controller
{
  //mostra la homepage
  public function index() {

    $movies = Movie::all();

    //ottengo un oggetto di tipo Collection
    // dd($movies); 
    // dd($movies[0]->title); 

    return view('home');
  }
}