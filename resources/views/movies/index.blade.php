@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Duration</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->name }}</a></td>
                <td>{{ $movie->duration }} min</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
