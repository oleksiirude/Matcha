@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Access denied</div>

                    <div class="card-body">
                        <div class="flex-center position-ref full-height">
                            <div class="message" style="padding: 10px;">
                                User {{ $user }} blocked you <br>
                                You can't do any action to him/her
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection