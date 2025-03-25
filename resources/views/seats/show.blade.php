@extends('layouts.app')

@section('title', 'Seat Details')

@section('content')
    <h1>Seat Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $seat->id }}</td>
        </tr>
        <tr>
            <th>Row</th>
            <td>{{ $seat->row }}</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>{{ $seat->number }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $seat->category }}</td>
        </tr>
    </table>
    <a href="{{ route('seats.index') }}">Back to list</a>
@endsection
