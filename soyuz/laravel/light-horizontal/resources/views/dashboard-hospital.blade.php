@section('title') 
Soyuz - Hospital
@endsection 
@extends('layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar --> 
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Hospital</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hospital</li>
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
                <div class="card-body">                                
                    <h5 class="card-title mt-0 font-16">Appointments</h5>
                    <div class="row align-items-center mb-2">
                        <div class="col-8">
                            <h4 class="mb-0">9856</h4>
                        </div>
                        <div class="col-4 text-right">
                            <p class="mb-0 font-14 text-muted">+25%</p>
                        </div>
                    </div>
                    <div id="apex-line1-chart"></div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">                                
                    <h5 class="card-title mt-0 font-16">Consultations</h5>
                    <div class="row align-items-center mb-2">
                        <div class="col-8">
                            <h4 class="mb-0">58</h4>
                        </div>
                        <div class="col-4 text-right">
                            <p class="mb-0 font-14 text-muted">+33%</p>
                        </div>
                    </div>
                    <div id="apex-line2-chart"></div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">                                
                    <h5 class="card-title mt-0 font-16">Total Billing</h5>
                    <div class="row align-items-center mb-2">
                        <div class="col-8">
                            <h4 class="mb-0">$780</h4>
                        </div>
                        <div class="col-4 text-right">
                            <p class="mb-0 font-14 text-muted">+15%</p>
                        </div>
                    </div>
                    <div id="apex-line3-chart"></div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">                                
                    <h5 class="card-title mt-0 font-16">On Duty Doctors</h5>
                    <div class="row align-items-center mb-2">
                        <div class="col-8">
                            <h4 class="mb-0">23</h4>
                        </div>
                        <div class="col-4 text-right">
                            <p class="mb-0 font-14 text-muted">+52%</p>
                        </div>
                    </div>
                    <div id="apex-line4-chart"></div>
                </div>
            </div>            
        </div>
        <!-- End col -->                    
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Best Doctor</h5>
                </div>
                <div class="card-body">                                
                    <div class="media">
                        <img class="align-self-center mr-3 rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Dr. Sansa Smith</h5>
                            <p class="mb-0 font-14">MD (Surgeon)</p>
                        </div>
                    </div>
                    <h5 class="mt-5 mb-3 font-16">Departments</h5>
                    <div class="badge-list">
                        <span class="badge badge-primary-inverse font-14 py-2 px-3 mb-2 mr-1">Bariatric Balloon Placement</span>
                        <span class="badge badge-secondary-inverse font-14 py-2 px-3 mb-2 mr-1">Bloating</span>
                        <span class="badge badge-success-inverse font-14 py-2 px-3 mb-2 mr-1">Heartburn</span>
                        <span class="badge badge-danger-inverse font-14 py-2 px-3 mb-2 mr-1">Foreign Body Removal</span>
                        <span class="badge badge-warning-inverse font-14 py-2 px-3 mb-2 mr-1">Peptic Ulcer Diasease</span>
                        <span class="badge badge-info-inverse font-14 py-2 px-3 mb-2 mr-1">Biliary Stone Extraction</span>
                    </div>
                    <h5 class="mt-4 mb-3 font-16">Surgeries</h5>
                    <div class="surgery-list">
                        <p>Abdominal <span class="float-right">80%</span></p>
                        <div class="progress mb-4" style="height: 5px;">
                          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Apendix <span class="float-right">45%</span></p>
                        <div class="progress mb-4" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Stomach <span class="float-right">60%</span></p>
                        <div class="progress mb-4" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Kidney <span class="float-right">35%</span></p>
                        <div class="progress mb-4" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Liver <span class="float-right">25%</span></p>
                        <div class="progress mb-4" style="height: 5px;">
                          <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="card bg-primary-rgba mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="assets/images/general/doctor.svg" class="img-fluid " alt="doctor">
                                </div>
                                <div class="col-8 text-center">
                                    <h5 class="card-title text-primary mb-1">+1 9876543210</h5>
                                    <p class="mb-0 text-primary font-14">Emergency Contact</p>
                                </div>                                            
                            </div>
                        </div>
                    </div>
                </div>                            
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-9">
            <!-- Start row -->
            <div class="row"> 
                <!-- Start col -->
                <div class="col-lg-12 col-xl-8">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Revenue Stats</h5>
                                </div>
                                <div class="col-3">
                                     <button type="button" class="btn btn-outline-primary btn-sm float-right font-12">Export</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0 px-2">
                            <div id="apex-line-column-area-chart"></div>
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
                                    <h5 class="card-title mb-0">Patient by Age</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="patientAge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="patientAge">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="apex-pie-chart"></div>
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
                                    <h5 class="card-title mb-0">Stats by Department</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button" id="statsDepart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="statsDepart">
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
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Weight</th>
                                            <th>Treated By</th>
                                            <th>Disease</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>401, Western Building, Nevada</td>
                                            <td>24</td>
                                            <td>Male</td>
                                            <td>54kg</td>
                                            <td>Dr. Andrew Garfield</td>
                                            <td>Cougn</td>
                                            <td><span class="badge badge-primary-inverse">Waiting</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jeniffer Simpson</td>
                                            <td>59, New Westside, Boston</td>
                                            <td>28</td>
                                            <td>Female</td>
                                            <td>42kg</td>
                                            <td>Dr. Shriram Ramesh</td>
                                            <td>Fever</td>
                                            <td><span class="badge badge-success-inverse">Diagnosed</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Princess Cherry</td>
                                            <td>510, Central Business Park, London</td>
                                            <td>44</td>
                                            <td>Female</td>
                                            <td>75kg</td>
                                            <td>Dr. Naomi Wattson</td>
                                            <td>Head Pain</td>
                                            <td><span class="badge badge-warning-inverse">Discharged</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Harry Patel</td>
                                            <td>370, Leo Square, Sydney</td>
                                            <td>58</td>
                                            <td>Male</td>
                                            <td>63kg</td>
                                            <td>Dr. Mark Wahlberg</td>
                                            <td>Fracture</td>
                                            <td><span class="badge badge-danger-inverse">Admitted</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Paul Taylor</td>
                                            <td>225, Apple Plaza, Tokyo</td>
                                            <td>53</td>
                                            <td>Male</td>
                                            <td>55kg</td>
                                            <td>Dr. Lauren Gotbil</td>
                                            <td>Dialysis</td>
                                            <td><span class="badge badge-secondary-inverse">Operation</span></td>
                                        </tr>                                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col --> 
            </div>
            <!-- End col --> 
        </div>
        <!-- End col --> 
    </div>
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-hospital.js') }}"></script>
@endsection 