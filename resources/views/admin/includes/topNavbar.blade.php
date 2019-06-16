<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="{{URL::to('admin/dashboard')}}">
        <img class="brand-img d-inline-block" src="{{asset('dist/img/logo-light.png')}}" alt="Admin" />
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item">
            <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span
                    class="feather-icon"><i data-feather="search"></i></span></a>
        </li>
        <li class="nav-item">
            <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span
                    class="feather-icon"><i data-feather="settings"></i></span></a>
        </li>
        <li class="nav-item dropdown dropdown-notifications">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i
                        data-feather="bell"></i></span><span class="badge-wrap"><span
                        class="badge badge-primary badge-indicator-sm badge-pill pulse" id="badge-indicator"></span></span></a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <h6 class="dropdown-header">Notifications<a href="javascript:void(0);" class=""id="clear">Clear</a></h6>
                <div class="notifications-nicescroll-bar" id="notification">
                    <!-- <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('assets/dist/img/avatar1.jpg')}}" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text"><span class="text-dark text-capitalize">Evie
                                            Ono</span> accepted your invitation to join the team</div>
                                    <div class="notifications-time">12m</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div> -->
                    <!-- <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('assets/dist/img/avatar2.jpg')}}" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">New message received from <span
                                            class="text-dark text-capitalize">Misuko Heid</span></div>
                                    <div class="notifications-time">1h</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-primary rounded-circle">
                                        <span class="initial-wrap"><span><i
                                                    class="zmdi zmdi-account font-18"></i></span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">You have a follow up with<span
                                            class="text-dark text-capitalize"> Pangong head</span> on <span
                                            class="text-dark text-capitalize">friday, dec 19</span> at <span
                                            class="text-dark">10.00 am</span></div>
                                    <div class="notifications-time">2d</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-success rounded-circle">
                                        <span class="initial-wrap"><span>A</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">Application of <span
                                            class="text-dark text-capitalize">Sarah Williams</span> is waiting for your
                                        approval</div>
                                    <div class="notifications-time">1w</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-warning rounded-circle">
                                        <span class="initial-wrap"><span><i
                                                    class="zmdi zmdi-notifications font-18"></i></span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">Last 2 days left for the project</div>
                                    <div class="notifications-time">15d</div>
                                </div>
                            </div>
                        </div>
                    </a> -->
                </div>
            </div>
        </li>
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{asset('dist/img/avatar1.png')}}" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>@if ($name=session()->get('username_admin') ){{$name}}@endif<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a> 
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="{{URL::to('admin/profile')}}"><i
                        class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                <!-- <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My -->
                        <!-- balance</span></a> -->
                <a class="dropdown-item" href="inbox.html"><i
                        class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                <a class="dropdown-item" href="#"><i
                        class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                <div class="dropdown-divider"></div>
                <div class="sub-dropdown-menu show-on-hover">
                    <a href="#" class="dropdown-toggle dropdown-item no-caret"><i
                            class="zmdi zmdi-check text-success"></i>Online</a>
                    <div class="dropdown-menu open-left-side">
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item logout" href="javascript::void(0)"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="dropdown-icon zmdi zmdi-power"></i>
                <span>Log out</span></a>
            </div>
        </li>
    </ul>
</nav>
<form role="search" class="navbar-search">
    <div class="position-relative">
        <a href="javascript::void(0);" class="navbar-search-icon"><span class="feather-icon"><i
                    data-feather="search"></i></span></a>
        <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
        <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i
                    data-feather="x"></i></span></a>
    </div>
</form>
<form id="logout-form" action="{{url('/admin/logout')}}" method="POST" style="display: none;">
@csrf
<input type="hidden" name="token" value="{{ Session::get('access_token') }}">
</form>
<script type="text/javascript">
// my custom script

    function logOut() {
    var token = '{{ Session::get('access_token') }}';
    console.log(token);
    $.ajax({
                url: "{{ url('/logout') }}",
                type: 'POST',
                // dataType: 'JSON',
                headers: {"Authorization": 'Bearer ' + token},
                data: {
                    '_method':'post',
                    "_token": "{{ csrf_token() }}",
                },
    });
}
</script>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<!-- <script>

var notifications=[];
showNotifications();
Pusher.logToConsole = true;
$("#clear").click(function(){
        notifications=[];
        localStorage.removeItem('messages');
        $('#notification').empty();
        $("#badge-indicator").removeClass("badge-indicator");
    });
var pusher = new Pusher('089051b6410063b41873', {
      cluster: 'ap2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('order-placed', function(data) {
        // console.log(data);
        if(data){
            $("#badge-indicator").addClass("badge-indicator");
        }
        // console.log(JSON.parse(localStorage.getItem("messages")));
        var messages = JSON.parse(localStorage.getItem("messages"));
        console.log(messages);
        if (messages !== null) {
            notifications=messages;
            console.log(notifications)
        }
        notifications.unshift(data);
        localStorage.setItem("messages", JSON.stringify(notifications));
        // console.log("sadas");
            // console.log(JSON.parse(localStorage.getItem("names")));

    //   alert(JSON.stringify(data));
    showNotifications();
    });
    channel.bind('contact-us', function(data) {
        // console.log(data);
        if(data){
            $("#badge-indicator").addClass("badge-indicator");
        }
        var messages = JSON.parse(localStorage.getItem("messages"));
        console.log(messages);
        if (messages !== null) {
            notifications=messages;
            console.log(notifications)
        }
        notifications.unshift(data);
            // console.log(notifications);
            localStorage.setItem("messages", JSON.stringify(notifications));
    //   alert(JSON.stringify(data));
    showNotifications();
    });
    channel.bind('callback', function(data) {
        // console.log(data);
        if(data){
            $("#badge-indicator").addClass("badge-indicator");
        }
        var messages = JSON.parse(localStorage.getItem("messages"));
        console.log(messages);
        if (messages !== null) {
            notifications=messages;
            console.log(notifications)
        }
        notifications.unshift(data);
            // console.log(notifications);
            localStorage.setItem("messages", JSON.stringify(notifications));

    //   alert(JSON.stringify(data));
    showNotifications();
    });
    channel.bind('subscription', function(data) {
        // console.log(data);
        if(data){
            $("#badge-indicator").addClass("badge-indicator");
        }
        var messages = JSON.parse(localStorage.getItem("messages"));
        console.log(messages);
        if (messages !== null) {
            notifications=messages;
            console.log(notifications)
        }
        notifications.unshift(data);
            // console.log(notifications);
            localStorage.setItem("messages", JSON.stringify(notifications));

    //   alert(JSON.stringify(data));
    showNotifications();
    });
    function showNotifications(){
        var messages=(JSON.parse(localStorage.getItem("messages")));
        // console.log(notifications);
        console.log(messages);
        var Image='{{asset('dist/img/avatar2.jpg')}}';
        $('#notification').empty();
        for(var i in messages){
            if(messages[i]['order']=='You have Recieved a new Order'){
            $('#notification').append('<a href="/admin/order" class="dropdown-item">'+
                            '<div class="media">'+
                                '<div class="media-img-wrap">'+
                                    '<div class="avatar avatar-sm">'+
                                        '<img src="'+Image+'" alt="user" class="avatar-img rounded-circle">'+
                                        '</div>'+
                                        '</div>'+
                                        '<div class="media-body">'+
                                        '<div>'+
                                        '<div class="notifications-text"><span class="text-dark text-capitalize">'+messages[i]['order']+'</span><br>take a look</div>'+
                                                '<div class="notifications-time">12m</div>'+
                                                '</div>'+
                                                '</div>'+
                                                '</div>'+
                                                '</a>'+
                                                '<div class="dropdown-divider"></div>');
            }

            if(messages[i]['contact']=='Somebody tried to contact you' || messages[i]['contact']=='Request for a Callback' || messages[i]['contact']=='Somebody subscribed for Newsletter'){
            $('#notification').append('<a href="/admin/notification" class="dropdown-item">'+
                            '<div class="media">'+
                                '<div class="media-img-wrap">'+
                                    '<div class="avatar avatar-sm">'+
                                        '<img src="'+Image1+'" alt="user" class="avatar-img rounded-circle">'+
                                        '</div>'+
                                        '</div>'+
                                        '<div class="media-body">'+
                                        '<div>'+
                                        '<div class="notifications-text"><span class="text-dark text-capitalize">'+messages[i]['contact']+'</span><br>take a look</div>'+
                                                '<div class="notifications-time">12m</div>'+
                                                '</div>'+
                                                '</div>'+
                                                '</div>'+
                                                '</a>'+
                                                '<div class="dropdown-divider"></div>');
            }
        }
    }
</script> -->