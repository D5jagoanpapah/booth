@extends('auth.layout')

@section('content')
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                 
                  <span class="app-brand-text demo text-body fw-bolder"><span style="color: black">Bro</span> <span style="color: #004d4d ">booth.</span></span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 text-center">REGISTRASI 🚀</h4>

              <form id="formAuthentication" class="mb-3" action="{{ route('register.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Nama </label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama" autofocus />
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="email_address" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email_address" name="email" placeholder="Masukan Email" />
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                {{-- <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Ulangi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div> --}}

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary d-grid w-100">REGISTER</button>
                </form>
                
                <div class="line mb-4"> </div>

                <div class="media-btn text-center mb-4">
                    <a href="{{ route('auth.google') }}" class="field google">
                        <img src="{{ asset('assets/manage/images/img-google.png') }}" alt="" class="google-img">
                        <span>Login With Google</span>
                    </a>
                </div>

                <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="/login">
                        <span>Sign in instead</span>
                    </a>
                </p>
            </div>
          </div>
          <!-- Register Card -->



          {{-- <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
            <label class="form-check-label" for="terms-conditions">
              I agree to
              <a href="javascript:void(0);">privacy policy & terms</a>
            </label>
          </div>
        </div> --}}
@stop