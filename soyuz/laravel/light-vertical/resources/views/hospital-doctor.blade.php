@section('title') 
Soyuz - Hospital Doctor
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Doctors</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Hospital</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add Doctor</button>
                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Doctor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="doctorid">ID</label>
                                            <input type="text" class="form-control" id="doctorid">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="doctorname">Doctor Name</label>
                                            <input type="text" class="form-control" id="doctorname">
                                        </div> 
                                        <div class="form-group col-md-6">
                                            <label for="doctordegree">Degree</label>
                                            <input type="text" class="form-control" id="doctordegree">
                                        </div>                                                                                                 
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="doctorstudy">Studied at</label>
                                            <input type="text" class="form-control" id="doctorstudy">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="doctorspeciality">Speciality</label>
                                            <input type="text" class="form-control" id="doctorspeciality">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="doctorpic">Picture</label>
                                            <input type="file" class="form-control" id="doctorpic">
                                        </div>
                                    </div>                                                
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add Doctor</button>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/boy.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. John Doe</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Cardiac), Heart Surgeon</p>
                        <p>University of South Carolina</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-primary-inverse">CARDIOLOGIST</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/girl.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Rodney Macneal</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Ortho), Knee Specialist</p>
                        <p>University of Colorado</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-success-inverse">ORTHOPEDICS</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/women.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Meghan Abo</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Ped.), NICU-PICU</p>
                        <p>South Medical Institute</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-warning-inverse">PEDIATRICIAN</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/men.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Kristie Aamdot</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Gynec), IVF Specialist</p>
                        <p>University of Simmer, Sola</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-danger-inverse">GYNECOLOGIST</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->  

        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/boy.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Neil Aaron</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (CardioVasl), Vacular Surgeon</p>
                        <p>NY Medical Science Institute</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-primary-inverse">CARDIOVASCULAR</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/girl.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. John Aase</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Oto), Eye Surgeon</p>
                        <p>University of Nevada</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-success-inverse">OTOLARYNGOLOGIST</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/women.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Naomi Wattson</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Cosmet), Skin Care Specialist</p>
                        <p>University of Memphis</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-warning-inverse">SKIN SPECIALIST</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card doctor-box m-b-30">
                <div class="card-body text-center">
                    <img src="assets/images/users/men.svg" class="img-fluid" alt="doctor">
                    <h5>Dr. Mark Wahlberg</h5>
                    <div class="doctor-detail">
                        <p class="mb-1">M.D (Gastro), Stomach Specialist</p>
                        <p>University of Florida</p>
                    </div>                                
                    <p class="mb-0"><span class="badge badge-danger-inverse">GASTROLOGIST</span></p>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <h4><i class="feather icon-message-square text-muted"></i></h4>
                            <p class="my-2">Send Message</p>
                        </div>
                        <div class="col-6">
                            <h4><i class="feather icon-user text-muted"></i></h4>
                            <p class="my-2">View Profile</p>
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