@extends('layouts.app')

@section('content')
    <div class="profile_container" id="main_container">
        <div class="row justify-content-center">
            <div class="">
                    <div class="card-body">
                        <div class="card_profile">
                            <div class="white_div">
                                <div class="card-body">
                                    <div id="left_card">
                                        <div id="div_useravatar">
                                            <img src="{{ URL::asset($profile->avatar) }}" alt="avatar" id="user_avatar" title='{{ $profile->login . "'s " }}avatar'>
                                            <div id="action_to_user" class="action_to_user">
                                                @if($profile->connected && !$profile->blocked)
                                                    <span style="color: #1d643b; font-weight: bold">You are connected with {{ $profile->login }}</span>

                                                    <form action="{{ route('show.chat', $profile->login) }}" method="GET">

                                                        <button type="submit">go chatting with {{ $profile->login }}</button>
                                                    </form>

                                                @endif

                                                <p>
                                                {{--Blocking block--}}
                                                @if($profile->blocked)
                                                        <action-component action="unblock" unaction="block" url="{{ route('unblock.user', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}" unurl="{{ route('block.user', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}"
                                                                          method="DELETE" unmethod="PUT" csrf = {{csrf_token()}} btn_class="liked"
                                                                          imgsrc="{{asset('images/service/block_color.png')}}" title="unblock {{ $profile->login }}" alt="unblock" value="{{ $profile->blocked }}">
                                                        </action-component>
                                                @else
                                                        <action-component url="{{ route('block.user', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}" unurl="{{ route('unblock.user', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}"
                                                                          method="PUT" unmethod="DELETE" csrf = {{csrf_token()}} btn_class=""
                                                                          imgsrc="{{asset('images/service/block_color.png')}}" title="block {{ $profile->login }}" alt="block">
                                                        </action-component>
                                                @endif
                                                <p>
                                                {{--Blocking block--}}
                                                @if(!$profile->reported)
                                                        <action-component action="block" unaction="unblock" url="{{ route('report', [
                                                        'id' => $profile->user_id,
                                                        'login' => $profile->login
                                                        ]) }}" method="" csrf = {{csrf_token()}} btn_class=""
                                                                          imgsrc="{{asset('images/service/fake.png')}}" title="report {{ $profile->login }} as a fake" alt="fake">
                                                        </action-component>
                                                    </form>
                                                @endif
                                                <p>
                                                {{--Like block--}}
                                                @if($profile->auth_user_avatar_uploaded)
                                                    @if($profile->liked)
                                                        <form action="{{ route('unlike.user', [
                                                                'id' => $profile->user_id,
                                                                'login' => $profile->login
                                                                ]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="liked">
                                                                <img src="{{asset('images/service/like.png')}}" title="unlike {{ $profile->login }}" alt="unlike" class="liked">
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('like.user', [
                                                                 'id' => $profile->user_id,
                                                                 'login' => $profile->login
                                                                 ]) }}" method="POST">
                                                            @method('PUT')
                                                            @csrf

                                                            <button type="submit">
                                                                <img src="{{asset('images/service/like.png')}}" title="like {{ $profile->login }}" alt="like">
                                                            </button>
                                                        </form>
                                                    @endif
                                                @endif

                                                @if ($profile->liked_me && !$profile->connected)
                                                    <p style="color: darkgreen;">{{ $profile->login }} liked you</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                            <p><b>Rating:</b><span id="rating"> {{ $profile->rating }} </span></p>
                                            <progress id = "rating_progress" value="{{ $profile->rating }}" max="100">
                                            </progress>
                                        </div>
                                        <p><b>Activity:</b>
                                            @if ($profile->last_activity === 'online')
                                                <span style="color: #1e7e34">{{ $profile->last_activity }}</span>
                                            @else
                                                <span>{{ $profile->last_activity }}</span>
                                            @endif
                                        </p>
                                    </div>



                                    <div id="right_card">
                                        <div id="usr_name_div">
                                            {{ $profile->name }} {{ $profile->surname }}
                                        </div>
                                        <p><span class="title_data">Login: </span><span class="main_data"> {{ $profile->login }}</span></p>
                                        <p><span class="title_data">Gender: </span><span class="main_data"> {{ $profile->gender }}</span></p>
                                        <p><span class="title_data">Age: </span><span class="main_data">
                                            @if($profile->age)
                                                {{ $profile->age }} years
                                            @else
                                                isn't specified
                                            @endif
                                            </span>
                                        </p>
                                        <p><span class="title_data">Sexual preferences:</span><span class="main_data"> {{ $profile->preferences }}</span></p>
                                        @if($profile->allow)
                                            <p><span class="title_data">Location:</span><span class="main_data"> {{ $profile->country }}, {{ $profile->city }}</span></p>
                                        @endif
                                        @if(count($profile->interests))
                                            <p><span class="title_data">Interests: </span>
                                                @foreach($profile->interests as $interest)
                                                   #{{ $interest->tag }}
                                                @endforeach
                                            </p>
                                        @endif
                                        <div id="user_bio">
                                            @if($profile->bio)
                                                <p> <h2>About</h2> {{ $profile->bio }}</p>
                                            @endif
                                        </div>

                                    </div>





                                </div>
                                <div class="container">
                                    <div class="row usr_gallery">

                                        @if($profile->photo1)
                                            <p class="usr_photo_div col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <img src="{{ URL::asset($profile->photo1) }}" alt="photo1" class="usr_photo">
                                            </p>
                                        @endif

                                        @if($profile->photo2)
                                            <p class="usr_photo_div col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <img src="{{ URL::asset($profile->photo2) }}" alt="photo2" class="usr_photo">
                                            </p>
                                        @endif

                                        @if($profile->photo3)
                                            <p class="usr_photo_div col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <img src="{{ URL::asset($profile->photo3) }}" alt="photo3" class="usr_photo">
                                            </p>
                                        @endif

                                        @if($profile->photo4)
                                            <p class="usr_photo_div col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <img src="{{ URL::asset($profile->photo4) }}" alt="photo4" class="usr_photo">
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection