@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <p>List of all users</p>
                    @foreach($users as $user)
                        <p>{{ $user->login }} | {{ $user->email }} |
                        @if($user->isOnline())
                                <b style="color: #1c7430">online</b>
                        @else
                                <b>last activity: {{ $user->last_activity }}</b>
                        @endif
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection