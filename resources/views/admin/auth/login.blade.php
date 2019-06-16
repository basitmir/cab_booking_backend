@extends('admin.layouts.default')
@section('content')
    <div class="row" style="backgroung-image:url({{asset('dist\img\popular_menu_bg.jpg')}}">
        <div class="col-xl-3 pa-0">
            <!-- <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('assets/dist/img/bg2.png')}}">
                    <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                        <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                            <h1 class="display-3 text-white mb-20">Welcome Admin !</h1>
                            <p class="text-white"></p>
                        </div>
                    </div>
                    <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
                <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('assets/dist/img/bg1.png')}}">
                    <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                        <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                            <h1 class="display-3 text-white mb-20">Let's get Started</h1>
                            <p class="text-white">Experience matters for good applications.</p>
                        </div>
                    </div>
                    <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
            </div> -->
        </div>
        <div class="col-xl-6 pa-0">
            <div class="auth-form-wrap py-xl-0 py-50">
                <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                    <form method="post" action="{{ action('AuthController@authenticate') }}" id="adminLogin">
                        @csrf
                        <h1 class="display-4 mb-10"> Indian Fusion Restaurant</h1>
                        <p class="mb-30">Admin Log in </p>
                        {{ session()->forget('error') }}
                        @if ($flash = session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ $flash }}
                            </div>
                        @endif
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email"  id="email" type="email">
                            <small class="form-text text-danger" id="emailError"></small>
                           
                        </div>
                        <input type="hidden" name="check" value="1">
                        <div class="form-group">
                            <!-- <div class="input-group"> -->
                                <input class="form-control" name="password" placeholder="Password" id="password" type="password" required>
                                <small class="form-text text-danger" id="passwordError"></small>

                              {{--  <div class="input-group-append">
                                    <span class="input-group-text">
                                        <span class="feather-icon">
                                            <i data-feather="eye-off"></i>
                                        </span>
                                    </span>
                                </div>--}}

                            <!-- </div> -->
                        </div>
                        <div class="custom-control custom-checkbox mb-25">
                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                            <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                        </div>
                        <button class="btn btn-primary btn-block" id="submitLoginBtn" >Login</button>
                        
                        {{--onclick="window.location='{{ URL::to('admin/dashboard') }}'"--}}
                        {{--  <div class="option-sep">or</div>
                          <div class="form-row">
                              <div class="col-sm-6 mb-20">
                                  <button class="btn btn-indigo btn-block btn-wth-icon"><span class="icon-label"><i
                                                  class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span>
                                  </button>
                              </div>
                              <div class="col-sm-6 mb-20">
                                  <button class="btn btn-primary btn-block btn-wth-icon"><span class="icon-label"><i
                                                  class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span>
                                  </button>
                              </div>
                          </div>--}}
 
                        <!-- <p class="text-center">Do'nt have an account yet? <a href="{{URL::to('admin/register')}}">Sign Up</a></p> -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-3 pa-0">
        </div>

    </div>
@stop



