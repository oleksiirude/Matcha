@extends('layouts.app')

@section('content')
    @foreach($history as $item)
        <p>{{ $item->recipient }}</p>
    @endforeach
    <websocket-component opponent="{{ $profile->login }}"
                         you="{{ auth()->user()->login }}"
                         id_from="{{ auth()->user()->id }}"
                         id_to="{{ $profile->user_id }}"
                         history="{{ $history }}">
    </websocket-component>
@endsection