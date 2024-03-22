@extends('frontend.frontend_master')
@section('content')
    <!-- register_section - start
                    ================================================== -->
    <section class="register_section section_space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <ul class="nav register_tabnav ul_li_center" role="tablist">
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#signin_tab" type="button" role="tab"
                                aria-controls="signin_tab" aria-selected="true">Sign In</button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" class="active" data-bs-target="#signup_tab" type="button"
                                role="tab" aria-controls="signup_tab" aria-selected="false">Register</button>
                        </li>
                    </ul>
                    {{--
                     @if ($errors->any())
                <div class="bg-danger text-blue mb-3"style="border-radius: 20px">
                    <ul>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            @endif --}}
                    <div class="register_wrap tab-content">
                        <div class="tab-pane fade" id="signin_tab" role="tabpanel">
                            <form action="{{ url('coustomer_login') }}" method="post">
                                @csrf
                                <div class="form_item_wrap">
                                    <h3 class="input_title">Email</h3>
                                    <div class="form_item">
                                        <label for="username_input"><i class="fas fa-user"></i></label>
                                        <input id="username_input" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form_item_wrap">
                                    <h3 class="input_title">Password</h3>
                                    <div class="form_item">
                                        <label for="password_input"><i class="fas fa-lock"></i></label>
                                        <input type="password" name="password" >
                                    </div>
                                    <div class="checkbox_item">
                                        <input id="remember_checkbox" type="checkbox">
                                        <label for="remember_checkbox">Remember Me</label>
                                        <div class="form-group mt-3">
                                            <a class="text-info" href="{{url('password/reset')}}">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_item_wrap">
                                    <button type="submit" class="btn btn_primary">Sign In</button>
                                </div>
                            </form>
                        </div>
                        @if (session('reg_success'))
                            <div class="alert alert-success text-center">
                                {{ session('reg_success') }}
                            </div>
                        @endif

                        <div class="tab-pane fade show active" id="signup_tab" role="tabpanel">
                            <form action="{{ route('coustomer_reg') }}" method="POST">
                                @csrf
                                <div class="form_item_wrap">
                                    <h3 class="input_title">Name</h3>
                                    <div class="form_item">
                                        <label for="username_input2"><i class="fas fa-user"></i></label>
                                        <input id="username_input2" type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form_item_wrap">
                                    <h3 class="input_title">Email</h3>
                                    <div class="form_item">
                                        <label for="email_input"><i class="fas fa-envelope"></i></label>
                                        <input id="email_input" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form_item_wrap">
                                    <h3 class="input_title">Password</h3>
                                    <div class="form_item">
                                        <label for="password_input2"><i class="fas fa-lock"></i></label>
                                        <input id="password_input2" type="password" name="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form_item_wrap">
                                    <h3 class="input_title">Confirm Password</h3>
                                    <div class="form_item">
                                        <label for="password_input2"><i class="fas fa-lock"></i></label>
                                        <input id="password_input2" type="password" name="password_confirmation"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <a class="text-info" href="{{url('password/reset')}}">Forgot Password?</a>
                                </div>
                                <div class="form_item_wrap">

                                    <div class="form_item">
                                        {!! NoCaptcha::display() !!}
                                    </div>
                                </div>
                                {{-- @error('password_confirmation')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror --}}
                                <div class="form_item_wrap">
                                    <button type="submit" class="btn btn_secondary" name="">Register</button>
                                </div>
                            </form>
                            <div class="from_item_wrap ">
                                <a href="{{ url('github_redirect') }}" class="btn btn_secondary">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--**********************************
         Scripts
        ***********************************-->
    <!-- Required vendors -->
@endsection
