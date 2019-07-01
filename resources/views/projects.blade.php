@extends('base')

@section('title', 'Projects page')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
    <a href="/">Home</a>
@endsection