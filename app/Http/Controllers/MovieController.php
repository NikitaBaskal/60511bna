<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('halls')->findOrFail($id); // Загружаем связанные залы
        return view('movies.show', compact('movie'));
    }
}
