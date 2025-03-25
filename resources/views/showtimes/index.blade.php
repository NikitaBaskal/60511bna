@extends('layouts.app')

@section('title', 'Showtimes')

@section('content')
    <h1>Showtimes</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Movie ID</th>
            <th>Hall ID</th>
            <th>Start Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($showtimes as $showtime)
            <tr>
                <td>{{ $showtime->id }}</td>
                <td>{{ $showtime->movie_id }}</td>
                <td>{{ $showtime->hall_id }}</td>
                <td>{{ $showtime->start_time }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
