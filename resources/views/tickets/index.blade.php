@extends('layouts.app')

@section('title', 'Tickets')

@section('content')
    <h1>Tickets</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Session ID</th>
            <th>Seat ID</th>
            <th>Customer Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->session_id }}</td>
                <td>{{ $ticket->seat_id }}</td>
                <td>{{ $ticket->customer_name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
