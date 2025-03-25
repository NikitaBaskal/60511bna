@extends('layouts.app')

@section('title', 'Showtime Details')

@section('content')
    <h1>Showtime Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $showtime->id }}</td>
        </tr>
        <tr>
            <th>Movie ID</th>
            <td>{{ $showtime->movie_id }}</td>
        </tr>
        <tr>
            <th>Hall ID</th>
            <td>{{ $showtime->hall_id }}</td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td>{{ $showtime->start_time }}</td>
        </tr>
    </table>
    <a href="{{ route('showtimes.index') }}">Back to list</a>
@endsection
