
@extends('layouts.login')

@section('content')

<div class="hk-wrapper hk-pg-auth" data-footer="simple">
    <!-- Main Content -->
    <div class="hk-pg-wrapper py-0">
        <div class="hk-pg-body py-0">
            <!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="row auth-split">
                    <div class="col-xl-5 col-lg-6 col-md-7 position-relative mx-auto">
                        <div class="auth-content flex-column pt-8 pb-md-8 pb-13">
                            <div class="text-center mb-7">
                                <a class="navbar-brand me-0" href="index.html">
                                    <img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="brand">
                                </a>
                            </div>
                            <form class="w-100">
                                <div class="row">
                                    <div class="col-xl-7 col-sm-10 mx-auto">
                                        <div class="text-center mb-4">
                                            <h4>Sign in to your account</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</p>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="form-group col-lg-12">
                                                <div class="form-label-group">
                                                    <label>Email id</label>
                                                </div>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email id">
                                              
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <div class="form-label-group">
                                                    <label>Password</label>
                                                    <a href="#" class="fs-7 fw-medium">Forgot Password ?</a>
                                                </div>
                                                <div class="input-group password-check">
                                                    <span class="input-affix-wrapper affix-wth-text">
                                                      
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                            <span>Show</span>
                                                            <span class="d-none">Hide</span>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-check form-check-sm mb-3">
                                               
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="Logged_in">
                                        {{ __('Keep me logged in') }}
                                    </label>
                                            </div>
                                        </div>
                                              <button type="submit" class="btn btn-primary btn-block">
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
                        <!-- Page Footer -->
                        <div class="hk-footer border-0">
                            <footer class="container-xxl footer">
                                <div class="row">
                                    <div class="col-xl-8 text-center">
                                                                           </div>
                                </div>
                            </footer>
                        </div>
                        <!-- / Page Footer -->
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-5 col-sm-10 d-md-block d-none position-relative bg-primary-light-5">
                        <div class="auth-content flex-column text-center py-8">
                            <div class="row">
                                <div class="col-xxl-7 col-xl-8 col-lg-11 mx-auto">
                                    <h2 class="mb-4">Meet all new Pro Jampack 2.0</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, passages of Lorem Ipsum available, in some form, by injected.</p>
                                    <button class="btn  btn-flush-primary btn-uppercase mt-2">Take Tour</button>
                                </div>
                            </div>
                            <img src="dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-50 mt-7" alt="login"/>
                        </div>
                        <p class="p-xs credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
                    </div>
                </form>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Main Content -->
</div>


@endsection






 