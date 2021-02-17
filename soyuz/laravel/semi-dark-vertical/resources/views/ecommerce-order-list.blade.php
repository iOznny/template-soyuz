@section('title') 
Soyuz - Order List
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Order List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item"><a href="#">Back End</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
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
                            <h5 class="card-title mb-0">All Orders</h5>
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
                                    <th>Invoice</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Warehouse</th>
                                    <th>Status</th>                                                
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#o510</th>
                                    <td>001</td>
                                    <td>John Doe</td>
                                    <td>15/02/2020</td>
                                    <td>$1,25,000</td>
                                    <td>Boston</td>
                                    <td><span class="badge badge-primary-inverse">Processing</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o511</th>
                                    <td>002</td>
                                    <td>Mark Wood</td>
                                    <td>09/02/2020</td>
                                    <td>$70,000</td>
                                    <td>New York</td>
                                    <td><span class="badge badge-secondary-inverse">Shipped</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o512</th>
                                    <td>003</td>
                                    <td>Carey Smith</td>
                                    <td>05/02/2020</td>
                                    <td>$63,000</td>
                                    <td>Memphis</td>
                                    <td><span class="badge badge-success-inverse">Completed</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o513</th>
                                    <td>004</td>
                                    <td>David Mathews</td>
                                    <td>28/01/2020</td>
                                    <td>$1,45,000</td>
                                    <td>Texas</td>
                                    <td><span class="badge badge-warning-inverse">Refunded</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o514</th>
                                    <td>005</td>
                                    <td>Kate Perry</td>
                                    <td>19/01/2020</td>
                                    <td>$2,35,000</td>
                                    <td>Pennsylvania</td>
                                    <td><span class="badge badge-danger-inverse">Cancelled</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="#" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="#" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o515</th>
                                    <td>006</td>
                                    <td>Angelina Miller</td>
                                    <td>11/01/2020</td>
                                    <td>$1,80,000</td>
                                    <td>Florida</td>
                                    <td><span class="badge badge-info-inverse">Delivered</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="#" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
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