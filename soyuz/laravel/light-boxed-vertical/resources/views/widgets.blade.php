@section('title') 
Soyuz - Widgets
@endsection 
@extends('layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Widgets</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h4>$985<i class="feather icon-arrow-up text-success ml-1"></i></h4>
                            <p class="font-14 mb-0">Last Month Revenue</p>
                        </div>
                        <div class="col-5 text-right">
                            <div id="apex-area1-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h4>542<i class="feather icon-arrow-down text-danger ml-1"></i></h4>
                            <p class="font-14 mb-0">No of Open Invoices</p>
                        </div>
                        <div class="col-5">
                            <div id="apex-area2-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h4>253<i class="feather icon-arrow-up text-success ml-1"></i></h4>
                            <p class="font-14 mb-0">Tasks Pending</p>
                        </div>
                        <div class="col-5">
                            <div id="apex-area3-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Top Performer</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                            
                <div class="user-slider">
                    <div class="user-slider-item">
                        <div class="card-body text-center">
                            <span class="action-icon badge badge-primary-inverse">JD</span>
                            <h5>John Doe</h5>
                            <p>demo@email.com</p>
                            <p><span class="badge badge-primary-inverse">Product Head</span></p>
                            <div class="button-list mt-4">
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-phone"></i></button>
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-mail"></i></button>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-6 border-right">
                                    <h4>253</h4>
                                    <p class="my-2">Task Done</p>
                                </div>
                                <div class="col-6">
                                    <h4>51</h4>
                                    <p class="my-2">New Leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-slider-item">
                        <div class="card-body text-center">
                            <span class="action-icon badge badge-success-inverse">MW</span>
                            <h5>Mark Wood</h5>
                            <p>demo@email.com</p>
                            <p><span class="badge badge-success-inverse">Product Head</span></p>
                            <div class="button-list mt-4">
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-phone"></i></button>
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-mail"></i></button>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-6 border-right">
                                    <h4>253</h4>
                                    <p class="my-2">Task Done</p>
                                </div>
                                <div class="col-6">
                                    <h4>51</h4>
                                    <p class="my-2">New Leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-slider-item">
                        <div class="card-body text-center">
                            <span class="action-icon badge badge-secondary-inverse">MC</span>
                            <h5>Maria Carey</h5>
                            <p>demo@email.com</p>
                            <p><span class="badge badge-secondary-inverse">Product Head</span></p>
                            <div class="button-list mt-4">
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-phone"></i></button>
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-mail"></i></button>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-6 border-right">
                                    <h4>253</h4>
                                    <p class="my-2">Task Done</p>
                                </div>
                                <div class="col-6">
                                    <h4>51</h4>
                                    <p class="my-2">New Leads</p>
                                </div>
                            </div>
                        </div>
                    </div>                               
                </div>                            
            </div>      
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Ticket Status</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body crm-tab-widget">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-5 p-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="feather icon-circle font-12 mr-1"></i>Support<span class="float-right font-14 text-muted">50</span></a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="feather icon-circle font-12 mr-1"></i>Sales<span class="float-right font-14 text-muted">65</span></a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="feather icon-circle font-12 mr-1"></i>Product<span class="float-right font-14 text-muted">85</span></a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="feather icon-circle font-12 mr-1"></i>Hiring<span class="float-right font-14 text-muted">32</span></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 p-0">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div id="apex-operation-status1-chart"></div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div id="apex-operation-status2-chart"></div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div id="apex-operation-status3-chart"></div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div id="apex-operation-status4-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-5">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Earning By Countries</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="revenue-box mb-3">
                                <h4 class="text-primary mb-0">$2598</h4>
                                <p class="font-14">Unites States of America</p>
                            </div>
                            <div class="revenue-box mb-3">
                                <h4 class="text-success mb-0">$3698</h4>
                                <p class="font-14">Russian Federation</p>
                            </div>
                            <div class="revenue-box mb-3">
                                <h4 class="text-secondary mb-0">$369</h4>
                                <p class="font-14">India</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div id="world-map" class="vector-world-map"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->

        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card bg-primary-rgba m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title text-primary mb-1">Good Morning, John</h5>
                            <p class="mb-0 text-primary font-14">"May the sun shine brightest, Today"</p>
                        </div>
                        <div class="col-4 text-right">
                            <img src="assets/images/general/sun.svg" class="img-fluid sun-img" alt="sun">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Order Statistics</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div id="apex-circle-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-8">
            <div class="product-slider">
                <div class="product-slider-item">
                    <div class="card m-b-30">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/images/ecommerce/product_img_01.jpg" class="card-img h-100" alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-header">                                
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h5 class="card-title mb-0">Electronic Kettle</h5>
                                            <p class="mb-0 font-14">Mens, Sports</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h5 class="card-title mb-0">4.5/5</h5>
                                            <p class="mb-0 font-14">25 Ratings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">John Ordered 2 min ago</small></p>
                                            <a href="#" class="btn btn-primary">View More</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <h4 class="card-title mb-0"><sup>$</sup>75</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-slider-item">
                    <div class="card m-b-30">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/images/ecommerce/product_img_02.jpg" class="card-img h-100" alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-header">                                
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h5 class="card-title mb-0">Fitness Band</h5>
                                            <p class="mb-0 font-14">Electronics</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h5 class="card-title mb-0">4/5</h5>
                                            <p class="mb-0 font-14">30 Ratings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Mark Ordered 5 min ago</small></p>
                                            <a href="#" class="btn btn-primary">View More</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <h4 class="card-title mb-0"><sup>$</sup>50</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-slider-item">
                    <div class="card m-b-30">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/images/ecommerce/product_img_03.jpg" class="card-img h-100" alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-header">                                
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h5 class="card-title mb-0">iPhone XR</h5>
                                            <p class="mb-0 font-14">Electronics</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h5 class="card-title mb-0">5/5</h5>
                                            <p class="mb-0 font-14">50 Ratings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Dany Ordered 10 min ago</small></p>
                                            <a href="#" class="btn btn-primary">View More</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <h4 class="card-title mb-0"><sup>$</sup>99</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Total Sales</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h4 class="mb-0">$895</h4>
                        </div>
                        <div class="col-8 text-right">
                            <button type="button" class="btn btn-outline-primary"><i class="feather icon-download mr-2"></i>Download Statement</button>
                        </div>
                    </div>
                    <div class="progress my-3" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3">
                            <h5 class="mb-0">$1269</h5>
                            <p class="font-14">Total Earning</p>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <h5 class="mb-0">$5986</h5>
                            <p class="font-14">Pending Orders</p>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <h5 class="mb-0">$958</h5>
                            <p class="font-14">Refund Claimed</p>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <h5 class="mb-0">$7982</h5>
                            <p class="font-14">Amount Paid</p>
                        </div>
                    </div>
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
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>  
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Custom Widget js -->
<script src="{{ asset('assets/js/custom/custom-widgets.js') }}"></script>
@endsection 