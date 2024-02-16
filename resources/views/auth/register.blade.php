@extends('layouts.reg')

@section('content')
<div class="container " style="margin-top:110px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex mb-1">
              <a href="{{ route('home') }}" style="font-size:12px" class="text-white btn btn-success btn-sm"><i class="fa text-white fa-arrow-left"></i>  Back to home</a>
            </div>
            <div class="card">
                <div  class="text-center shadow-md  my-3 card-header bg-white bg-gradient">
                 <div>
                          <img src="images/icon.png" height="100px" alt="">
                         <h5 class="h6  text-success mt-2\" style="font-weight:900">REGISTER WITH HEDMAN</h5>
                 </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 d-flex">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                                
                                <h6 class="pt-2 ms-2 text-success" style="text-decoration: underline;"><a class="nav-link" href="{{ route('login') }}">{{ __('Or Login') }}</a>
                                </h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
