@extends('admin.layouts.sidebar')
@section('content')
<div class="hk-pg-wrapper">
<!-- Breadcrumb -->
@include('admin.includes.breadcrumb')
            <!-- /Breadcrumb -->
         <!-- Container -->
         <div class="container">
<!-- Row -->
            <div class="hk-pg-header mb-10">
                <!-- <div> -->
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                        data-feather="book"></i></span></span>Bookings</h4>
                <!-- </div> -->
                <div class="d-flex">
                    <!-- <div> -->
                        <!-- <a class="hk-pg-title btn btn-primary btn-sm" href="{{URL::to('admin/driver/create')}}">
                        <span class="mr-5">
                        <span class="feather-icon"><i data-feather="plus-square"></i></span>
                        </span>Add New Driver</a> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="userTbl" class="table table-hover w-100 pb-30">
                                        <thead>
                                            <tr>
                                            <th>Id</th>
                                            <th>Driver Image</th>
                                            <th>User Image</th>
                                            <th>Driver Id</th>
                                            <th>User Id</th>
                                            <th>Driver Username</th>
                                            <th>User Username</th>
                                            <th>Driver Phone</th>
                                            <th>User Phone</th>
                                            <th>Booking Type</th>
                                            <th>Booking Amount</th>
                                            <th>Cab Number</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Zip</th>
                                            <th>Vacancy</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Id</th>
                                            <th>Driver Image</th>
                                            <th>User Image</th>
                                            <th>Driver Id</th>
                                            <th>User Id</th>
                                            <th>Driver Username</th>
                                            <th>User Username</th>
                                            <th>Driver Phone</th>
                                            <th>User Phone</th>
                                            <th>Booking Type</th>
                                            <th>Booking Amount</th>
                                            <th>Cab Number</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Zip</th>
                                            <th>Vacancy</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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

<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Data Table JavaScript -->
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<!-- <script src="{{asset('dist/js/dataTables-data.js')}}"></script> -->

<!-- FeatherIcons JavaScript -->
<script src="{{asset('dist/js/feather.min.js')}}"></script>
<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
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
    $(document).ready(function() {
        console.log("hello");
        // Fetch Users
        fetchBookings();
// Delete Function
$(document).on('click','.delete-button',function(){
    deleteBooking($(this).attr('id'));
});

});
function fetchBookings(){
    var token =  '{{ Session::get('access_token') }}';
    $("#userTbl").DataTable().destroy()
    $('#userTbl').DataTable({
                        ajax:{
                            url: "{{ url('/api/getAllBookings') }}",
                            type: 'GET',
                            dataType: 'JSON',
                            headers: {"Authorization": 'Bearer ' + token},
                            dataSrc: function ( json ) {
                                console.log(json);
                                return json;
                            }
                            },
                            scrollX: true,
                            autoWidth: false,
                            "order": [[ 0, "desc" ]],
		language: { search: "",
		searchPlaceholder: "Search"},
    	sLengthMenu: "_MENU_items",
columns: [
{ "data": "id" },
{
    "data": "null",
    "render": function(data, type, full, meta) {

        var driverImage = '{{URL::asset('assets/images') }}' + '/' + full.driver_image;
        if (driverImage != undefined) {

            return '<div class="avatar">' +
                '<img src="' + driverImage +
                '" alt="user" class="avatar-img rounded-circle">' +
                '</div>';
        } else {
            return "";
        }

    }
},
{
    "data": "null",
    "render": function(data, type, full, meta) {

        var driverImage = '{{URL::asset('assets/images') }}' + '/' + full.user_image;
        if (driverImage != undefined) {

            return '<div class="avatar">' +
                '<img src="' + driverImage +
                '" alt="user" class="avatar-img rounded-circle">' +
                '</div>';
        } else {
            return "";
        }

    }
},
{ "data": "driverAssignedId" },
{ "data": "bookingUserId"},
{ "data": "driver_userName" },
{ "data": "user_userName"},
{ "data": "driver_phone" },
{ "data": "user_phone"},
{ "data": "bookingTripType"},
{ "data": "bookingAmount"},
{ "data": "driver_cabNumber"},
{ "data": "bookingAddressFrom"},
{ "data": "bookingAddressTo"},
{ "data": "bookingCity" },
{ "data": "bookingState" },
{ "data": "bookingZip" },
{ "data": "driver_vacancy" },
{ "data": "status" },
{ "data": "date" },
{ "data": "null", 
"render": function ( data, type, full, meta ) { 
    var url = '{{ url("/admin/user/edit", "id") }}';
    url = url.replace('id', full.id);
    return '<div class="d-flex">'+
                '<a href="' + url + '" class="text-primary mr-15 fa fa-edit mt-1 "></a>' +
                '<a href="javascript:void(0);" id="'+full.id+'" class="text-danger delete-button mr-15"><i class="fa fa-trash"><i></a>'+
            '</div>';
}
},
]
});
}
function deleteBooking(id) {
    var token =  '{{ Session::get('access_token') }}';
    var url = '{{ url("/api/deleteBooking", "id") }}';
    url = url.replace('id', id);
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this user!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
    })
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    '_method':'delete'
                },
                success: function (data) {
                    switch(data['result']){
                            case 'success':
                                         _isDirty = false;
                                         swal({
                                                    title: data['title'],
                                                text: data['message'],
                                                icon: data['result'],
                                                button: "OK",
                                                timer: 2000,
                                                }).then(function() {
                                                    fetchBookings();
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
                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
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