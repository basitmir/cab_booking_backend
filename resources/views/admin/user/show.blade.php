@extends('admin.layouts.sidebar')
@section('content')
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
    @include('admin.includes.breadcrumb')
    <!-- /Breadcrumb -->
        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title">
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span>
                </span>Driver</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Add Driver</h5>
                        <div class="row">
                            <div class="col-sm">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4 form-group">
                                        <label for="email" class="colored label-required">Email</label>
                                        <input class="form-control validate-required" id="email" placeholder="Email" value=""
                                               type="email">
                                        <small class="form-text text-danger d-none" id="emailHelp">Email is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="userName" class="colored label-required">User Name</label>
                                        <input class="form-control validate-required" id="userName" placeholder="User Name" value=""
                                               type="text">
                                        <small class="form-text text-danger d-none" id="userNameHelp">User Name is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="password" class="colored label-required">Password</label>
                                        <input class="form-control validate-required" id="password" placeholder="Password" value="" type="password">
                                        <small class="form-text text-danger d-none" id="passwordHelp">Password is required</small>
                                    </div>


                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4 form-group">
                                        <label for="lastName" class="colored label-required">Phone</label>
                                        <input class="form-control validate-required" id="phone" placeholder="Phone" value="" type="number">
                                        <small class="form-text text-danger d-none" id="phoneHelp">Phone Number is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName" class="colored label-required">City</label>
                                        <input class="form-control validate-required" id="city" placeholder="City" value="" type="text">
                                        <small class="form-text text-danger d-none" id="cityHelp">City Name is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="lastName" class="colored label-required">State</label>
                                        <input class="form-control validate-required" id="state" placeholder="State" value="" type="text">
                                        <small class="form-text text-danger d-none" id="stateHelp">State is required</small>

                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4 form-group">
                                        <label for="lastName" class="colored label-required">Zip</label>
                                        <input class="form-control validate-required" id="zip" placeholder="Zip" value="" type="number">
                                        <small class="form-text text-danger d-none" id="zipHelp">Zip is required</small>

                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="lastName" class="colored label-required">Country</label>
                                        <input class="form-control validate-required" id="country" placeholder="Country" value="" type="text">
                                        <small class="form-text text-danger d-none" id="countryHelp">Country is required</small>

                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="mainimg" class="colored">Main Image</label>
                                    <div class="fileinput fileinput-new input-group" id="mainimg" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-append">
                                            <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select
                                                    file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="file" id="file" required
                                                    class="validate-required">
                                            </span>
                                            <a href="#" class="btn btn-secondary fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </span>
                                    </div>
                                    <small class="form-text text-danger d-none" id="fileHelp">Image is required</small>
                                </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4 form-group">
                                        <label for="cabNumber" class="colored label-required">Cab Number</label>
                                        <input class="form-control validate-required" id="cabNumber" placeholder="Cab Number" value="" type="text">
                                        <small class="form-text text-danger d-none" id="cabNumberHelp">Cab Number is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="age" class="colored label-required">Age</label>
                                        <input class="form-control validate-required" id="age" placeholder="Age" value="" type="number">
                                        <small class="form-text text-danger d-none" id="ageHelp">Age is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="experience" class="colored label-required">Experience</label>
                                        <input class="form-control validate-required" id="experience" placeholder="Experience" value="" type="text">
                                        <small class="form-text text-danger d-none" id="experienceHelp">Experience is required</small>

                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4 form-group">
                                                <label for="gender" class="colored label-required">Gender</label>
                                                <select class="form-control validate-required custom-select d-block w-100" id="gender">
                                                    <!-- <option value="">Choos</option> -->
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                    <div class="col-md-4 form-group">
                                        <label for="vacancy" class="colored label-required">Vacancy</label>
                                        <input class="form-control validate-required" id="vacancy" placeholder="Vacancy" value="" type="number">
                                        <small class="form-text text-danger d-none" id="vacancyHelp">Vacancy is required</small>

                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="address" class="colored label-required">Address</label>
                                        <input class="form-control validate-required" id="address" placeholder="Address" value="" type="text">
                                        <small class="form-text text-danger d-none" id="addressHelp">Address is required</small>

                                    </div>
                                </div>
                                <hr>
                                <div class="row justify-content-md-center">
                                    <button id="saveDriver" class="btn btn-primary mr-10">Save</button>
                                    <button id="cancelDriver" class="btn btn-light">Cancel</button>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->
    @section('page-script')
        <!-- jQuery -->
            <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
            <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

            <!-- Jasny-bootstrap  JavaScript -->
            <script src="{{asset('vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

            <!-- Slimscroll JavaScript -->
            <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

            <!-- Fancy Dropdown JS -->
            <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

            <!-- Ion JavaScript -->
            <script src="{{asset('vendors/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
            <script src="{{asset('dist/js/rangeslider-data.js')}}"></script>

            <!-- Select2 JavaScript -->
            <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
            <script src="{{asset('dist/js/select2-data.js')}}"></script>

            <!-- Bootstrap Tagsinput JavaScript -->
            <script src="{{asset('vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

            <!-- Daterangepicker JavaScript -->
            <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
            <script src="{{asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
            <script src="{{asset('dist/js/daterangepicker-data.js')}}"></script>

            <!-- FeatherIcons JavaScript -->
            <script src="{{asset('dist/js/feather.min.js')}}"></script>
            <!-- SweetAlert JavaScript -->
            <script src="{{asset('dist/js/sweetalert.min.js')}}"></script>
            <!-- Toggles JavaScript -->
            <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
            <script src="{{asset('dist/js/toggle-data.js')}}"></script>

            <!-- Init JavaScript -->
            <script src="{{asset('dist/js/init.js')}}"></script>
            <!-- Custom JavaScript -->
            <script type="text/javascript">
                // my custom script
                var _isDirty = false;
                $(document).ready(function() {
                    $(":input").change(function() {
                        _isDirty = true;

                    });
                    $(document).on("keyup change keydown click",
                        "input[type=text].validate-required,input[type=password].validate-required,input[type=number].validate-required,input[type=email].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required",
                        function() {
                            var input = $(this).attr('id');
                            $(this).removeClass("is-invalid").addClass("is-valid");
                            $("small#" + input + 'Help').addClass('d-none');
                            $('.fileinput').removeClass("is-invalid-file").addClass("is-valid-file");

                        });
                    // Save Function
                    $(document).on('click', '#saveDriver', function() {
                        saveDriver();
                    });

                    // Cancel Function
                    $(document).on('click', '#cancelDriver', function() {
                        if (_isDirty) {
                            swal({
                                title: "",
                                text: "Do you want to Close without saving the changes?",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        document.location.href = "{!! URL::to('admin/driver'); !!}";
                                    } else {}
                                });
                        } else {
                            document.location.href = "{!! URL::to('admin/driver'); !!}";
                        }
                    });
                });

                function saveDriver() {
                    var token =  '{{ Session::get('access_token') }}';

                    var isValid = true;
                    $("input[type=text].validate-required,input[type=password].validate-required,input[type=email].validate-required,input[type=number].validate-required,input[type=file].validate-required,textarea.validate-required,select.validate-required")
                        .each(function() {
                            // alert('hello');

                            var input = $(this).attr('id');
                            var inputType = $(this).attr('type');
                            var inputvalue = $("#" + input).val().trim();
                            if (inputvalue == "") {
                                $(this).addClass("is-invalid");
                                $("small#" + input + 'Help').removeClass('d-none');
                                isValid = false;
                            }
                            if (inputvalue == "" && inputType != undefined && inputType == 'file') {
                                $('.fileinput').removeClass("is-valid-file").addClass("is-invalid-file");
                                $("small#" + input + 'Help').removeClass('d-none');
                                isValid = false;
                            }

                        });

                    if (isValid == false) {
                        return false;
                    }

                    var driverImage = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', driverImage);
                    form_data.append('userName', $('#userName').val());
                    form_data.append('password', $('#password').val());
                    form_data.append('email', $('#email').val());
                    form_data.append('phone', $('#phone').val());
                    form_data.append('city', $('#city').val());
                    form_data.append('zip', $('#zip').val());
                    form_data.append('country', $('#country').val());
                    form_data.append('state', $('#state').val());
                    form_data.append('age', $('#age').val());
                    form_data.append('experience', $('#experience').val());
                    form_data.append('cabNumber', $('#cabNumber').val());
                    form_data.append('gender', $('#gender').val());
                    form_data.append('vacancy', $('#vacancy').val());
                    form_data.append('address', $('#address').val());

                    $.ajax({
                        url: "{{ url('/api/addDriver') }}",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'POST',
                        headers: {"Authorization": 'Bearer ' + token},
                        success: function(data) {
                            console.log(data);
                            switch (data['result']) {
                                case 'success':
                                    _isDirty = false;
                                    swal({
                                        title: data['title'],
                                        text: data['message'],
                                        icon: data['result'],
                                        button: "OK",
                                        timer: 2000,
                                    }).then(function() {
                                        document.location.href = "{!! URL::to('admin/driver'); !!}";
                                    });
                                    break;
                                case 'error':
                                    swal({
                                        title: data['title'],
                                        text: data['message'],
                                        icon: data['result'],
                                        button: "OK",
                                    });
                                    break;
                            }
                        }
                    });
                }
            </script>
    @stop
    <!-- Footer -->
        <div class="hk-footer-wrap container">
            @include('admin.includes.footer')
        </div>
        <!-- /Footer -->
    </div>
@stop