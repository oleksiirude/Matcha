@extends ('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles liked me</div>
                    <div class="card-body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div style="background-color: darkgrey">
                                    <p>
                                        <a href="{{ route('show.certain.user', $profile->login) }}">
                                            <img src="{{ URL::asset($profile->avatar) }}"
                                                 alt="{{ $profile->login }}'s avatar" style="width: 60px"
                                                 title="{{ $profile->login }}">
                                        </a>
                                        {{ $profile->name }} {{ $profile->surname }} |

                                        @if ($profile->last_activity === 'online')
                                            <span style="color: #1e7e34">{{ $profile->last_activity }}</span>
                                        @else
                                            <span>{{ $profile->last_activity }}</span>
                                    @endif
                                    <p>
                                    @if($profile->connected && !$profile->blocked)
                                         <span style="color: #1d643b; font-weight: bold">You are connected with {{ $profile->login }}</span>

                                        <form action="{{ route('show.chat', $profile->login) }}" method="GET">

                                            <button type="submit">go chatting with {{ $profile->login }}</button>
                                        </form>
                                    @endif

                                    {{--Like block--}}
                                    @if($profile->auth_user_avatar_uploaded)
                                        @if($profile->liked)
                                            <form action="{{ route('unlike.user', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit">unlike</button>
                                            </form>
                                        @else
                                            <form action="{{ route('like.user', [
                                                         'id' => $profile->user_id,
                                                         'login' => $profile->login
                                                         ]) }}" method="POST">
                                                @method('PUT')
                                                @csrf

                                                <button type="submit">like back</button>
                                            </form>
                                        @endif
                                    @endif
                                    <p></p>
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