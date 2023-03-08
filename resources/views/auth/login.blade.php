@extends('auth.layouts.master')

@section('content')

   <div class="login-container">
      <div class="login-card">
        <div class="card-header">
          <h1>Login</h1>
        </div>
        <div class="card-body">
          <form class="login-form" method="POST" action="{{ route('login') }}">
               @csrf
            <div class="form-group">
              <label for="username">Email</label>
              <input class="@error('email') is-invalid @enderror" type="text" id="username" name="email" value="{{ old('email') }}"required="">
               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required="">
               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
               <div class="row mb-3 ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check"style="margin-left: -65px;">
                                    <input class="form-check-input"style="border:1px solid #00ab9f" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
            <div class="form-group">
              <button href="home.html" type="submit" class="login-button">Login</button>
            </div>
               <div class="row">
              <div class="col-6">
              <p>Don't have an acount?</p>
            </div>
            <div class="col">
          <a class="form-sign-up" href="{{ route('register') }}">Register</a>
                </div>
            </div>

          </form>
        </div>
      </div>
    </div>


{{--

<div class="container">
    <div class="row justify-content-center">
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
                                        <strong>{{ $message }}</strong>
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
    </div>
</div> --}}
@endsection
