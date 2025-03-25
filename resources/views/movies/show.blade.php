@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
    <h1>Movie Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $movie->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $movie->name }}</td>
        </tr>
        <tr>
            <th>Duration</th>
            <td>{{ $movie->duration }} min</td>
        </tr>
    </table>

    <h2>Halls Showing This Movie</h2>
    <table border="1">
        <tr>
            <th>Hall ID</th>
            <th>Hall Name</th>
        </tr>
        @foreach($movie->halls as $hall)
            <tr>
                <td><a href="{{ route('halls.show', $hall->id) }}">{{ $hall->id }}</a></td>
                <td>{{ $hall->name }}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('movies.index') }}">Back to list</a>
@endsection
