@if (session('message'))
    @extends('layouts.app')
    @section('content')
        <div class="container" id="main_container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Registration in almost complete</div>
                        <div class="row card-body">
                    <span class="result_msg">
                        {{ session('message') }}
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
@else
    <script>window.location = "{{ asset('/register') }}";</script>
@endif