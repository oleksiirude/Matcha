@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <span class="result_msg">
           @if (session('message'))
                {{ session('message') }}
            @endif
        </span>
    </div>
@endsection
