<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    // Метод для получения списка всех сеансов
    public function index()
    {
        $showtimes = Showtime::with(['hall', 'movie'])->get();
        return response()->json($showtimes);
    }

    // Метод для получения конкретного сеанса по ID
    public function show($id)
    {
        $showtime = Showtime::with(['hall', 'movie'])->find($id);

        if (!$showtime) {
            return response()->json(['message' => 'Showtime not found'], 404);
        }

        return response()->json($showtime);
    }
}
