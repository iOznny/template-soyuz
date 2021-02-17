@section('title') 
Soyuz - CRM Lead Status
@endsection 
@extends('layouts.main')
@section('style')
<!-- Dragula css -->
<link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Lead Status</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">CRM</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lead Status</li>
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
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">New Lead</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-one">
                        <div class="card bg-primary-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Leong Nan</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton1">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Web Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$259</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-primary-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">David Nephew</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton2">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Digital Marketing</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$589</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Leads</button>
                </div>
            </div>
        </div> 
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Scheduled Appointment</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-two">
                        <div class="card bg-success-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Brad Lorem</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton3">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">App Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$315</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-success-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Shivay Om</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton4">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">API Integration</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$25</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-success-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Liva Longaria</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton5">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Web Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$259</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-success-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Enam Singh</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton6">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Page Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$450</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Appointment</button>
                </div>
            </div>
        </div> 
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sent Quote</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-three">
                        <div class="card bg-warning-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Jency Raghav</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton7">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Social Marketing</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$29</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Sri Narayan</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton8">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Web Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$879</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Sandy Cox</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton9">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Brochure Design</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$298</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    <button type="button" class="btn btn-warning-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Quote</button>
                </div>
            </div>
        </div> 
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Project in Pipeline</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-four">
                        <div class="card bg-secondary-rgba m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <h5 class="mb-0">Ramesh Ram</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link text-secondary p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton10">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <div class="kanban-comment">
                                            <span class="font-14">Web Development</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <h5 class="mb-0">$569</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                   
                    </div>
                    <button type="button" class="btn btn-secondary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Project</button>
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
<!-- Dragula js -->
<script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
<!-- Custom CRM Lead js -->   
<script src="{{ asset('assets/js/custom/custom-crm-lead.js') }}"></script>
@endsection 