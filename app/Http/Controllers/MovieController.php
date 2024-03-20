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
	public function show(int $id) {
		$movie = Movie::find($id);
		// dd($movie);
		return view('movies.show', compact('movie'));
	}
}
