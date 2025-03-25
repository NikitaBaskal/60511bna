<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $halls = Hall::all(); // Получаем все залы
        return view('halls.index', compact('halls')); // Передаем в представление
    }

    public function show($id)
    {
        $hall = Hall::with(['seats', 'movies'])->findOrFail($id); // Загружаем связанные места и фильмы
        return view('halls.show', compact('hall')); // Передаем в представление
    }

}
