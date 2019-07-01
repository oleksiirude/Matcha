@extends('base')

@section('title', 'Contacts page')

@section('content')
    <h1>Contacts</h1>
    <ul>
        @foreach($contacts as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
    <a href="/">Home</a>
@endsection