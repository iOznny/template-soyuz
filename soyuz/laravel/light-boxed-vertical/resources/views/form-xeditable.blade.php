@section('title') 
Soyuz - Form Xeditable
@endsection 
@extends('layouts.main')
@section('style')
<!-- X-editable css -->
<link href="{{ asset('assets/plugins/bootstrap-xeditable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">X-editable</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">X-editable</li>
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
        <!-- End col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Simple text field</h5>
                </div>
                <div class="card-body">
                    <a href="#" id="xeditable-username">awesome</a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Empty text field, required</h5>
                </div>
                <div class="card-body">
                    <a href="#" id="xeditable-firstname" class="editable editable-click editable-empty"></a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Select, local array, custom display</h5>
                </div>
                <div class="card-body">
                    <a href="#" id="xeditable-sex" class="editable editable-click" style="color: #777777;">not selected</a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Select, error while loading</h5>
                </div>
                <div class="card-body">
                    <a href="#" id="xeditable-status" data-source="/status" class="editable editable-click">Active</a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Textarea, buttons below. Submit by ctrl+enter</h5>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xeditable-comments" data-type="textarea" data-pk="1">awesome comment!</a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">checklist</h5>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xeditable-checklist"></a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Combodate (date)</h5>
                </div>
                <div class="card-body">
                    <a href="#" id="xeditable-dob"></a>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Combodate (datetime)</h5>
                </div>
                <div class="card-body">                                
                    <a href="#" id="xeditable-event" class="editable editable-click editable-empty"></a>
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
<!-- X-editable js -->
<script src="{{ asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-xeditable.js') }}"></script>
@endsection 