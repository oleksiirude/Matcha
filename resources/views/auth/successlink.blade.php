@if (session('message'))
    @extends('layouts.app')
    @section('content')
        <div class="container" id="main_container">
            <span class="result_msg">
                {{ session('message') }}
            </span>
        </div>
    @endsection
@else
    <script>window.location = "/register";</script>
@endif

