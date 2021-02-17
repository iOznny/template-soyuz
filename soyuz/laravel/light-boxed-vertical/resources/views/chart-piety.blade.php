@section('title') 
Soyuz - Piety Chart
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Piety</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Piety</li>
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
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-line">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="piety-line">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="piety-line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Updating Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-bar">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="piety-bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="piety-bar">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-pie">1/5</span>
                    <span class="piety-pie">226/360</span>
                    <span class="piety-pie">0.52/1.561</span>
                    <span class="piety-pie">1,4</span>
                    <span class="piety-pie">226,134</span>
                    <span class="piety-pie">0.52,1.041</span>
                    <span class="piety-pie">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Donut Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-donut">1/5</span>
                    <span class="piety-donut">226/360</span>
                    <span class="piety-donut">0.52/1.561</span>
                    <span class="piety-donut">1,4</span>
                    <span class="piety-donut">226,134</span>
                    <span class="piety-donut">0.52,1.041</span>
                    <span class="piety-donut">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Data Attributes Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <p class="piety-data-attributes mb-0">
                      <span data-peity='{ "fill": ["#506fe4", "#f2f3f7"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                      <span data-peity='{ "fill": ["#43d187", "#f2f3f7"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                      <span data-peity='{ "fill": ["#f9616d", "#f2f3f7"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                      <span data-peity='{ "fill": ["#f7bb4d", "#f2f3f7"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                      <span data-peity='{ "fill": ["#3d9bfb", "#f2f3f7"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                      <span data-peity='{ "fill": ["#96a3b6", "#f2f3f7"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                      <span data-peity='{ "fill": ["#141d46", "#f2f3f7"], "innerRadius": 15, "radius": 16 }'>7/7</span>
                    </p>
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
<!-- Piety Chart js -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('assets/js/custom/custom-chart-piety.js') }}"></script>
@endsection 