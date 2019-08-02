@extends ('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Profiles, who liked me</div>
                    <div class="row card-body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                                                         <span style="color: #1d643b; font-weight: bold">
                                                             <img src="{{asset('images/service/connect.png')}}" title="You are connected with {{ $profile->login }}">
                                                         </span>

                                                        <form action="{{ route('show.chat', $profile->login) }}" method="GET">

                                                            <button type="submit"><img src="{{asset('images/service/chat.png')}}" title="go chatting with {{ $profile->login }}"></button>
                                                        </form>
                                                    @endif

{{--                                                    --}}{{--Like block--}}
{{--                                                    @if($profile->auth_user_avatar_uploaded)--}}
{{--                                                        @if($profile->liked)--}}
{{--                                                            <form action="{{ route('unlike.user', [--}}
{{--                                                                        'id' => $profile->user_id,--}}
{{--                                                                        'login' => $profile->login--}}
{{--                                                                        ]) }}" method="POST">--}}
{{--                                                                @method('DELETE')--}}
{{--                                                                @csrf--}}
{{--                                                                <button type="submit" class="liked">--}}
{{--                                                                    <img src="{{asset('images/service/like.png')}}" title="unlike user" alt="unlike">--}}
{{--                                                                </button>--}}
{{--                                                            </form>--}}
{{--                                                        @else--}}
{{--                                                            <form action="{{ route('like.user', [--}}
{{--                                                                         'id' => $profile->user_id,--}}
{{--                                                                         'login' => $profile->login--}}
{{--                                                                         ]) }}" method="POST">--}}
{{--                                                                @method('PUT')--}}
{{--                                                                @csrf--}}

{{--                                                                <button type="submit"><img src="{{asset('images/service/like.png')}}" title="like back" alt="like back"></button>--}}
{{--                                                            </form>--}}
{{--                                                        @endif--}}
{{--                                                    @endif--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Nobody hasn't liked your profile yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection