@extends('base')

@section('title', 'Create project')

@section('content')
    <h2>Create project:</h2>
    <form method="post" action="/create">
        {{ csrf_field() }}
        <div>title<br>
            <input type="text" name="title">
        </div>
        <div>description<br>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">ok</button>
    </form>
@endsection