@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles which you will probably like</div>

                    <div class="card-body">
                        <div class="flex-center position-ref full-height">
                            @if (count($profiles))

                                <div class="card-body">filtering</div>

                                <div class="card-body">sorting</div>

                                @foreach($profiles as $profile)
                                    <div style="background-color: darkgrey">
                                        <p>
                                            <a href="{{ route('show.certain.user', $profile->login) }}">
                                                <img src="{{ URL::asset($profile->avatar) }}"
                                                     alt="{{ $profile->login }}'s avatar" style="width: 100px"
                                                     title="{{ $profile->login }}">
                                            </a>

                                            {{ $profile->name }} {{ $profile->surname }}
                                        </p>

                                        <p>
                                            Rating: {{ $profile->rating }}
                                        </p>

                                        <p>
                                        @if($profile->allow)
                                            from {{ $profile->country }}, {{ $profile->city }}
                                        @endif
                                        </p>

                                        <p>
                                        @if ($profile->matches)
                                            {{ $profile->name }} has {{ $profile->matches }} with you
                                        @endif
                                        </p>

                                        <p>
                                            {{ $profile->name }} is {{ $profile->distance }}
                                        </p>

                                        <p>
                                        @if ($profile->last_activity)
                                            <span style="color: #1e7e34">{{ $profile->last_activity }}</span>
                                        @endif
                                        </p>
                                    </div>

                                @endforeach
                            @else
                                <p>
                                    Unfortunately, we cannot find anyone matched you in your geographical area
                                    <br>Try <a href="{{ route('research') }}">Advanced research</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection