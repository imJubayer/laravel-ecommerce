@extends('layouts.app')

@section('content')
    <!-- wrapper -->
    <div class="wrapper without_header_sidebar">
        <!-- contnet wrapper -->
        <div class="content_wrapper">
            <!-- page content -->
            <div class="login_page center_container">
                <div class="center_content">
                    <div class="logo">
                        <img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group icon_parent">
                            <label for="password">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror

                        </div>
                        <div class="form-group icon_parent">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="chech_container">Remember me
                                <input type="checkbox" name="remember" id="remember" >
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <a class="registration" href="{{ route('register') }} ">Create new account</a><br>
                            {{--                            <a href=" " class="text-white">I forgot my password</a>--}}
                            <button type="submit" class="btn btn-blue">Login</button>
                        </div>
                    </form>
                    <div class="footer">
                        <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                    </div>

                </div>
            </div>
        </div><!--/ content wrapper -->
    </div><!--/ wrapper -->
@endsection
