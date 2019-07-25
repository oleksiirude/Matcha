@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiles which you will probably like</div>
                    <div class="flex-center position-ref full-height">

                        <b>Filter by:</b>
                        <form method="GET" action="{{ route('find.filter.sort') }}">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        Age:
                                        <div class="form-group row">
                                            <input name="age_from" id="age_from" type="range" min="18" max="55" value="0" step="1"
                                                   onsubmit="return false" oninput="level_age_from.value = age_from.valueAsNumber">
                                            <output for="age_from" name="level_age_from">18</output>
                                            <input name="age_to" id="age_to" type="range" min="18" max="55" value="55" step="1"
                                                   onsubmit="return false" oninput="level_age_to.value = age_to.valueAsNumber">
                                            <output for="age_to" name="level_age_to">55</output>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        Rating:
                                        <div class="form-group row">
                                            <input name="rating_from" id="rating_from" type="range" min="0" max="100" value="0" step="1"
                                                   onsubmit="return false" oninput="level_rating_from.value = rating_from.valueAsNumber">
                                            <output for="rating_from" name="level_rating_from">0</output>
                                            <input name="rating_to" id="rating_to" type="range" min="0" max="100" value="100" step="1"
                                                   onsubmit="return false" oninput="level_rating_to.value = rating_to.valueAsNumber">
                                            <output for="rating_to" name="level_rating_to">100</output>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="card-body">
                                        Distance:
                                        <div class="form-group row">
                                            <input name="distance_from" id="distance_from" type="range" min="0" max="500" value="0" step="1"
                                                   onsubmit="return false" oninput="level_distance_from.value = distance_from.valueAsNumber">
                                            <output for="distance_from" name="level_distance_from">0</output>km
                                            <input name="distance_to" id="distance_to" type="range" min="0" max="500" value="30" step="1"
                                                   onsubmit="return false" oninput="level_distance_to.value = distance_to.valueAsNumber">
                                            <output for="distance_to" name="level_distance_to">30</output>km
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        Common interests:
                                        <div class="form-group row">
                                            <input name="interests_from" id="interests_from" type="range" min="0" max="20" value="0" step="1"
                                                   onsubmit="return false" oninput="level_interests_from.value = interests_from.valueAsNumber">
                                            <output for="interests_from" name="level_interests_from">0</output>
                                            <input name="interests_to" id="interests_to" type="range" min="0" max="20" value="20" step="1"
                                                   onsubmit="return false" oninput="level_interests_to.value = interests_to.valueAsNumber">
                                            <output for="interests_to" name="level_interests_to">20</output>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <b>Sorting by:</b>
                                    <div class="card-body">
                                        <div class="form-group row">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <button type="submit">OK</button>
                        </form>

                        <div class="card-body">

                            @if (count($profiles))

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
                                                @if ($profile['interests_matched'] > 1)
                                                    Common interests with {{ $profile['name'] }}:
                                        <ul>
                                            @foreach($profile['interests'] as $interest)
                                                <li>{{ $interest }}</li>
                                            @endforeach
                                        </ul>
                                        @else
                                            Common interest: {{ $profile['interests'][0] }}
                                            @endif
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
                                    Unfortunately, we cannot find anyone matched you
                                    <br>Please, try another search parameters
                                </p>
                            @endif
                            {{ $profiles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection