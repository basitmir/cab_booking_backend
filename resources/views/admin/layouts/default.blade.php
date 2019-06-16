<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body>
<!-- Preloader -->
@include('admin.includes.loader')
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">
    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <!-- header content -->
    @include('admin.includes.header')
    <!-- header content end -->
        <div class="container-fluid">
            <!-- main content -->
            @yield('content')
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
@include('admin.includes.footDefault')

</body>
</html>