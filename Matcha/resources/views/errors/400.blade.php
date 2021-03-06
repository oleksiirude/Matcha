@extends('layouts.error')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">400 | Bad Request</div>
                    <div class="row card-body justify-content-center">
                        <p>Unfortunately, your request isn't valid</p>
                    </div>
                    <div class="row card-body justify-content-center">
                        <a href="/" class="btn edit_submit" style="color: whitesmoke" role="button" aria-pressed="true">main page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection