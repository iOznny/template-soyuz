@section('title') 
Soyuz - My Account
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">My Account</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item"><a href="#">Front End</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
        <div class="col-lg-5 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">My Account</h5>
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="feather icon-grid mr-2"></i>Dashboard</a>
                        <a class="nav-link mb-2" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false"><i class="feather icon-package mr-2"></i>My Orders</a>
                        <a class="nav-link mb-2" id="v-pills-addresses-tab" data-toggle="pill" href="#v-pills-addresses" role="tab" aria-controls="v-pills-addresses" aria-selected="false"><i class="feather icon-map-pin mr-2"></i>My Addresses</a>
                        <a class="nav-link mb-2" id="v-pills-wishlist-tab" data-toggle="pill" href="#v-pills-wishlist" role="tab" aria-controls="v-pills-wishlist" aria-selected="false"><i class="feather icon-heart mr-2"></i>Wishlist</a>
                        <a class="nav-link mb-2" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-wallet" role="tab" aria-controls="v-pills-wallet" aria-selected="true"><i class="feather icon-credit-card mr-2"></i>Wallet</a>
                        <a class="nav-link mb-2" id="v-pills-chat-tab" data-toggle="pill" href="#v-pills-chat" role="tab" aria-controls="v-pills-chat" aria-selected="false"><i class="feather icon-message-circle mr-2"></i>My Chat</a>
                        <a class="nav-link mb-2" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false"><i class="feather icon-bell mr-2"></i>Notifications</a>
                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="feather icon-user mr-2"></i>My Profile</a>
                        <a class="nav-link" id="v-pills-logout-tab" data-toggle="pill" href="#v-pills-logout" role="tab" aria-controls="v-pills-logout" aria-selected="false"><i class="feather icon-log-out mr-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7 col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Start -->
                <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Dashboard</h5>
                        </div>
                        <div class="card-body">
                            <div class="profilebox py-4 text-center">
                                <img src="assets/images/users/profile.svg" class="img-fluid mb-3" alt="profile">
                                <div class="profilename">
                                    <h5>John Doe</h5>
                                    <p class="text-muted my-3"><a href="my-account.html"><i class="feather icon-edit-2 mr-2"></i>Edit Profile</a></p>
                                </div>
                                <div class="button-list">
                                    <a href="#" class="btn btn-primary-rgba font-18"><i class="feather icon-facebook"></i></a>
                                    <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-twitter"></i></a>
                                    <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start row -->
                    <div class="row">
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-package"></i>
                                            <div class="media-body">
                                                <h5>My Orders</h5>
                                                <p>Pending (1)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-heart"></i>
                                            <div class="media-body">
                                                <h5>My Wishlist</h5>
                                                <p>Items (5)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-credit-card"></i>
                                            <div class="media-body">
                                                <h5>My Wallet</h5>
                                                <p>Balance ($90)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>  
                    <!-- End row -->
                </div>
                <!-- Dashboard End -->
                <!-- My Orders Start -->
                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Orders</h5>
                        </div>
                        <div class="card-body">
                            <div class="order-box">
                                <div class="card border m-b-30">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>ID : #551</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0">Total : <strong>$175</strong></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>    
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Electronic Kettle</td>
                                                        <td>1</td>
                                                        <td>$75</td>
                                                        <td class="text-right">$75</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Fitness Band</td>
                                                        <td>2</td>
                                                        <td>$50</td>
                                                        <td class="text-right">$100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>Status : <span class="badge badge-info-inverse font-14">Shipped</span></h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-file mr-2"></i>Invoice</button></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-box">
                                <div class="card border m-b-30">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>ID : #550</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0">Total : <strong>$99</strong></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>    
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>iPhone XR</td>
                                                        <td>1</td>
                                                        <td>$99</td>
                                                        <td class="text-right">$99</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>Status : <span class="badge badge-primary-inverse font-14">Delivered</span></h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-file mr-2"></i>Invoice</button></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Orders End -->
                <!-- My Addresses Start -->
                <div class="tab-pane fade" id="v-pills-addresses" role="tabpanel" aria-labelledby="v-pills-addresses-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Addresses</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-body text-center py-5">
                                                <p><button type="button" class="btn btn-round btn-success-rgba"><i class="feather icon-plus"></i></button></p>
                                                <h5 class="mt-4 mb-0">Add New Address</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                                            
                                <div class="col-lg-12 col-xl-6">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-header">
                                                <h5 class="mb-0">John Doe</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>+1 9876543210</p>
                                                <p>5101 Public Work Drive, 24th Street, Near Oklahoma Building, Cleveland, Tennessee, USA.</p>
                                                <p class="mb-0">demo@example.com</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-round btn-success-rgba mb-1"><i class="feather icon-edit-2"></i></button>
                                                    <button type="button" class="btn btn-round btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                    <button type="button" class="btn btn-primary-rgba font-16 mb-0">Default</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-header">
                                                <h5 class="mb-0">John Doe</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>+1 9876543210</p>
                                                <p>5102 Public Work Drive, 24th Street, Near Oklahoma Building, Cleveland, Tennessee, USA.</p>
                                                <p class="mb-0">demo@example.com</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-round btn-success-rgba mb-1"><i class="feather icon-edit-2"></i></button>
                                                    <button type="button" class="btn btn-round btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                    <button type="button" class="btn btn-secondary-rgba font-16 mb-0">Make Default</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Addresses End -->
                <!-- My Wishlist Start -->
                <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Wishlist</h5>
                        </div>
                        <div class="card-body">
                            <div class="wishlist-box">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>                            
                                                <th scope="col">Photo</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>                
                                                <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Electronic Kettle</td>
                                                <td>
                                                    <div class="form-group mb-0">
                                                        <input type="number" class="form-control cart-qty" name="cartQty1" id="cartQty1" value="1">
                                                    </div>
                                                </td>
                                                <td>$75</td>
                                                <td>$75</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary-rgba mb-1 mr-1"><i class="feather icon-shopping-cart"></i></button>
                                                    <button type="button" class="btn btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Fitness Band</td>
                                                <td>
                                                    <div class="form-group mb-0">
                                                        <input type="number" class="form-control cart-qty" name="cartQty2" id="cartQty2" value="2">
                                                    </div>
                                                </td>
                                                <td>$50</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary-rgba mb-1 mr-1"><i class="feather icon-shopping-cart"></i></button>
                                                    <button type="button" class="btn btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>iPhone XR</td>
                                                <td>
                                                    <div class="form-group mb-0">
                                                        <input type="number" class="form-control cart-qty" name="cartQty3" id="cartQty3" value="10">
                                                    </div>
                                                </td>
                                                <td>$99</td>
                                                <td>$990</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary-rgba mb-1 mr-1"><i class="feather icon-shopping-cart"></i></button>
                                                    <button type="button" class="btn btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Wishlist End -->
                <!-- My Wallet Start -->
                <div class="tab-pane fade" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Wallet</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <img src="assets/images/ecommerce/wallet.svg" class="img-fluid" alt="wallet">
                                </div>
                            </div>
                            <div class="wallet-box">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h4 class="text-primary"><i class="feather icon-credit-card mr-2"></i>$90 <span class="font-14">Balance</span></h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-plus mr-2"></i>Add Money</button></p>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="card-title mb-0">Transactions</h5>
                                </div>
                                <div class="col-4">
                                    <ul class="list-inline-group text-right mb-0 pl-0">
                                        <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba px-2">Export</button></li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="wallet-transaction-box">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>     
                                                <th scope="col">Name</th>
                                                <th scope="col">Withdraw</th>
                                                <th scope="col">Deposit</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Comment</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>              
                                                <td>Google Corp.</td>
                                                <td>$1,50,000</td>
                                                <td>-</td>
                                                <td><span class="badge badge-success-inverse">Success</span></td>
                                                <td>Transaction ID : 9966338855</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>                
                                                <td>Facebook Inc.</td>
                                                <td>-</td>
                                                <td>$1,25,000</td>
                                                <td><span class="badge badge-danger-inverse">Reject</span></td>
                                                <td>Bank Transaction ID : 9988776655</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>                
                                                <td>Amazon</td>
                                                <td>$75,000</td>
                                                <td>-</td>
                                                <td><span class="badge badge-success-inverse">Success</span></td>
                                                <td>Book Return</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <!-- My Wallet End -->
                <!-- My Chat Start -->
                <div class="tab-pane fade" id="v-pills-chat" role="tabpanel" aria-labelledby="v-pills-chat-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="card-title mb-0">My Chat</h5>
                                </div>
                                <div class="col-4">
                                    <ul class="list-inline-group text-right mb-0 pl-0">
                                        <li class="list-inline-item mr-0 font-12">
                                            <div class="form-group mb-0 amount-spent-select">
                                                <select class="form-control" id="formControlSelect">
                                                  <option>Order #1</option>
                                                  <option>Order #2</option>
                                                  <option>Order #3</option>
                                                  <option>Order #4</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="chat-detail mb-0">
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
                    </div>
                </div>
                <!-- My Chat End -->
                <!-- My Notifications Start -->
                <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Notifications</h5>
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
                    </div>
                </div>
                <!-- My Notifications End -->
                <!-- My Profile Start -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Profile</h5>
                        </div>
                        <div class="card-body">
                            <div class="profilebox pt-4 text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-success-rgba font-18"><i class="feather icon-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/images/users/profile.svg" class="img-fluid" alt="profile">
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-trash"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Edit Profile Informations</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="usermobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="usermobile">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="userbirthdate">Date of Birth</label>
                                        <input type="date" class="form-control" id="userbirthdate">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="userconfirmedpassword">Confirmed Password</label>
                                        <input type="password" class="form-control" id="userconfirmedpassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="usermale" name="usergender" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="usermale">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="userfemale" name="usergender" class="custom-control-input">
                                        <label class="custom-control-label" for="userfemale">Female</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-rgba font-16"><i class="feather icon-save mr-2"></i>Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- My Profile End -->
                <!-- My Logout Start -->
                <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Logout</h5>                                       
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="logout-content text-center my-5">
                                        <img src="assets/images/ecommerce/logout.svg" class="img-fluid mb-5" alt="logout">
                                        <h2 class="text-success">Logout ?</h2>
                                        <p class="my-4">Are you sure to want to Log out? You will miss your instant checkout deal.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-danger font-16"><i class="feather icon-check mr-2"></i>Yes, I'm sure</button>
                                            <button type="button" class="btn btn-success-rgba font-16"><i class="feather icon-x mr-2"></i>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Logout End -->                            
            </div>                        
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->                  
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- eCommerce My Account Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
@endsection 