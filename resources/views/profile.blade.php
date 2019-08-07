@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('cropperjs/dist/cropper.min.js')}}" defer></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&libraries=places"></script>
    <script src="{{ asset('js/profile/profile.js')}}" defer></script>
@endpush

@push('style')
    <link rel="stylesheet" href="{{ asset('cropperjs/dist/cropper.css')}}">
@endpush

@section('content')

    <wsconnecting-component></wsconnecting-component> {{-- connecting to ratchet websocket server --}}

    <div class="profile_container" id="main_container">
        <div class="row justify-content-center">
            <div class="">
                <div class="card-body">
                    <div id="fill_profile">
                        <img src="{{asset('/images/service/marker.png')}}" class="marker">
                        <div id="fill_profile_body">
                            @if ($profile->totally_filled) &#9758; Hey! For more efficient search <b>you should</b>:
                                <ul>
                                    @if (isset($profile->totally_filled['upload']))
                                        @foreach($profile->totally_filled['upload'] as $upload)
                                            <li>upload {{ $upload }}</li>
                                        @endforeach
                                    @endif

                                    @if (isset($profile->totally_filled['fill']))
                                        @foreach($profile->totally_filled['fill'] as $fill)
                                            <li>fill {{ $fill }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>

                    <form enctype="multipart/form-data" method="POST" action="{{ route('upload.avatar') }}">
                        @csrf
                    </form>

                    <div class="card_profile">
                        <div class="white_div">
                            <div class="card-body row">
                                <crop-component></crop-component>
                                <div id="left_card" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div id="div_useravatar">
                                        <img src="{{ asset($profile->avatar) }}" alt="avatar" id="avatar" title='download avatar' onclick="choose_file('avatar_label')">
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.avatar') }}" id="useravatar_form">
                                            @csrf

                                            <avatar-component></avatar-component>
                                        </form>
                                        <form action="{{ route('delete.avatar') }}" method="POST" class="profile_delete_form" id="deleteavatar_form">
                                            @csrf
                                            @method('DELETE')

                                            <deletebtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn" url="{{ route('delete.avatar') }}"></deletebtn-component>
                                        </form>
                                        <span id="avatar_errormsg"></span>
                                    </div>
                                    <div>
                                        <p><b>Rating:</b><span id="rating"> {{ $profile->rating }} </span></p>
                                        <progress id = "rating_progress" value="{{ $profile->rating }}" max="100">
                                        </progress>
                                    </div>
                                    <on-off-notifications url="{{ route('change.notifications.mode') }}" csrf="{{csrf_token()}}" on_off="{{$profile->email_notifications}}" img="{{asset('/images/service/email.png')}}"></on-off-notifications>
                                </div>
                                <div id="right_card" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <div id="usr_name_div">
                                        <div id="usr_name">
                                        <form action="{{ route('change.name') }}" method="POST" id="name_form">
                                            @csrf
                                            @method('PUT')

                                            <editinput-component value="{{ $profile->name }}" name="name" id_btn="name_btn"  id_btn_cancel="name_btn_cancel" url="{{ route('change.name') }}"></editinput-component>
                                        </form>
                                        <form action="{{ route('change.surname') }}" method="POST" id="surname_form">
                                            @csrf
                                            @method('PUT')

                                            <div>
                                                <editinput-component value="{{ $profile->surname }}"  name="surname" id_btn="surname_btn" id_btn_cancel="surname_btn_cancel" url="{{ route('change.surname') }}"></editinput-component>
                                            </div>
                                        </form>
                                        </div>
                                        <span id="name_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('change.login') }}" method="POST" id="login_form">
                                            @csrf
                                            @method('PUT')

                                            <ed_in_lbl-component name="login" value="{{ $profile->login }}" label="Login:" id_btn="login_btn" id_btn_cancel="login_btn_cancel" url="{{ route('change.login') }}"></ed_in_lbl-component>
                                        </form>
                                        <span id="login_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('change.password') }}" method="POST" id="password_form">
                                            @csrf
                                            @method('PUT')
                                            <edit_password-component src="{{asset('/images/service/edit.png')}}" name="password" id_btn="password_btn" url="{{ route('change.password') }}"></edit_password-component>
                                        </form>
                                        <span id="password_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('change.email') }}" method="POST" id="email_form">
                                            @csrf
                                            @method('PUT')
                                            <ed_email-component name="email" value="{{ $profile->email }}" label="Email:" id_btn="email_btn" url="{{ route('change.email') }}"></ed_email-component>
                                        </form>
                                        <span id="email_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('change.gender') }}" method="POST" id="gender_form">
                                            @csrf
                                            @method('PUT')

                                                <gender-component value="{{ $profile->gender }}" name="gender" url="{{ route('change.gender') }}"></gender-component>
                                        </form>
                                    </div>
                                    <div>
                                        <form action="{{ route('set.age') }}" method="POST" id="date_form">
                                                @csrf
                                                @method('PUT')

                                                <edit_age-component name="date" label="Date of birth:" id_btn="date_btn" url="{{ route('set.age') }}" value="{{ $profile->age }}"></edit_age-component>
                                        </form>
                                        <span id="date_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('set.preferences') }}" method="POST" id="preferences_form">
                                                @csrf
                                                @method('PUT')
                                                <preferences-component value="{{ $profile->preferences }}" allow="{{ $profile->preferences_specified }}" name="preferences" url="{{ route('set.preferences') }}"></preferences-component>
                                        </form>
                                        <span id="preferences_error_msg" class="error_msg" hidden></span>
                                    </div>

                                    @if ($profile->allow)
                                        <div>
                                            <form id="country_form">
                                                <label for="country" id="country_label">Country:</label>
                                                <input type="text" id="country" name="country" value="{{ $profile->country }}" class="profiledata" readonly>
                                            </form>
                                        </div>
                                        <div>
                                            <form id="city_form">
                                                <label for="city">City:</label>
                                                <input type="text" id="city" name="city" value="{{ $profile->city }}" class="profiledata" readonly>
                                            </form>
                                        </div>
                                    @else
                                        <div>
                                            <form id="country_form">
                                                <label for="country" id="country_label">Location:</label>
                                                <input type="text" id="country" name="country" value="isn't specified" class="profiledata">
                                            </form>
                                            <form id="city_form" hidden>
                                                <label for="city">City:</label>
                                                <input type="text" id="city" name="city" value="" class="profiledata">
                                            </form>
                                        </div>
                                    @endif

                                    <div>
                                        <location-component src="{{asset('/images/service/edit.png')}}" csrf="{{ csrf_token() }}" lat="{{ $profile->latitude }}" lng="{{ $profile->longitude }}" allow = "{{ $profile->allow }}" url="{{ route('change.location') }}" urloff="{{ route('turn.off.location') }}"></location-component>
                                    </div>
                                    <div>
                                        <span id="interests_tags_title">Interests:</span>
                                        <img src="{{asset('/images/service/plus.png')}}" onclick="show_element('add_interests_div', 'tag_error_msg')" title="add interests" alt="add interests" id="add_interests_img">
                                        <ul id="interests_tags" type="#">
                                            @foreach($profile->interests as $interest)
                                                <tagsdelete-component value="{{ $interest->tag }}" csrf="{{ csrf_token() }}" url="{{ route('delete.tag', $interest->tag) }}" id_li="{{ $interest->tag }}_li" id_form="{{ $interest->tag }}_form"></tagsdelete-component>
                                            @endforeach
                                        </ul>
                                        <tagsadd-component csrf="{{ csrf_token() }}" url="{{ route('set.tag') }}" urlmatch="{{ route('find.tag.matches') }}" name="tag"></tagsadd-component>
                                        <span id="tag_error_msg" class="error_msg" hidden></span>
                                    </div>
                                    <div id="user_bio">
                                        <p>
                                            <h2>About</h2>
                                        </p>
                                        <form action="{{ route('delete.bio') }}" method="POST" id="deletebio_form">
                                                @csrf
                                                @method('DELETE')

                                            <deletedefault-component name="deletebio" src="{{asset('/images/service/trash_50px.png')}}" url="{{ route('delete.bio') }}"></deletedefault-component>
                                        </form>
                                        <form action="{{ route('set.bio') }}" method="POST" id="bio_form">
                                            @csrf
                                            @method('PUT')

                                            <editdata-component name="bio" bio="{{ $profile->bio }}" src="{{asset('/images/service/edit.png')}}" url="{{ route('set.bio') }}"></editdata-component>
                                        </form>
                                        <span id="bio_error_msg" class="error_msg" hidden></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h2>My photos</h2>
                                <div class="row usr_gallery">
                                    <div class="usr_photo_div col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo1_label')" class="camera" id="photo1_camera" @if ( $profile->photo1  != null) hidden @endif>
                                        <img src="{{ asset($profile->photo1) }}" alt="photo1" class="usr_photo" id="img1" onclick="choose_file('photo1_label')" @if ( $profile->photo1  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo1_form">
                                            @csrf
                                            <photo-component photovalue="1" inputid="photo1" labelid="photo1_label" url="{{ route('upload.photo') }}"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 1) }}" method="POST" class="profile_delete_form" id="deletephoto_form1" @if ( $profile->photo1  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_1" idform ="deletephoto_form1" photo="1"></deletephotobtn-component>
                                        </form>
                                        <span id="photo1_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo2_label')" class="camera" id="photo2_camera" @if ( $profile->photo2  != null) hidden @endif>
                                        <img src="{{ asset($profile->photo2) }}" alt="photo2" class="usr_photo" id="img2" onclick="choose_file('photo2_label')" @if ( $profile->photo2  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo2_form">
                                            @csrf
                                            <photo-component photovalue="2" inputid="photo2" labelid="photo2_label" url="{{ route('upload.photo') }}"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 2) }}" method="POST" class="profile_delete_form" id="deletephoto_form2" @if ( $profile->photo2  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_2" idform ="deletephoto_form2" photo="2"></deletephotobtn-component>
                                        </form>
                                        <span id="photo2_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo3_label')" class="camera" id="photo3_camera" @if ( $profile->photo3  != null) hidden @endif>
                                        <img src="{{ asset($profile->photo3) }}" alt="photo3" class="usr_photo" id="img3" onclick="choose_file('photo3_label')"  @if ( $profile->photo3  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo3_form">
                                            @csrf
                                            <photo-component photovalue="3" inputid="photo3" labelid="photo3_label" url="{{ route('upload.photo') }}"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 3) }}" method="POST" class="profile_delete_form" id="deletephoto_form3" @if ( $profile->photo3  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_3" idform ="deletephoto_form3" photo="3"></deletephotobtn-component>
                                        </form>
                                        <span id="photo3_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo4_label')" class="camera" id="photo4_camera" @if ( $profile->photo4  != null) hidden @endif>
                                        <img src="{{ asset($profile->photo4) }}" alt="photo4" class="usr_photo" id="img4" onclick="choose_file('photo4_label')"  @if ( $profile->photo4  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo4_form">
                                            @csrf
                                            <photo-component photovalue="4" inputid="photo4" labelid="photo4_label" url="{{ route('upload.photo') }}"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 4) }}" method="POST" class="profile_delete_form" id="deletephoto_form4" @if ( $profile->photo4  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_4" idform ="deletephoto_form4" photo="4"></deletephotobtn-component>
                                        </form>
                                        <span id="photo4_errormsg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection