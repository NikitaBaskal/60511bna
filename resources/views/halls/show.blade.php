@extends('layouts.app')

@section('title', 'Hall Details')

@section('content')
    <h1>Hall Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $hall->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $hall->name }}</td>
        </tr>
    </table>

    <h2>Seats in this Hall</h2>
    <table border="1">
        <tr>
            <th>Row</th>
            <th>Seat Number</th>
            <th>Category</th>
        </tr>
        @foreach($hall->seats as $seat)
            <tr>
                <td>{{ $seat->row_number }}</td>
                <td>{{ $seat->seat_number }}</td>
                <td>{{ $seat->price_category }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Movies Playing in this Hall</h2>
    <table border="1">
        <tr>
            <th>Movie ID</th>
            <th>Movie Name</th>
        </tr>
        @foreach($hall->movies as $movie)
            <tr>
                <td><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->id }}</a></td>
                <td>{{ $movie->name }}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('halls.index') }}">Back to list</a>
@endsection
