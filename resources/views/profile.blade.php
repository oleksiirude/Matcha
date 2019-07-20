@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('cropperjs/dist/cropper.min.js')}}" defer></script>
    <script src="{{ asset('js/profile/profile.js')}}" defer></script>
@endpush


@push('style')
    <link rel="stylesheet" href="{{ asset('cropperjs/dist/cropper.css')}}">
@endpush

@section('content')
    <div class="profile_container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My profile</div>
                    <div class="card-body">

                        @if ($profile->totally_filled)
                            Hey! For more efficient search you should:
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

                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.avatar') }}">
                            @csrf
                        </form>

                        <div class="card_profile">
                            <div class="white_div">
                                <div class="card-body">
                                    <crop-component></crop-component>
                                    <div id="left_card">
                                        <div id="div_useravatar">
                                            <img src="{{ asset($profile->avatar) }}" alt="avatar" id="avatar" title='download avatar' onclick="choose_file('avatar_label')">
                                            <form enctype="multipart/form-data" method="POST" action="{{ route('upload.avatar') }}" id="useravatar_form">
                                                @csrf
                                                <avatar-component></avatar-component>
                                            </form>
                                            <form action="{{ route('delete.avatar') }}" method="POST" class="profile_delete_form" id="deleteavatar_form">
                                                @csrf
                                                @method('DELETE')
                                                <deletebtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn"></deletebtn-component>
                                            </form>
                                            <span id="avatar_errormsg"></span>
                                        </div>
                                        <div>
                                            <p><b>Rating:</b><span id="rating"> {{ $profile->rating }} </span></p>
                                            <progress id = "rating_progress" value="{{ $profile->rating }}" max="100">
                                            </progress>
                                        </div>
                                    </div>
                                    <div id="right_card">
                                        <div id="usr_name_div">
                                            <form action="{{ route('set.name') }}" method="POST" id="name_form">
                                                @csrf
                                                @method('PUT')
                                                <editinput-component value="{{ $profile->name }}" name="name" id_btn="name_btn"></editinput-component>
                                            </form>
                                            <form action="{{ route('set.surname') }}" method="POST" id="surname_form">
                                                @csrf
                                                @method('PUT')
                                                <div>
                                                    <editinput-component value="{{ $profile->surname }}"  name="surname" id_btn="surname_btn"></editinput-component>
                                                </div>
                                            </form>
                                            <span id="name_error_msg" class="error_msg"></span>
                                        </div>
                                        <div>

                                            <form action="{{ route('change.login') }}" method="POST" id="login_form">
                                                @csrf
                                                <ed_in_lbl-component name="login" value="{{ $profile->login }}" label="Login:" id_btn="login_btn" url="/change/login"></ed_in_lbl-component>
                                            </form>
                                            <span id="login_error_msg" class="error_msg" hidden></span>
                                        </div>
                                        <div>
                                            <form action="{{ route('set.gender') }}" method="POST" id="gender_form">
                                                @csrf
                                                @method('PUT')
                                                <gender-component value="{{ $profile->gender }}" name="gender"></gender-component>
                                            </form>
                                        </div>
                                        <div>
                                            <form action="{{ route('set.age') }}" method="POST" id="age_form">
                                                @csrf
                                                @method('PUT')
                                                <ed_in_lbl-component name="age" value="{{ $profile->age }}" label="Age:" id_btn="age_btn" url="/set/age"></ed_in_lbl-component>
                                            </form>
                                            <span id="age_error_msg" class="error_msg" hidden></span>
                                        </div>
                                        <div>
                                            <form action="{{ route('set.preferences') }}" method="POST" id="preferences_form">
                                                @csrf
                                                @method('PUT')
                                                <preferences-component value="{{ $profile->preferences }}" name="preferences"></preferences-component>
                                            </form>
                                            <span id="preferences_error_msg" class="error_msg" hidden></span>
                                        </div>
                                        <div id="user_bio">
                                            <p>
                                            <h2>About</h2>
                                            </p>
                                            <form action="{{ route('delete.bio') }}" method="POST" id="deletebio_form">
                                                @csrf
                                                @method('DELETE')
                                                <deletedefault-component name="deletebio" url="/delete/bio"></deletedefault-component>
                                            </form>
                                            <form action="{{ route('set.bio') }}" method="POST" id="bio_form">
                                                @csrf
                                                @method('PUT')
                                                <editdata-component name="bio" bio="{{ $profile->bio }}"></editdata-component>
                                            </form>
                                            <span id="bio_error_msg" class="error_msg" hidden></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h2>My photos</h2>
                                <div class="usr_gallery">
                                    <div class="usr_photo_div">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo1_label')" class="camera">
                                        <img src="{{ asset($profile->photo1) }}" alt="photo1" class="usr_photo" id="img1" onclick="choose_file('photo1_label')" @if ( $profile->photo1  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo1_form">
                                            @csrf
                                            <photo-component photovalue="1" inputid="photo1" labelid="photo1_label"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 1) }}" method="POST" class="profile_delete_form" id="deletephoto_form1" @if ( $profile->photo1  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_1" idform ="deletephoto_form1" photo="1"></deletephotobtn-component>
                                        </form>
                                        <span id="photo1_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo2_label')" class="camera">
                                        <img src="{{ asset($profile->photo2) }}" alt="photo2" class="usr_photo" id="img2" onclick="choose_file('photo2_label')" @if ( $profile->photo2  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo2_form">
                                            @csrf
                                            <photo-component photovalue="2" inputid="photo2" labelid="photo2_label"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 2) }}" method="POST" class="profile_delete_form" id="deletephoto_form2" @if ( $profile->photo2  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_2" idform ="deletephoto_form2" photo="2"></deletephotobtn-component>
                                        </form>
                                        <span id="photo2_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo3_label')" class="camera">
                                        <img src="{{ asset($profile->photo3) }}" alt="photo3" class="usr_photo" id="img3" onclick="choose_file('photo3_label')"  @if ( $profile->photo3  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo3_form">
                                            @csrf
                                            <photo-component photovalue="3" inputid="photo3" labelid="photo3_label"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 3) }}" method="POST" class="profile_delete_form" id="deletephoto_form3" @if ( $profile->photo3  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_3" idform ="deletephoto_form3" photo="3"></deletephotobtn-component>
                                        </form>
                                        <span id="photo3_errormsg"></span>
                                    </div>
                                    <div class="usr_photo_div">
                                        <img src="{{ asset('images/service/photo_gray.png') }}" onclick="choose_file('photo4_label')" class="camera">
                                        <img src="{{ asset($profile->photo4) }}" alt="photo4" class="usr_photo" id="img4" onclick="choose_file('photo4_label')"  @if ( $profile->photo4  == null) hidden @endif>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}" id="photo4_form">
                                            @csrf
                                            <photo-component photovalue="4" inputid="photo4" labelid="photo4_label"></photo-component>
                                        </form>
                                        <form action="{{ route('delete.photo', 4) }}" method="POST" class="profile_delete_form" id="deletephoto_form4" @if ( $profile->photo4  == null) hidden @endif>
                                            @csrf
                                            @method('DELETE')
                                            <deletephotobtn-component srcavatar="{{ asset('images/service/del.png') }}" idbtn="delete_btn_4" idform ="deletephoto_form4" photo="4"></deletephotobtn-component>
                                        </form>
                                        <span id="photo4_errormsg"></span>
                                    </div>
                                </div>


                                <p><b>Country:</b> {{ $profile->country }}</p>
                                <p><b>City:</b> {{ $profile->city }}</p>
                                <p><b>Email:</b> {{ $profile->email }}</p>
                                <p><b>Change email</b></p>
                                <form action="{{ route('change.email') }}" method="POST">
                                    @csrf

                                    New email:
                                    <p><input id="email" type="email" name="email"></p>
                                    Password:
                                    <p><input type="password" name="password"></p>
                                    <button type="submit">change login</button>
                                </form>

                                <p><b>Change password</b></p>
                                <form action="{{ route('change.password') }}" method="POST">
                                    @csrf

                                    Current password:
                                    <p><input type="password" name="current_password"></p>
                                    New password:
                                    <p><input type="password" name="new_password"></p>
                                    Confirm new password:
                                    <p><input type="password" name="new_password_confirm"></p>
                                    <button type="submit">change login</button>
                                </form>

                                <p><b>Interests:</b></p>
                                @foreach($profile->interests as $interest)
                                    {{ $interest->tag }}
                                    <form action="{{ route('delete.tag', $interest->tag) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">delete</button>
                                    </form>
                                @endforeach
                                <br>
                                <form action="{{ route('set.tag') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <input type="text" name="tag">
                                    <button type="submit">add interest</button>
                                </form>
                                <form action="{{ route('find.tag.matches') }}" method="POST">
                                    @csrf

                                    <input type="text" name="piece">
                                    <button type="submit">find matches</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection