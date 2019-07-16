@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $profile->login . "'s" }} profile</div>

                    <div class="card-body">
                            @if($profile->connected && !$profile->blocked)
                                <span style="color: #1d643b; font-weight: bold">You are connected with {{ $profile->login }}</span>

                                <form action="{{ route('show.chat', $profile->login) }}" method="GET">

                                    <button type="submit">go chatting with {{ $profile->login }}</button>
                                </form>

                            @endif

                            <p>
                            {{--Blocking block--}}
                            @if($profile->blocked)
                                <form action="{{ route('unblock.user', [
                                                'id' => $profile->user_id,
                                                'login' => $profile->login
                                                ]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit">unblock {{ $profile->login }}</button>
                                </form>
                            @else
                                <form action="{{ route('block.user', [
                                                 'id' => $profile->user_id,
                                                 'login' => $profile->login
                                                 ]) }}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <button type="submit">block {{ $profile->login }}</button>
                                </form>
                            @endif
                            <p>
                            {{--Like block--}}
                            @if($profile->liked)
                                <form action="{{ route('unlike.user', [
                                                    'id' => $profile->user_id,
                                                    'login' => $profile->login
                                                    ]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit">unlike {{ $profile->login }}</button>
                                </form>
                            @else
                                <form action="{{ route('like.user', [
                                                     'id' => $profile->user_id,
                                                     'login' => $profile->login
                                                     ]) }}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <button type="submit">like {{ $profile->login }}</button>
                                </form>
                            @endif

                            <p><b>Name Surname:</b> {{ $profile->name }} {{ $profile->surname }}</p>

                            <p><b>Rating:</b> {{ $profile->rating }}</p>

                            <p><b>Activity:</b>
                            @if ($profile->last_activity === 'online')
                                    <span style="color: #1e7e34">{{ $profile->last_activity }}</span>
                            @else
                                    <span>{{ $profile->last_activity }}</span>
                            @endif
                            </p>

                            <p> Avatar:
                                <img src="{{ URL::asset($profile->avatar) }}" alt="avatar" style="width: 200px">
                            </p>

                            @if($profile->photo1)
                                <p> Photo 1:
                                    <img src="{{ URL::asset($profile->photo1) }}" alt="photo1" style="width: 200px">
                                </p>
                            @endif

                            @if($profile->photo2)
                                <p> Photo 2:
                                    <img src="{{ URL::asset($profile->photo2) }}" alt="photo2" style="width: 200px">
                                </p>
                            @endif

                            @if($profile->photo3)
                                <p> Photo 3:
                                    <img src="{{ URL::asset($profile->photo3) }}" alt="photo3" style="width: 200px">
                                </p>
                            @endif

                            @if($profile->photo4)
                                <p> Photo 4:
                                    <img src="{{ URL::asset($profile->photo4) }}" alt="photo4" style="width: 200px">
                                </p>
                            @endif

                            <p><b>Gender:</b> {{ $profile->gender }}</p>

                            <p><b>Sexual preferences:</b> {{ $profile->preferences }}</p>

                            <p><b>Age:</b> {{ $profile->age }}</p>

                            @if($profile->bio)
                                <p><b>Bio:</b> {{ $profile->bio }}</p>
                            @endif

                            @if(count($profile->interests))
                                <p><b>Interests:</b>
                                    @foreach($profile->interests as $interest)
                                        <a href="#" style="color: cornflowerblue">{{ $interest->tag }}</a>
                                    @endforeach
                                </p>
                            @endif

                            @if($profile->allow)
                                <p><b>Location:</b> {{ $profile->country }}, {{ $profile->city }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection