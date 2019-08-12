@extends('layouts.app')

@section('content')

    <wsconnecting-component></wsconnecting-component> {{-- connecting to ratchet websocket server --}}

    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Woops... Access denied</div>

                    <div class="card-body">
                        <div class="flex-center position-ref full-height">
                            <div class="message" style="padding: 10px;">
                                You don't have access to this page...<br>
                                Maybe some user've blocked you? <br>
                                Or you simply have lost connection with this user?<br>
                                Who knows...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection