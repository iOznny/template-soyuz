@section('title') 
Soyuz - Session Timeout
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Session Timeout</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Session Timeout</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row"> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Session Timeout</h5>
                </div>
                <div class="card-body">
                    <p>After a set amount of idle time, a Bootstrap warning dialog is shown to the user with the option to either log out, or stay connected. If "Logout" button is selected, the page is redirected to a logout URL. If "Stay Connected" is selected the dialog closes and the session is kept alive. If no option is selected after another set amount of idle time, the page is automatically redirected to a set timeout URL.</p>                               
                    <p>Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.</p>
                    <p class="mb-0">As long as the user is active, the (optional) keep-alive URL keeps getting pinged and the session stays alive. If you have no need to keep the server-side session alive via the keep-alive URL, you can also use this plugin as a simple lock mechanism that redirects to your lock-session or log-out URL after a set amount of idle time.</p>
                </div>
            </div>
        </div> 
        <!-- End col -->                   
    </div>
    <!-- End row --> 
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Session Timeout js -->
<script src="{{ asset('assets/plugins/bootstrap-session-timeout/js/bootstrap-session-timeout.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-session-timeout.js') }}"></script>
@endsection 