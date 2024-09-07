@extends('auth.layout')

@section('content')
<div class="card">
    <div class="card-body">
      <!-- Logo -->
      <div class="app-brand justify-content-center">
        <a href="/" class="app-brand-link gap-2">
          <span class="app-brand-text demo text-body fw-bolder"><span style="color: black">Bro</span><span style="color: #004d4d ">booth.</span></span>
        </a>
      </div>
      <!-- /Logo -->
      <h4 class="mb-3 text-center">Welcome to brobooth! 👋</h4>

      <form id="formAuthentication" class="mb-3" action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_address" name="email" placeholder="Enter your email " autofocus="">
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_address" name="email" placeholder="Enter your email " autofocus="">
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="mb-3">
            
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_address" name="email" placeholder="Enter your email " autofocus="">
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="mb-3 form-password-toggle">
          <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="/forget">
              <small>Forgot Password?</small>
            </a>
          </div>

          <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          
        </div>
        <div class="mb-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember-me">
            <label class="form-check-label" for="remember-me"> Remember Me </label>
          </div>
        </div>

        
        <div class="mb-3">
          <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
        </div>


        <div class="line mb-4"> </div>

        <div class="media-btn text-center">
            <a href="{{ route('auth.google') }}" class="field google">
                <img src="{{ asset('assets/manage/images/img-google.png') }}" alt="" class="google-img">
                <span>Login With Google</span>
            </a>
        </div>
      </form>

      <p class="text-center mt-4">
        <span>New on our platform?</span>
        <a href="/register">
          <span>Create an account</span>
        </a>
      </p>
    </div>
  </div>
@stop