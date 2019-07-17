@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat between</div>
                    <div class="card-header">{{ $profile->login . ' and ' . auth()->user()->login}}</div>

                    <div class="card-body">
                        <p>HERE WILL BE THE BEST CHATROOM EVER :D</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection