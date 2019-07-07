@extends('admin.layouts.default')
@section('content')
<div class="row">
    <div class="col-xl-5 pa-0">
        <div class="auth-cover-img overlay-wrap" style="background-image:url{{asset('assets/dist/img/bg1.jpg')}}">
            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                    <h1 class="display-3 text-white mb-20">Enjoy unlimited beautiful display content area</h1>
                    <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset
                        used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the
                        text with their software.</p>
                    <div class="play-wrap">
                        <a class="play-btn" href="#"></a>
                        <span>How it works ?</span>
                    </div>
                </div>
            </div>
            <div class="bg-overlay bg-trans-dark-50"></div>
        </div>
    </div>
    <div class="col-xl-7 pa-0">
        <div class="auth-form-wrap py-xl-0 py-50">
            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                <form class="needs-validation" method="post" action="{{ action('AuthController@adminRegister') }}" novalidate>
                @csrf
                    <h1 class="display-4 mb-10">Sign up for free</h1>
                    <p class="mb-30">Create your account and start your free trial today</p>
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <input class="form-control" placeholder="User Name" value="" type="text" name="name" required>
                            <div class="invalid-feedback">
                                First Name is required.
                            </div>
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <input class="form-control" placeholder="Last name" value="" type="text" name="lname" required>
                            <div class="invalid-feedback">
                                Last Name is required.
                            </div>
                        </div> -->
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Email" type="email" name="email">
                        <div class="invalid-feedback">
                            Email is required.
                        </div>
                    </div>
                    <input type="hidden" name="check" value="1">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" required>
                        <div class="invalid-feedback">
                            Password is required.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" placeholder="Confirm Password" id="confirmPassword" name="c_password"
                                type="password">
                            <div class="invalid-feedback" id="check">
                                Invalid Password.
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text"><span class="feather-icon"><i
                                            data-feather="eye-off"></i></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox mb-25">
                        <input class="custom-control-input" id="same-address" type="checkbox" checked required>
                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a
                                href=""><u>term and conditions</u></a></label>
                    </div>
                    <button class="btn btn-primary btn-block" id="submitLoginBtn" type="submit" name="submit">Register</button>
                    <div class="option-sep">or</div>
                    {{-- <div class="form-row">
                            <div class="col-sm-6 mb-20">
                                <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                            </div>
                        </div>--}}
                    <p class="text-center">Already have an account? <a href="{{URL::to('admin')}}">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <script type="text/javascript">
 
 $("#submitLoginBtn").click(function(event){
 var password=$("#password").val();
 var checkPassword=$("#confirmPassword").val();
if(password!=checkPassword){
    $("#confirmPassword").css("border-color","#dc3545");
    $("#confirmPassword").addClass("is-invalid");
     $("#check").text("Password Mismatch");
    event.preventDefault(); 
}
else{
    //    $("#confirmPassword").css("border-color","transparent");
    $("#confirmPassword").css("border-color","#22af47");
            $("#confirmPassword").removeClass("is-invalid").addClass("is-valid");
            $("#check").text("");
        }
});//main close
            
 </script>
@stop