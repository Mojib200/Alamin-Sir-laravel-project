@extends('layouts.deshboard.deshboard')

@section('content')
    <div class="container-fluid">
        <div class="content-body">

            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="">
                                <div class="cover-photo">
                                    @if (Auth::user()->cover_photo)
                                        <img src="{{ asset('/uploads/cover_photo') }}/{{ Auth::user()->cover_photo }}"
                                            style="border-radius: 20px">
                                    @else
                                        <img src="{{ asset('/deshboard') }}/cover_photo/cover_photo.jpg">
                                    @endif
                                </div>


                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">


                                    @if (Auth::user()->profile)
                                        <img src="{{ asset('/uploads/profile_photos') }}/{{ Auth::user()->profile }}"
                                            class="img-fluid rounded-circle" alt="">
                                    @else
                                        <img src="{{ asset('/deshboard') }}/profile/defult.png"
                                            class="img-fluid rounded-circle" alt="">
                                    @endif
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ Auth::user()->name }}</h4>
                                        <p>UX / UI Designer</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                        <p>Email</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown"
                                            aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                    </circle>
                                                </g>
                                            </svg></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i>
                                                View profile</li>
                                            <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to
                                                close friends</li>
                                            <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to
                                                group</li>
                                            <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                @if ($errors->any())
                    <div class="bg-danger text-white mb-3"style="border-radius: 20px">
                        <ul>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card avtivity-card">
                                <div class="card-body">

                                    @if (session('name_change_success'))
                                        <div class="alert alert-success ">
                                            {{ session('name_change_success') }}
                                        </div>
                                    @endif
                                    <div class="basic-form custom_file_input">
                                        <form action="{{ url('/name_change') }}" method="post">
                                            @csrf
                                            <div class=" mb-3 ">
                                                <div class="from-control">

                                                    <label for=" " class="from-control mb-3 ">
                                                        <h1>Name</h1>
                                                    </label>

                                                    <div>
                                                        <input type="text" class="form-control mb-3"
                                                            value="{{ Auth::user()->name }}" name="name">
                                                    </div>

                                                    <div>
                                                        <input type="text" class="form-control mb-3"
                                                            placeholder="New Name" name="new_name">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary" name="name_change">Name
                                                        Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card avtivity-card">
                                <div class="card-body">
                                    @if (session('email_change_success'))
                                        <div class="alert alert-success ">
                                            {{ session('email_change_success') }}
                                        </div>
                                    @endif
                                    <div class="basic-form custom_file_input">
                                        <form action="{{ url('/email_change') }}" method="post">
                                            @csrf
                                            <div class=" mb-3 ">
                                                <div class="from-control">

                                                    <label for=" " class="from-control mb-3 ">
                                                        <h1>Email</h1>
                                                    </label>

                                                    <div>
                                                        <input type="email" class="form-control mb-3"
                                                            value="{{ Auth::user()->email }}" name="email">
                                                    </div>

                                                    <div>
                                                        <input type="email" class="form-control mb-3"
                                                            placeholder="New email" name="new_email">
                                                    </div>
                                                    @error('new_email')
                                                        <div class="alert alert-danger">
                                                            <span class="text-danger" role="alert">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                    @enderror
                                                    <button type="submit" class="btn btn-primary"
                                                        name="email_change">Email Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card avtivity-card">
                                <div class="card-body">

                                    @if (session('password_change_success'))
                                        <div class="alert alert-success ">
                                            {{ session('password_change_success') }}
                                        </div>
                                    @endif
                                    <div class="basic-form custom_file_input">

                                        <form action="{{ url('/password_change') }}" method="post">
                                            @csrf

                                            <div class=" mb-3 ">
                                                <div class="from-control">

                                                    <label for=" " class="from-control mb-3 ">
                                                        <h1>Password</h1>
                                                    </label>

                                                    <div>
                                                        <input type="password" class="form-control mb-3"
                                                            placeholder="Old Password" name="old_password">
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control mb-3"
                                                            placeholder="New Password" name="password">
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control mb-3"
                                                            placeholder="Confirm Password" name="password_confirmation">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary"
                                                        name="password_change">Password Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{-- text-center form-control --}}

            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card avtivity-card">
                                <div class="card-body">
                                    @if (session('photo_success'))
                                        <div class="alert alert-success ">
                                            {{ session('photo_success') }}
                                        </div>
                                    @endif
                                    <div class="basic-form custom_file_input">
                                        <form action="{{ url('/profile/photo') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class=" mb-3 ">
                                                <div class="from-control">
                                                    <label for=" " class="from-control mb-3 ">
                                                        <h1>Change Your Profile</h1>
                                                    </label>


                                                    <div>
                                                        <input type="file" class="form-control mb-3"
                                                            placeholder="Profile" name="profile">
                                                    </div>

                                                    {{-- @error('profile')
                                                        <div class="alert alert-danger text-center">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                    <button type="submit" class="btn btn-primary"
                                                        name="profile_change">Change
                                                        Profile</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card avtivity-card">
                                <div class="card-body">
                                    @if (session('cover_photo_success'))
                                        <div class="alert alert-success ">
                                            {{ session('cover_photo_success') }}
                                        </div>
                                    @endif
                                    <div class="basic-form custom_file_input">
                                        <form action="{{ url('/cover_photo') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class=" mb-3 ">
                                                <div class="from-control">
                                                    <label for=" " class="from-control mb-3 ">
                                                        <h1>Change Your Cover Photo</h1>
                                                    </label>


                                                    <div>
                                                        <input type="file" class="form-control mb-3"
                                                            placeholder="Profile" name="cover_photo">
                                                    </div>

                                                    {{-- @error('cover_photo')
                                                        <div class="alert alert-danger text-center form-control">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                    <button type="submit" class="btn btn-primary"
                                                        name="cover_photo">Change
                                                        Cover Photo</button>
                                        </form>

                                    </div>
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
