@extends('layouts.app')

@section('title', 'Halls')

@section('content')
    <h1>Halls</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($halls as $hall)
            <tr>
                <td>{{ $hall->id }}</td>
                <td><a href="{{ route('halls.show', $hall->id) }}">{{ $hall->name }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
