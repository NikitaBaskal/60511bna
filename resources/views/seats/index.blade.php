@extends('layouts.app')

@section('title', 'Seats')

@section('content')
    <h1>Seats</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Row</th>
            <th>Number</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($seats as $seat)
            <tr>
                <td>{{ $seat->id }}</td>
                <td>{{ $seat->row }}</td>
                <td>{{ $seat->number }}</td>
                <td>{{ $seat->category }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
