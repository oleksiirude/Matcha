@extends ('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles you connected with</div>
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

                                        @if($profile->connected && !$profile->blocked)
                                        <form action="{{ route('show.chat', $profile->login) }}" method="GET">
                                            <button type="submit">chat with {{ $profile->login }}</button>
                                        </form>
                                        @endif

                                    <p></p>
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