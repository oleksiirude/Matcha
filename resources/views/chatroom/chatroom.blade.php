@extends('layouts.app')

@section('content')
    <websocket-component opponent="{{ $profile->login }}"
                         you="{{ auth()->user()->login }}"
                         id_from="{{ auth()->user()->id }}"
                         id_to="{{ $profile->user_id }}"
                         history="{{ $history }}"
                         opponents_avatar="{{ asset($profile->avatar) }}"
                         your_avatar="{{ asset($profile->your_avatar) }}">
    </websocket-component>
@endsection