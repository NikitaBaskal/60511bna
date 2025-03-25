@extends('layouts.app')

@section('title', 'Ticket Details')

@section('content')
    <h1>Ticket Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{ $ticket->id }}</td>
        </tr>
        <tr>
            <th>Session ID</th>
            <td>{{ $ticket->session_id }}</td>
        </tr>
        <tr>
            <th>Seat ID</th>
            <td>{{ $ticket->seat_id }}</td>
        </tr>
        <tr>
            <th>Customer Name</th>
            <td>{{ $ticket->customer_name }}</td>
        </tr>
    </table>
    <a href="{{ route('tickets.index') }}">Back to list</a>
@endsection
