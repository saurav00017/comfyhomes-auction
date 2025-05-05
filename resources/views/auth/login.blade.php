@extends('layouts.app')

<style type="text/css">
    .col-md-8{
        margin-top: 5%!important;
        margin-bottom: 5%;
    }

    .page-banner{
            margin-top: 4%;

    }


</style>
@section('content')
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                    --> <!--                     <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


         <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Login</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

    <!--============== Login Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-5">
                        <h4 class="mb-4 text-secondary">Welcome</h4>
                        <p>Are you looking to buy a property with full confidence? You’re in the right place! At Auction, we specialize in auctions of verified properties, ensuring a smooth, transparent, and secure process.</p>
                    </div>
                    <div class="login-condition flat-small flat-primary">
                        <h5 class="mb-4 text-secondary">Keep in mind a few basic password rules:</h5>
                        <ul>
                            <li><i class="flaticon-checked text-primary"></i> Change your passwords periodically</li>
                            <li><i class="flaticon-checked text-primary"></i> Avoid re-using passwords for multiple sites</li>
                            <li><i class="flaticon-checked text-primary"></i> Use complex characters including uppercase and numbers</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mt-sm-50">
                        <a href="{{ route('login') }}" class="down-active text-secondary me-3">Login</a>
                        <a href="{{config('app.baseURL')}}/register" class="text-secondary">Register</a>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-3 user">
                                <label class="form-label" for="exampleInputEmail1">Email or Phone Number</label>
                                <input id="exampleInputEmail1" name="email" type="text" class="form-control bg-gray @error('email') is-invalid @enderror" placeholder="Email or Phone Number" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 password">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input id="exampleInputPassword1" name="password" type="password" class="form-control bg-gray @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           

                            <button type="submit" class="btn btn-primary mt-3">Login</button>
<!-- 
                            @if (Route::has('password.request'))
                                <a class="text-secondary hover-text-primary d-block mt-4" href="{{ route('password.request') }}">I forgot my password!</a>
                            @endif -->
                        </form>

                       <!--  <div class="social-media d-block mt-5">
                            <button class="btn facebook w-100">Login With Facebook</button>
                            <button class="btn twiter w-100">Login With Twitter</button>
                            <button class="btn googleplus w-100">Login With Google Plus</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection
