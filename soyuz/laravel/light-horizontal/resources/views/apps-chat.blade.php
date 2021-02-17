@section('title') 
Soyuz - Chat
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Chat</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chat</li>
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
        <div class="col-lg-5 col-xl-4">
            <div class="chat-list">
                <div class="chat-search">
                    <form>
                        <div class="input-group">
                          <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                          <div class="input-group-append">
                            <button class="btn" type="submit" id="button-addon3"><i class="feather icon-search"></i></button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="chat-user-list">
                    <ul class="list-unstyled mb-0">
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>John Doe<span class="badge badge-success ml-2">3</span> <span class="timing">25 Jan</span></h5>
                                <p>Admin</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Mark Wood<span class="badge badge-success ml-2">1</span> <span class="timing">19 Jan</span></h5>
                                <p>Web Developer</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Carey Smith<span class="badge badge-success ml-2">2</span> <span class="timing">09 Jan</span></h5>
                                <p>Web Designer</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>David Mathews<span class="badge badge-success ml-2">3</span> <span class="timing">01 Jan</span></h5>
                                <p>Social Marketing</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Kate Perry<span class="badge badge-success ml-2">1</span> <span class="timing">28 Dec</span></h5>
                                <p>UI Designer</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Angelina Miller<span class="badge badge-success ml-2">3</span> <span class="timing">20 Dec</span></h5>
                                <p>Tester</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Dany Smith<span class="badge badge-success ml-2">2</span> <span class="timing">10 Dec</span></h5>
                                <p>HR</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>John Stark<span class="badge badge-success ml-2">3</span> <span class="timing">02 Dec</span></h5>
                                <p>Marketing Head</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Adam Brue<span class="badge badge-success ml-2">2</span> <span class="timing">29 Nov</span></h5>
                                <p>Product Head</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Colin Perry<span class="badge badge-success ml-2">1</span> <span class="timing">21 Nov</span></h5>
                                <p>Manager</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                       
        <div class="col-lg-7 col-xl-8">       
            <div class="chat-detail">
                <div class="chat-head">
                    <ul class="list-unstyled mb-0">
                        <li class="media">
                            <img class="align-self-center mr-3 rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="font-18">John Doe</h5>
                                <p class="mb-0">Online</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat-body">
                    <div class="chat-day text-center mb-3">
                        <span class="badge badge-secondary">Today</span>
                    </div>                                
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Hello! please, let me know the status about project after school.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>I have completed 4 stages 5 stages remaining.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>I request you to schedule demo at 3 pm after 2 days for the better progress.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>Sure, I will prepare for the same.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:27 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Great. Thanks</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:30 pm<i class="feather icon-clock ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>I have completed 4 stages 5 stages remaining.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>I request you to schedule demo at 3 pm after 2 days for the better progress.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>Sure, I will prepare for the same.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:27 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Great. Thanks</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:30 pm<i class="feather icon-clock ml-2"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-bottom">
                    <div class="chat-messagebar">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-round btn-secondary-rgba" type="button" id="button-addonmic"><i class="feather icon-mic"></i></button>
                                </div>  
                                <input type="text" class="form-control" placeholder="Type a message..." aria-label="Text">
                                <div class="input-group-append">
                                    <button class="btn btn-round btn-secondary-rgba" type="submit" id="button-addonlink"><i class="feather icon-link"></i></button>
                                    <button class="btn btn-round btn-primary-rgba" type="button" id="button-addonsend"><i class="feather icon-send"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End contentbar -->
@endsection 
@section('script')
<!-- Chat js -->
<script src="{{ asset('assets/js/custom/custom-chat.js') }}"></script>
@endsection 