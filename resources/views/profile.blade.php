@extends('layouts.app')

@section('content')
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My profile</div>

                    <div class="card-body">

                        <p><a href="{{ route('show.all.users') }}">list of all users</a></p>

                        <p><b>Rating:</b> {{ $profile->rating }}</p>
                        <b>new avatar</b>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.avatar') }}">
                            @csrf

                            <input type="file" accept=".jpg, .jpeg" name="avatar"><br>
                            <button type="submit">upload</button>
                        </form>

                        <br>
                        <b>new photo 1</b>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}">
                            @csrf

                            <input type="hidden" name="photo" value="1">
                            <input type="file" accept=".jpg, .jpeg" name="photo"><br>
                            <button type="submit">upload</button>
                        </form>

                        <br>
                        <b>new photo 2</b>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}">
                            @csrf

                            <input type="hidden" name="photo" value="2">
                            <input type="file" accept=".jpg, .jpeg" name="photo"><br>
                            <button type="submit">upload</button>
                        </form>

                        <br>
                        <b>new photo 3</b>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}">
                            @csrf

                            <input type="hidden" name="photo" value="3">
                            <input type="file" accept=".jpg, .jpeg" name="photo"><br>
                            <button type="submit">upload</button>
                        </form>

                        <br>
                        <b>new photo 4</b>
                        <form enctype="multipart/form-data" method="POST" action="{{ route('upload.photo') }}">
                            @csrf

                            <input type="hidden" name="photo" value="4">
                            <input type="file" accept=".jpg, .jpeg" name="photo"><br>
                            <button type="submit">upload</button>
                        </form>

                        <br>
                        <p>Avatar: {{ $profile->avatar }}</p>
                        <img src="{{ URL::asset($profile->avatar) }}" alt="avatar" style="width: 200px">
                        <form action="{{ route('delete.avatar') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete avatar</button>
                        </form>


                        <p>Photo 1: {{ $profile->photo1 }}</p>
                        <img src="{{ URL::asset($profile->photo1) }}" alt="photo1 -> null" style="width: 200px">
                        <form action="{{ route('delete.photo', '1') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete photo 1</button>
                        </form>

                        <p>Photo 2: {{ $profile->photo2 }}</p>
                        <img src="{{ URL::asset($profile->photo2) }}" alt="photo2 -> null" style="width: 200px">
                        <form action="{{ route('delete.photo', '2') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete photo 2</button>
                        </form>

                        <p>Photo 3: {{ $profile->photo3 }}</p>
                        <img src="{{ URL::asset($profile->photo3) }}" alt="photo3 -> null" style="width: 200px">
                        <form action="{{ route('delete.photo', '3') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete photo 3</button>
                        </form>

                        <p>Photo 4: {{ $profile->photo4 }}</p>
                        <img src="{{ URL::asset($profile->photo4) }}" alt="photo4 -> null" style="width: 200px">
                        <form action="{{ route('delete.photo', '4') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete photo 4</button>
                        </form>
                        _____________________________________________________________________________
                        <p><b>Name:</b> {{ $profile->name }}</p>
                        <form action="{{ route('set.name') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="name">
                            <button type="submit">change name</button>
                        </form>

                        _____________________________________________________________________________
                        <p><b>Surname:</b> {{ $profile->surname }}</p>
                        <form action="{{ route('set.surname') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="surname">
                            <button type="submit">change surname</button>
                        </form>

                        _____________________________________________________________________________
                        <p><b>Gender:</b> {{ $profile->gender }}</p>
                        <form action="{{ route('set.gender') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <select name="gender">
                                <option disabled>choose gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                            <button type="submit">change gender</button>
                        </form>

                        _____________________________________________________________________________
                        <p><b>Sexual preferences:</b> {{ $profile->preferences }}</p>
                        <form action="{{ route('set.preferences') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <select name="preferences">
                                <option disabled>choose sexual preferences</option>
                                <option value="heterosexual">heterosexual</option>
                                <option value="homosexual">homosexual</option>
                                <option value="bisexual">bisexual</option>
                            </select>
                            <button type="submit">change preferences</button>
                        </form>
                        __________________________________________________________________________
                        <p><b>Age:</b> {{ $profile->age }}</p>
                        <form action="{{ route('set.age') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="age">
                            <button type="submit">change age</button>
                        </form>
                        _____________________________________________________________________________
                        <p><b>Bio:</b> {{ $profile->bio }}</p>
                        <form action="/{{ route('set.bio') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <textarea name="bio" placeholder="up to 500 symbols"></textarea>
                            <button type="submit">change bio</button>
                        </form>
                        <form action="{{ route('delete.bio') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">delete bio</button>
                        </form>
                        _____________________________________________________________________________

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
                        _____________________________________________________________________________
                        <p><b>Email:</b> {{ $profile->email }}</p>

                        @if ($profile->allow)
                            <p><b>Location:</b> {{ $profile->country }}, {{ $profile->city }}</p>
                        @endif
                        _____________________________________________________________________________
                        <p><b>Change login</b></p>
                        <form action="{{ route('change.login') }}" method="POST">
                            @csrf

                            New login:
                            <input type="text" name="login">
                            <button type="submit">change login</button>
                        </form>
                        _____________________________________________________________________________
                        <p><b>Change email</b></p>
                        <form action="{{ route('change.email') }}" method="POST">
                            @csrf

                            New email:
                            <p><input type="email" name="email"></p>
                            Password:
                            <p><input type="password" name="password"></p>
                            <button type="submit">change login</button>
                        </form>
                        _____________________________________________________________________________
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection