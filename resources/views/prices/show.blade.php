@extends('layouts.app')

@section('title', 'Price Details')

@section('content')
    <h1>Price Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $price->id }}</td>
        </tr>
        <tr>
            <th>Session ID</th>
            <td>{{ $price->session_id }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $price->category }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $price->price }}</td>
        </tr>
    </table>
    <a href="{{ route('prices.index') }}">Back to list</a>
@endsection
