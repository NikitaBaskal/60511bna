@extends('layouts.app')

@section('title', 'Prices')

@section('content')
    <h1>Prices</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Session ID</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($prices as $price)
            <tr>
                <td>{{ $price->id }}</td>
                <td>{{ $price->session_id }}</td>
                <td>{{ $price->category }}</td>
                <td>{{ $price->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
