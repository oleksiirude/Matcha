@extends ('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My viewed profiles</div>
                    <div class="card-body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div style="background-color: darkgrey">
                                    <p>
                                        <a href="{{ route('show.certain.user', $profile->user->login) }}">
                                            <img src="{{ URL::asset($profile->user->avatar) }}"
                                                 alt="{{ $profile->user->login }}'s avatar" style="width: 60px"
                                                 title="{{ $profile->user->login }}">
                                        </a>

                                        {{ $profile->user->name }} {{ $profile->user->surname }}

                                        @if($profile->location->allow)
                                            from {{ $profile->location->country }}, {{ $profile->location->city }}</p>
                                        @endif

                                        <br>

                                        @if ($profile->user->status === 'online')
                                            <span style="color: #1e7e34">{{ $profile->user->status }}</span>
                                        @else
                                            <span>{{ $profile->user->status }}</span>
                                        @endif

                                        | Visited by you: {{ $profile->date }}

                                        <form action="{{ route('delete.viewed.profile', $profile->user->user_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit">delete from history</button>
                                        </form>

                                    <p></p>
                                </div>

                            @endforeach
                        @else
                            <p>You haven't viewed any profiles yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection