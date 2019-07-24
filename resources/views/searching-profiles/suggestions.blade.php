@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles which you will probably like</div>
                        <div class="flex-center position-ref full-height">
                            @if (count($profiles))

                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <b>Sorting by:</b>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <form method="GET" action="{{ route('sort') }}">
                                                    <select class="form-control" name="sort">
                                                        <option value="age">age</option>
                                                        <option value="distance">distance</option>
                                                        <option value="rating">rating</option>
                                                        <option value="interests">interests</option>
                                                    </select>
                                                    <select class="form-control" name="order">
                                                        <option value="ascending">min to max</option>
                                                        <option value="descending">max to min</option>
                                                    </select>
                                                    <button type="submit">sort</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>

                                <b>Filter by:</b>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body">
                                            Age:
                                            <div class="form-group row">
                                                <form method="GET" action="{{ route('filter.age') }}">
                                                    <input name="age_from" id="age_from" type="range" min="18" max="120" value="0" step="1"
                                                           onsubmit="return false" oninput="level_age_from.value = age_from.valueAsNumber">
                                                    <output for="age_from" name="level_age_from">18</output>
                                                    <input name="age_to" id="age_to" type="range" min="18" max="120" value="60" step="1"
                                                           onsubmit="return false" oninput="level_age_to.value = age_to.valueAsNumber">
                                                    <output for="age_to" name="level_age_to">60</output>
                                                    <br>
                                                    <button type="submit">filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            Rating:
                                            <div class="form-group row">
                                                <form method="GET" action="{{ route('filter.rating') }}">
                                                    <input name="rating_from" id="rating_from" type="range" min="0" max="100" value="0" step="1"
                                                           onsubmit="return false" oninput="level_rating_from.value = rating_from.valueAsNumber">
                                                    <output for="rating_from" name="level_rating_from">0</output>
                                                    <input name="rating_to" id="rating_to" type="range" min="0" max="100" value="100" step="1"
                                                           onsubmit="return false" oninput="level_rating_to.value = rating_to.valueAsNumber">
                                                    <output for="rating_to" name="level_rating_to">100</output>
                                                    <br>
                                                    <button type="submit">filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col">
                                        <div class="card-body">
                                            Distance:
                                            <div class="form-group row">
                                                <form method="GET" action="{{ route('filter.distance') }}">
                                                    <input name="distance_from" id="distance_from" type="range" min="0" max="30" value="0" step="1"
                                                           onsubmit="return false" oninput="level_distance_from.value = distance_from.valueAsNumber">
                                                    <output for="distance_from" name="level_distance_from">0</output>km
                                                    <input name="distance_to" id="distance_to" type="range" min="0" max="30" value="30" step="1"
                                                           onsubmit="return false" oninput="level_distance_to.value = distance_to.valueAsNumber">
                                                    <output for="distance_to" name="level_distance_to">30</output>km
                                                    <br>
                                                    <button type="submit">filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card-body">
                                            Common interests:
                                            <div class="form-group row">
                                                <form method="GET" action="{{ route('filter.interests') }}">
                                                    <input name="interests_from" id="interests_from" type="range" min="0" max="20" value="0" step="1"
                                                           onsubmit="return false" oninput="level_interests_from.value = interests_from.valueAsNumber">
                                                    <output for="interests_from" name="level_interests_from">0</output>
                                                    <input name="interests_to" id="interests_to" type="range" min="0" max="20" value="20" step="1"
                                                           onsubmit="return false" oninput="level_interests_to.value = interests_to.valueAsNumber">
                                                    <output for="interests_to" name="level_interests_to">20</output>
                                                    <br>
                                                    <button type="submit">filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                @foreach($profiles as $profile)
                                    <div style="background-color: darkgrey">
                                        <p>
                                            <a href="{{ route('show.certain.user', $profile['login']) }}">
                                                <img src="{{ URL::asset($profile['avatar']) }}"
                                                     alt="{{ $profile['login'] }}'s avatar" style="width: 100px"
                                                     title="{{ $profile['login'] }}">
                                            </a>

                                            {{ $profile['name'] }} {{ $profile['surname'] }}

                                            <p>Age:
                                            @if($profile['age'])
                                                {{ $profile['age'] }} years
                                            @else
                                                isn't specified
                                            @endif
                                            </p>

                                            <p>
                                                Rating: {{ $profile['rating'] }}
                                            </p>

                                            <p>
                                            @if($profile['allow'])
                                                from {{ $profile['country'] }}, {{ $profile['city'] }}
                                            @endif
                                            </p>

                                            <p>
                                            @if ($profile['interests_matched'])
                                                {{ $profile['name'] }} has {{ $profile['interests_matched'] }} with you
                                            @endif
                                            </p>

                                            <p>
                                                {{ $profile['name'] }} is {{  $profile['distance'] }}
                                            </p>

                                            <p>
                                            @if ($profile['last_activity'])
                                                <span style="color: #1e7e34">{{ $profile['last_activity'] }}</span>
                                            @endif
                                            </p>
                                        </div>
                                @endforeach
                            @else
                                <p>
                                    Unfortunately, we cannot find anyone matched you in your geographical area
                                    <br>Try our <a href="{{ route('research') }}"><b>Advanced research</b></a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection