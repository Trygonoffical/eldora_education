@extends('layouts.app')

@section('content')
    <!-- Main Content -->

    <div class="hk-pg-body py-0">
        <!-- Container -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row auth-split">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 position-relative mx-auto">
                    <div class="auth-content flex-column pt-8 pb-md-8 pb-13">


                        <div class="row">
                            <div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">

                                <h4 class="text-center mb-4">Student new registration</h4>

                                <div class=" mt-4"><span></span></div>
                                <div class="row gx-3">

                                    <form method="POST" action="{{ route('s_register') }}">
                                        @csrf

                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Name</label>
                                            {{-- <input class="form-control" placeholder="Enter your name" name="uname" type="text"> --}}
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="uname">

                                            @error('uname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Email</label>
                                            {{-- <input class="form-control" placeholder="Enter your email id" name="email" type="text"> --}}
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Password</label>
                                            <div class="input-group password-check">
                                                <span class="input-affix-wrapper affix-wth-text">
                                                    {{-- <input class="form-control" placeholder="6+ characters" name="password" type="password"> --}}
                                                    <input id="password" type="password" class="form-control" name="password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <a href="#"
                                                        class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                        <span>Show</span>
                                                        <span class="d-none">Hide</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-rounded btn-uppercase btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </form>

                                </div>


                                {{-- <a href="#" class="btn btn-primary btn-rounded btn-uppercase btn-block">Register</a> --}}


                            </div>
                        </div>

                    </div>
                    <!-- Page Footer -->

                    <!-- / Page Footer -->
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Page Body -->

    <!-- /Main Content -->
@endsection
