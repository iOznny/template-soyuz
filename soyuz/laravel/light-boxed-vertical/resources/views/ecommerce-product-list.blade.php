@section('title') 
Soyuz - Product List
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Product List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item"><a href="#">Back End</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product List</li>
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
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">All Products</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelect">
                                          <option>All</option>
                                          <option>Last Week</option>
                                          <option>Last Month</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Categories</th>
                                    <th>Tags</th>
                                    <th>Orders</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#1</th>
                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Electronic Kettle</td>
                                    <td class="text-success">In Stock</td>
                                    <td>$75</td>
                                    <td>Appliances</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">cook</span><span class="badge badge-secondary-inverse">food</span></td>
                                    <td>101</td>
                                    <td>15/02/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#2</th>
                                    <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Fitness Band</td>
                                    <td class="text-success">In Stock</td>
                                    <td>$50</td>
                                    <td>Electronics</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">New</span><span class="badge badge-secondary-inverse">Popular</span></td>
                                    <td>150</td>
                                    <td>09/02/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#3</th>
                                    <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>iPhone XR</td>
                                    <td class="text-danger">Out of Stock</td>
                                    <td>$99</td>
                                    <td>Electronics</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">Pupular</span><span class="badge badge-secondary-inverse">Gaming</span></td>
                                    <td>210</td>
                                    <td>02/02/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#4</th>
                                    <td><img src="assets/images/ecommerce/product_04.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Office Stapler</td>
                                    <td class="text-success">In Stock</td>
                                    <td>$79</td>
                                    <td>Stationary</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">Trending</span><span class="badge badge-secondary-inverse">Latest</span></td>
                                    <td>325</td>
                                    <td>25/01/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#5</th>
                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Shooting Camera</td>
                                    <td class="text-success">In Stock</td>
                                    <td>$29</td>
                                    <td>Electronics</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">Popular</span><span class="badge badge-secondary-inverse">New</span></td>
                                    <td>482</td>
                                    <td>18/01/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#6</th>
                                    <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Wireless buds</td>
                                    <td class="text-danger">Out of Stock</td>
                                    <td>$89</td>
                                    <td>Audio</td>
                                    <td><span class="badge badge-secondary-inverse mr-2">Featured</span><span class="badge badge-secondary-inverse">Trending</span></td>
                                    <td>115</td>
                                    <td>08/01/2020</td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

@endsection 