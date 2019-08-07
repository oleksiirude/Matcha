@extends ('layouts.app')

@section('content')

    <wsconnecting-component></wsconnecting-component> {{-- connecting to ratchet websocket server --}}

    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles you connected with</div>
                    <div class="row card-body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="list_users">
                                        <a href="{{ route('show.certain.user', $profile->login) }}">
                                            <div class="list_users_avatar_div">
                                                <img src="{{ URL::asset($profile->avatar) }}"
                                                     alt="{{ $profile->login }}'s avatar" class="list_users_avatar"
                                                     title="{{ $profile->login }}">
                                            </div>
                                            <div class="list_users_info">
                                                {{ $profile->name }} {{ $profile->surname }}
                                                <div class="list_users_activity">
                                                    @if ($profile->last_activity === 'online')
                                                        <span style="color: #1e7e34">{{ $profile->last_activity }}</span>
                                                    @else
                                                        <span>{{ $profile->last_activity }}</span>
                                                    @endif
                                                </div>
                                                <div id="action_to_user" class="action_to_user">
                                                    @if($profile->connected && !$profile->blocked)
                                                    <form action="{{ route('show.chat', $profile->login) }}" method="GET">
                                                        <button type="submit"><img src="{{asset('images/service/chat.png')}}" title="chat with {{ $profile->login }}"></button>
                                                    </form>
                                                    @else
                                                        <form action="{{ route('unblock.user', [
                                                                'id' => $profile->user_id,
                                                                'login' => $profile->login
                                                                ]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf

                                                            <button type="submit" class="liked"><img src="{{asset('images/service/block_color.png')}}" title="unblock {{ $profile->login }}" alt="unblock">You blocked {{ $profile->login }}, Unblock?</button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>You don't have any connections yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection