<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
	//Mostra la lista della risorsa Movie

	public function index() {
		$movies = Movie::all();
		return view('movies.index', compact('movies'));
	}


	//Mostra il dettaglio della risorsa Movie
	public function show(Movie $movie) {
		// $movie = Movie::find($id);
		// dd($movie);

		// if (empty($movie)) 
			// abort(404);

		return view('movies.show', compact('movie'));
	}
}
