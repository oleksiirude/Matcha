@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('nouislider/distribute/nouislider.js')}}"></script>
@endpush

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('nouislider/distribute/nouislider.css')}}" />
@endpush

@section('content')

    <wsconnecting-component></wsconnecting-component> {{-- connecting to ratchet websocket server --}}

    <div class="search_container" id="main_container">
        <div class="row">
            <div class="" style="width: 100%">

                <filter-component url="{{ route('find.filter.sort') }}" url_default="{{ route('searching') }}"></filter-component>

                <div class="card" id="search_blade_card">
                    <div class="card-header">
                        @if (count($profiles))
                            We found {{ count($profiles) }} people which you will probably like
                        @else
                            Uff, it's so empty here...
                        @endif
                    </div>

                    <div class="flex-center position-ref full-height">
                        <div class="card-body">
                            @if (count($profiles))
                            {{ $profiles->links() }}
                            <div class="row" id="search_matches_div">
                                @foreach($profiles as $profile)
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="list_users">
                                            <a href="{{ route('show.certain.user', $profile['login']) }}" class="search_matches_a row">
                                                <div class="list_users_avatar_div search_users_avatar_div col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <img src="{{ URL::asset($profile['avatar']) }}"
                                                             alt="{{ $profile['login'] }}'s avatar" class="list_users_avatar"
                                                             title="{{ $profile['login'] }}">
                                                </div>
                                                <div class="list_users_info col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    {{ $profile['name'] }} {{ $profile['surname'] }}

                                                    <p><span class="title">Age:</span>
                                                        @if($profile['age'])
                                                            {{ $profile['age'] }} years
                                                        @else
                                                            isn't specified
                                                        @endif
                                                    </p>

                                                    <p>
                                                        <span class="title">Rating:</span>
                                                         {{ $profile['rating'] }}
                                                    </p>

                                                    <p>
                                                        @if($profile['allow'])
                                                            from {{ $profile['country'] }}, {{ $profile['city'] }}
                                                        @endif
                                                    </p>

                                                    <p>
                                                        @if ($profile['interests_matched'])
                                                            @if ($profile['interests_matched'] > 1)
                                                                <span class="title">Common interests with {{ $profile['name'] }}:</span>
                                                                <ul>
                                                                    @foreach($profile['interests'] as $interest)
                                                                        <li>{{ $interest }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @else
                                                                <span class="title">Common interest:</span>
                                                                {{ $profile['interests'][0] }}
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
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div>
                                {{ $profiles->links() }}
                            </div>
                            @else
                                <p style="margin: auto;">
                                    Unfortunately, we cannot find anyone matched you
                                    <br>Please, try another search parameters
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection