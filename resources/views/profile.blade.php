@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/profile/profile.js')}}" defer></script>
{{--    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}
@endpush

@section('content')
    <div class="profile_container" id="main_container">
        <div class="justify-content-center">
                <div class="card_profile">
                    <h1>My profile</h1>
{{--                    <div class="color_div">--}}
                        <div class="white_div">
                            <div class="card-body">
                                <div id="div_useravatar">
                                    <img src="{{ $profile->avatar }}" alt="avatar" id="avatar" title='download avatar' onclick="choose_file('avatar_label')">
                                    <form enctype="multipart/form-data" method="POST" action="/upload/avatar" id="useravatar_form">
                                        @csrf
                                        <avatar-component></avatar-component>
                                    </form>
                                    <form action="/delete/avatar" method="POST" class="profile_delete_form" id="deleteavatar_form">
                                        @csrf
                                        @method('DELETE')
                                        <deletebtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn"></deletebtn-component>
                                    </form>
                                    <span id="avatar_errormsg"></span>
                                </div>
                                <div id="user_bio">
                                    <p>
                                        <h2>About</h2>
                                        {{ $profile->bio }}
                                    </p>
                                    <form action="/set/bio" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <textarea name="bio" placeholder="up to 500 symbols"></textarea>
                                        <button type="submit">change bio</button>
                                    </form>
                                </div>
                            </div>
                        </div>
{{--                    </div>--}}

                    <div>


                        <h2>My photos</h2>

                        <div class="usr_gallery">
                            <div class="usr_photo_div">
                                <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo1_label')" class="camera">
                                <img src="{{ $profile->photo1 }}" alt="photo1" class="usr_photo" id="img1" onclick="choose_file('photo1_label')" @if ( $profile->photo1  == null) hidden @endif>
                                <form enctype="multipart/form-data" method="POST" action="/upload/photo" id="photo1_form">
                                    @csrf
                                    <photo-component photovalue="1" inputid="photo1" labelid="photo1_label"></photo-component>
                                </form>
                                <form action="/delete/photo/1" method="POST" class="profile_delete_form" id="deletephoto_form1" @if ( $profile->photo1  == null) hidden @endif>
                                    @csrf
                                    @method('DELETE')
                                    <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_1" idform ="deletephoto_form1" photo="1"></deletephotobtn-component>
                                </form>
                                <span id="photo1_errormsg"></span>
                            </div>
                            <div class="usr_photo_div">
                                <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo2_label')" class="camera">
                                <img src="{{ $profile->photo2 }}" alt="photo2" class="usr_photo" id="img2" onclick="choose_file('photo2_label')" @if ( $profile->photo2  == null) hidden @endif>
                                <form enctype="multipart/form-data" method="POST" action="/upload/photo" id="photo2_form">
                                    @csrf
                                    <photo-component photovalue="2" inputid="photo2" labelid="photo2_label"></photo-component>
                                </form>
                                <form action="/delete/photo/2" method="POST" class="profile_delete_form" id="deletephoto_form2" @if ( $profile->photo2  == null) hidden @endif>
                                    @csrf
                                    @method('DELETE')
                                    <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_2" idform ="deletephoto_form2" photo="2"></deletephotobtn-component>
                                </form>
                                <span id="photo2_errormsg"></span>
                            </div>
                            <div class="usr_photo_div">
                                <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo3_label')" class="camera">
                                <img src="{{ $profile->photo3 }}" alt="photo3" class="usr_photo" id="img3" onclick="choose_file('photo3_label')"  @if ( $profile->photo3  == null) hidden @endif>
                                <form enctype="multipart/form-data" method="POST" action="/upload/photo" id="photo3_form">
                                    @csrf
                                    <photo-component photovalue="3" inputid="photo3" labelid="photo3_label"></photo-component>
                                </form>
                                <form action="/delete/photo/3" method="POST" class="profile_delete_form" id="deletephoto_form3" @if ( $profile->photo3  == null) hidden @endif>
                                    @csrf
                                    @method('DELETE')
                                    <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_3" idform ="deletephoto_form3" photo="3"></deletephotobtn-component>
                                </form>
                                <span id="photo3_errormsg"></span>
                            </div>
                            <div class="usr_photo_div">
                                <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo4_label')" class="camera">
                                <img src="{{ $profile->photo4 }}" alt="photo4" class="usr_photo" id="img4" onclick="choose_file('photo4_label')"  @if ( $profile->photo4  == null) hidden @endif>
                                <form enctype="multipart/form-data" method="POST" action="/upload/photo" id="photo4_form">
                                    @csrf
                                    <photo-component photovalue="4" inputid="photo4" labelid="photo4_label"></photo-component>
                                </form>
                                <form action="/delete/photo/4" method="POST" class="profile_delete_form" id="deletephoto_form4" @if ( $profile->photo4  == null) hidden @endif>
                                    @csrf
                                    @method('DELETE')
                                    <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_4" idform ="deletephoto_form4" photo="4"></deletephotobtn-component>
                                </form>
                                <span id="photo4_errormsg"></span>
                            </div>
                        </div>

                        <p><b>Name:</b> {{ $profile->name }}</p>
                        <form action="/set/name" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="name">
                            <button type="submit">change name</button>
                        </form>


                        <p><b>Surname:</b> {{ $profile->surname }}</p>
                        <form action="/set/surname" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="surname">
                            <button type="submit">change surname</button>
                        </form>


                        <p><b>Gender:</b> {{ $profile->gender }}</p>
                        <form action="/set/gender" method="POST">
                            @csrf
                            @method('PUT')

                            <select name="gender">
                                <option disabled>choose gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                            <button type="submit">change gender</button>
                        </form>


                        <p><b>Sexual preferences:</b> {{ $profile->preferences }}</p>
                        <form action="/set/preferences" method="POST">
                            @csrf
                            @method('PUT')

                            <select name="preferences">
                                <option disabled>choose sexual preferences</option>
                                <option value="homosexual">homosexual</option>
                                <option value="bisexual">bisexual</option>
                                <option value="heterosexual">heterosexual</option>
                            </select>
                            <button type="submit">change preferences</button>
                        </form>

                        <p><b>Age:</b> {{ $profile->age }}</p>
                        <form action="/set/age" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="age">
                            <button type="submit">change age</button>
                        </form>

                        <p><b>Country:</b> {{ $profile->country }}</p>
                        <p><b>City:</b> {{ $profile->city }}</p>
                        <p><b>Email:</b> {{ $profile->email }}</p>
                        <p><b>Rating:</b> {{ $profile->rating }}</p>

                        <p><b>Change login</b></p>
                        <form action="/change/login" method="POST">
                            @csrf

                            New login:
                            <input type="text" name="login">
                            <button type="submit">change login</button>
                        </form>

                        <p><b>Change email</b></p>
                        <form action="/change/email" method="POST">
                            @csrf

                            New email:
                            <p><input type="email" name="email"></p>
                            Password:
                            <p><input type="password" name="password"></p>
                            <button type="submit">change login</button>
                        </form>

                        <p><b>Change password</b></p>
                        <form action="/change/password" method="POST">
                            @csrf

                            Current password:
                            <p><input type="password" name="current_password"></p>
                            New password:
                            <p><input type="password" name="new_password"></p>
                            Confirm new password:
                            <p><input type="password" name="new_password_confirm"></p>
                            <button type="submit">change login</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
