@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles which you will probably like</div>
                        <div class="flex-center position-ref full-height">
                            @if (count($profiles))

                                <div class="card-body" style="background-color: antiquewhite">
                                    <div class="form-group row">
                                        <form method="GET" action="{{ route('sort') }}">

                                            Sorting by:
                                            <select class="form-control" name="sort">
                                                <option value="age">age</option>
                                                <option value="distance">distance</option>
                                                <option value="rating">rating</option>
                                                <option value="interests">interests</option>
                                            </select>
                                            Order:
                                            <select class="form-control" name="order">
                                                <option value="ascending">min to max</option>
                                                <option value="descending">max to min</option>
                                            </select>
                                            <button type="submit">sort</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="card-body" style="background-color: wheat">
                                    <div class="form-group row">
                                        <form method="GET" action="{{ route('sort') }}">

                                            Age:
                                            <input type="search">
                                            <button type="submit">sort</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="card-body">
                                @foreach($profiles as $profile)
                                    <div style="background-color: darkgrey">
                                        <p>
                                            <a href="{{ route('show.certain.user', $profile->login) }}">
                                                <img src="{{ URL::asset($profile->avatar) }}"
                                                     alt="{{ $profile->login }}'s avatar" style="width: 100px"
                                                     title="{{ $profile->login }}">
                                            </a>

                                            {{ $profile->name }} {{ $profile->surname }}

                                            <p>Age:
                                            @if($profile->age)
                                                {{ $profile->age }} years
                                            @else
                                                isn't specified
                                            @endif
                                            </p>
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