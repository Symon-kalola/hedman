@extends('layouts.reg')

@section('content')
 
<div class="container " style="margin-top:110px;">
     
    
   
    <div class="row justify-content-center">
        

    
        <div class="col-md-8">
            
              <div class="d-flex mb-1">
              <a href="{{ route('home') }}" style="font-size:12px" class="text-white btn btn-success btn-sm"><i class="fa text-white fa-arrow-left"></i>  Back to home</a>
            </div>
            
            <div class="card">
                <div  class="text-center shadow-md card-header bg-white bg-gradient">
                 <div>
                          <img src="images/icon.png" height="100px" alt="">
                         <h5 class="h6 text-success " style="font-weight:900">HEDMAN LOGIN</h5>
                 </div>
                </div>
            

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

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
                            <div class="col-md-8 offset-md-4 d-flex">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                <h6 class="pt-2 ms-2 text-success" style="text-decoration: underline;"><a class="nav-link" href="{{ route('register') }}">{{ __('Or Register') }}</a>
                                </h6>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-success" href="{{ route('password.request') }}">
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
</div>
@endsection
