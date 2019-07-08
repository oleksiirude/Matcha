@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>{{ $profile->name }}</p>
{{--                            <p>{{ $profile->surname }}</p>--}}
{{--                            <p>{{ $profile->preferences }}</p>--}}
{{--                            <p>{{ $profile->email }}</p>--}}
{{--                            <p>{{ $profile->rating }}</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection