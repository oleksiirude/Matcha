@extends ('layouts.app')

@section('content')

    <wsconnecting-component></wsconnecting-component> {{-- connecting to ratchet websocket server --}}

    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Blocked profiles</div>
                    <div class="row card-body" id="card_body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="list_users">
                                        <a href="{{ route('show.certain.user', $profile->user->login) }}">
                                            <div class="list_users_avatar_div">
                                                <img src="{{ URL::asset($profile->user->avatar) }}"
                                                alt="{{ $profile->user->login }}'s avatar" class="list_users_avatar"
                                                title="{{ $profile->user->login }}">
                                            </div>
                                            <div class="list_users_info">
                                                {{ $profile->user->name }} {{ $profile->user->surname }}
                                                <div id="action_to_user" class="action_to_user">
{{--                                                    <form action="{{ route('unblock.user', [--}}
{{--                                                                    'id' => $profile->user->user_id,--}}
{{--                                                                    'login' => $profile->user->login--}}
{{--                                                                    ]) }}" method="POST">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('DELETE')--}}
                                                        <unblock-action-component csrf = "{{csrf_token()}}" url = "{{ route('unblock.user', [
                                                                    'id' => $profile->user->user_id,
                                                                    'login' => $profile->user->login
                                                                    ]) }}" method = "DELETE" imgsrc="{{asset('images/service/block_color.png')}}">
                                                        </unblock-action-component>
{{--                                                        <button type="submit" class="liked"><img src="{{asset('images/service/block_color.png')}}" title="unblock {{ $profile->login }}" alt="unblock"></button>--}}
{{--                                                    </form>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>You don't have any blocked profiles yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection