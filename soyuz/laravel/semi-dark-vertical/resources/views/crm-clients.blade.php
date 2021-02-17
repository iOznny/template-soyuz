@section('title') 
Soyuz - CRM Clients
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Clients</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">CRM</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <img src="assets/images/users/boy.svg" class="img-fluid mb-3" alt="user">
                        </div>
                        <div class="col-lg-9">
                            <h4>John Doe</h4>
                            <p>www.example.com</p>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                                <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Category :</th>
                                            <td class="p-1">Web Development</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Work Hrs :</th>
                                            <td class="p-1">58</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Country :</th>
                                            <td class="p-1">Italy</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Email ID :</th>
                                            <td class="p-1">demo@mail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <img src="assets/images/users/girl.svg" class="img-fluid mb-3" alt="user">
                        </div>
                        <div class="col-lg-9">
                            <h4>Mark Wood</h4>
                            <p>www.example.com</p>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                                <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Category :</th>
                                            <td class="p-1">Web Designing</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Work Hrs :</th>
                                            <td class="p-1">95</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Country :</th>
                                            <td class="p-1">USA</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Email ID :</th>
                                            <td class="p-1">demo@mail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <img src="assets/images/users/men.svg" class="img-fluid mb-3" alt="user">
                        </div>
                        <div class="col-lg-9">
                            <h4>Kate Perry</h4>
                            <p>www.example.com</p>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                                <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Category :</th>
                                            <td class="p-1">UI Designing</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Work Hrs :</th>
                                            <td class="p-1">110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Country :</th>
                                            <td class="p-1">Australia</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Email ID :</th>
                                            <td class="p-1">demo@mail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <img src="assets/images/users/women.svg" class="img-fluid mb-3" alt="user">
                        </div>
                        <div class="col-lg-9">
                            <h4>Slevenka Rajaswki</h4>
                            <p>www.example.com</p>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                                <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Category :</th>
                                            <td class="p-1">App Development</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Work Hrs :</th>
                                            <td class="p-1">225</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Country :</th>
                                            <td class="p-1">Germany</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Email ID :</th>
                                            <td class="p-1">demo@mail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
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