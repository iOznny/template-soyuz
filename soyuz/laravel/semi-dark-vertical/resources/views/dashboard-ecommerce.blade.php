@section('title') 
Soyuz - eCommerce
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
            <h4 class="page-title">Ecommerce</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
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
        <div class="col-lg-12 col-xl-9">
            <!-- Start row -->
            <div class="row">
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
                    <!-- Start row -->
                    <div class="row">
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-12">
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
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-header">                                
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <h5 class="card-title mb-0">Total Sales</h5>
                                        </div>
                                        <div class="col-3">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="totalSales" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="totalSales">
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
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12 col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Best Selling Products</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="bestSelling" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bestSelling">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Weekender Bag</td>
                                            <td>$24</td>
                                            <td>
                                                <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-primary-inverse">Full Stock</span></td>
                                            <td>
                                                <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                                <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Armani Vest</td>
                                            <td>$59</td>
                                            <td>
                                                <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">In Stock</span></td>
                                            <td>
                                                <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                                <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Canva Women's Top</td>
                                            <td>$25</td>
                                            <td>
                                                <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-danger-inverse">Low Stock</span></td>
                                            <td>
                                                <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                                <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Self Steering Mug</td>
                                            <td>$98</td>
                                            <td>
                                                <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning-inverse">Out of Stock</span></td>
                                            <td>
                                                <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                                <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Oakley Bag</td>
                                            <td>$12</td>
                                            <td>
                                                <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-primary-inverse">Full Stock</span></td>
                                            <td>
                                                <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                                <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>                                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12 col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Monthly Sales Report</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="monthlyReport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="monthlyReport">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="apex-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->         
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetActivities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetActivities">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ecom-notification-box">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-dark-inverse"><i class="feather icon-box"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Order Received</h5>
                                    <p class="my-3">Priyank J Shah ordered Bluetooth Earphone Black with Gift Wrap.</p>
                                    <p><span class="timing font-14">20-02-2020, 06:48 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-dark-inverse"><i class="feather icon-percent"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Your top discounts by sales</h5>
                                    <p class="my-3">Campaign "FLAT25" has hit more than 5k redemption on Christmas.</p>
                                    <p><span class="timing font-14">15-01-2020, 02:35 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-dark-inverse"><i class="feather icon-alert-octagon"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Low Stock Alert</h5>
                                    <p class="my-3">Weekender Bag is in Low Stock. We have 6 pcs left. Order Quickly.</p>
                                    <p><span class="timing font-14">10-12-2019, 11:52 AM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-dark-inverse"><i class="feather icon-dollar-sign"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">John Doe applied for refund</h5>
                                    <p class="my-3">Joh has asked for refund of product because of different fabric.</p>
                                    <p><span class="timing font-14">05-10-2019, 3:22 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-dark-inverse"><i class="feather icon-box"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Order Received</h5>
                                    <p class="my-3">Mark ordered Armani Vest.</p>
                                    <p><span class="timing font-14">09-02-2019, 05:25 PM</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block">Settings</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary btn-lg btn-block">See All</button>
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
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-ecommerce.js') }}"></script>
@endsection 