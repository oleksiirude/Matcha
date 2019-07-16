@extends ('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blocked profiles</div>
                    <div class="card-body">
                        @if (count($profiles))
                            @foreach($profiles as $profile)
                                <div style="background-color: darkgrey">

                                    <a href="{{ route('show.certain.user', $profile->user->login) }}">
                                        <img src="{{ URL::asset($profile->user->avatar) }}"
                                        alt="{{ $profile->user->login }}'s avatar" style="width: 60px"
                                        title="{{ $profile->user->login }}">
                                    </a>

                                    {{ $profile->user->name }} {{ $profile->user->surname }}
                                    <form action="{{ route('unblock.user', [
                                                    'id' => $profile->user->user_id,
                                                    'login' => $profile->user->login
                                                    ]) }}" method="POST">
                                            @csrf

                                        <button type="submit">unblock {{ $profile->login }}</button>
                                    </form>

                                    <p></p>
                                </div>

                            @endforeach
                        @else
                            <p>You haven't any blocked profiles yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection