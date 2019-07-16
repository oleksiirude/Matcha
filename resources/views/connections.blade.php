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
                                        {{ $profile->name }} {{ $profile->surname }}

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