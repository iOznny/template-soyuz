@section('title') 
Soyuz - Cart
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Cart</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item"><a href="#">Front End</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Cart</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <div class="cart-container">
                                <div class="cart-head">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Action</th>                                               
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
                                                    <td><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                    <td>Electronic Kettle</td>
                                                    <td>
                                                        <div class="form-group mb-0">
                                                            <input type="number" class="form-control cart-qty" name="cartQty1" id="cartQty1" value="1">
                                                        </div>
                                                    </td>
                                                    <td>$75</td>
                                                    <td class="text-right">$75</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                                    <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                    <td>Fitness Band</td>
                                                    <td>
                                                        <div class="form-group mb-0">
                                                            <input type="number" class="form-control cart-qty" name="cartQty2" id="cartQty2" value="2">
                                                        </div>
                                                    </td>
                                                    <td>$50</td>
                                                    <td class="text-right">$100</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                                    <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                    <td>iPhone XR</td>
                                                    <td>
                                                        <div class="form-group mb-0">
                                                            <input type="number" class="form-control cart-qty" name="cartQty3" id="cartQty3" value="10">
                                                        </div>
                                                    </td>
                                                    <td>$99</td>
                                                    <td class="text-right">$990</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="cart-body">
                                    <div class="row">
                                        <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                            <div class="order-note">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="search" class="form-control" placeholder="Coupon Code" aria-label="Search" aria-describedby="button-addonTags">
                                                            <div class="input-group-append">
                                                                <button class="input-group-text" type="submit" id="button-addonTags">Apply</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="specialNotes">Special Note for this order:</label>
                                                        <textarea class="form-control" name="specialNotes" id="specialNotes" rows="3" placeholder="Message here"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                            <div class="order-total table-responsive ">
                                                <table class="table table-borderless text-right">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td>$1165.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping :</td>
                                                            <td>$35.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tax(18%) :</td>
                                                            <td>$210.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-w-7 font-18"><h4>Amount :</h4></td>
                                                            <td class="f-w-7 font-18"><h4>$1410.00</h4></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-footer text-right">
                                    <button type="button" class="btn btn-primary-rgba my-1"><i class="feather icon-save mr-2"></i>Update Cart</button>
                                    <a href="page-checkout.html" class="btn btn-success-rgba my-1">Proceed to Checkout<i class="feather icon-arrow-right ml-2"></i></a>
                                </div>
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
<!-- End Contentbar -->
@endsection 
@section('script')

@endsection 