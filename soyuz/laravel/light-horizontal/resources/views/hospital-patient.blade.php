@section('title') 
Soyuz - Hospital Patient
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Patients</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Hospital</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patients</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add Patient</button>
                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Patient</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="patientid">ID</label>
                                            <input type="text" class="form-control" id="patientid">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patientname">Patient Name</label>
                                            <input type="text" class="form-control" id="patientname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="patientadd">Address</label>
                                            <input type="text" class="form-control" id="patintadd">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patientmonitoredby">Monitored By</label>
                                            <input type="text" class="form-control" id="patientmonitoredby">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="patienttreatment">Treatment</label>
                                            <input type="text" class="form-control" id="patienttreatment">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patientvisit">Visited On</label>
                                            <input type="date" class="form-control" id="patientvisit">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="patientnextvisit">Next Visit</label>
                                            <input type="date" class="form-control" id="patientnextvisit">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patientcontact">Contact No</label>
                                            <input type="text" class="form-control" id="patientcontact">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="patientstatus">Status</label>
                                            <select id="patientstatus" class="form-control">
                                                <option selected>Select Status...</option>
                                                <option value="admitted">Admitted</option>
                                                <option value="discharged">Discharged</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add Patient</button>
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">                                        
                            <tbody>
                                <tr>
                                    <td><h5 class="my-0 font-16">1</h5></td>
                                    <td><span class="action-icon badge badge-primary-inverse rounded-circle">JD</span></td>
                                    <td>
                                        <h5 class="mt-0 mb-1 font-16">John Doe</h5>
                                        <p class="mb-0 font-14">41, Manhattan, Street, NY</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Monitored By</p>
                                        <h5 class="mt-0 mb-0 font-16">Dr. Jacob Jason</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Treatment</p>
                                        <h5 class="mt-0 mb-0 font-16">Basic</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Visited On</p>
                                        <h5 class="mt-0 mb-0 font-16">01/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Next Visit</p>
                                        <h5 class="mt-0 mb-0 font-16">25/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Contact</p>
                                        <h5 class="mt-0 mb-0 font-16">+1 9876543210</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Status</p>
                                        <h5 class="mt-0 mb-0 font-16"><span class="badge badge-primary-inverse">Admitted</span></h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>                     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">                                        
                            <tbody>
                                <tr>
                                    <td><h5 class="my-0 font-16">2</h5></td>
                                    <td><span class="action-icon badge badge-success-inverse rounded-circle">JS</span></td>
                                    <td>
                                        <h5 class="mt-0 mb-1 font-16">Jeniffer Simpson</h5>
                                        <p class="mb-0 font-14">52, New Villa, Street, Boston</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Monitored By</p>
                                        <h5 class="mt-0 mb-0 font-16">Dr. Shriram Ramesh</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Treatment</p>
                                        <h5 class="mt-0 mb-0 font-16">Surgery</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Visited On</p>
                                        <h5 class="mt-0 mb-0 font-16">28/02/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Next Visit</p>
                                        <h5 class="mt-0 mb-0 font-16">11/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Contact</p>
                                        <h5 class="mt-0 mb-0 font-16">+1 9876543210</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Status</p>
                                        <h5 class="mt-0 mb-0 font-16"><span class="badge badge-success-inverse">Discharged</span></h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>                      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">                                        
                            <tbody>
                                <tr>
                                    <td><h5 class="my-0 font-16">3</h5></td>
                                    <td><span class="action-icon badge badge-warning-inverse rounded-circle">PC</span></td>
                                    <td>
                                        <h5 class="mt-0 mb-1 font-16">Princess Cherry</h5>
                                        <p class="mb-0 font-14">10, SM Park, Florida</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Monitored By</p>
                                        <h5 class="mt-0 mb-0 font-16">Dr. Naomi Wattson</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Treatment</p>
                                        <h5 class="mt-0 mb-0 font-16">OPD</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Visited On</p>
                                        <h5 class="mt-0 mb-0 font-16">25/02/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Next Visit</p>
                                        <h5 class="mt-0 mb-0 font-16">08/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Contact</p>
                                        <h5 class="mt-0 mb-0 font-16">+1 9876543210</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Status</p>
                                        <h5 class="mt-0 mb-0 font-16"><span class="badge badge-primary-inverse">Admitted</span></h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>                      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">                                        
                            <tbody>
                                <tr>
                                    <td><h5 class="my-0 font-16">4</h5></td>
                                    <td><span class="action-icon badge badge-danger-inverse rounded-circle">HP</span></td>
                                    <td>
                                        <h5 class="mt-0 mb-1 font-16">Harry Patel</h5>
                                        <p class="mb-0 font-14">88, Avenue Plaza, Texas</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Monitored By</p>
                                        <h5 class="mt-0 mb-0 font-16">Dr. Mark Wahlberg</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Treatment</p>
                                        <h5 class="mt-0 mb-0 font-16">Basic</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Visited On</p>
                                        <h5 class="mt-0 mb-0 font-16">22/02/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Next Visit</p>
                                        <h5 class="mt-0 mb-0 font-16">02/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Contact</p>
                                        <h5 class="mt-0 mb-0 font-16">+1 9876543210</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Status</p>
                                        <h5 class="mt-0 mb-0 font-16"><span class="badge badge-success-inverse">Discharged</span></h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>                      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">                                        
                            <tbody>
                                <tr>
                                    <td><h5 class="my-0 font-16">5</h5></td>
                                    <td><span class="action-icon badge badge-secondary-inverse rounded-circle">PT</span></td>
                                    <td>
                                        <h5 class="mt-0 mb-1 font-16">Paul Taylor</h5>
                                        <p class="mb-0 font-14">37, Main Bulding, Las Vegas</p>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Monitored By</p>
                                        <h5 class="mt-0 mb-0 font-16">Dr. Lauren Gotbil</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Treatment</p>
                                        <h5 class="mt-0 mb-0 font-16">Surgery</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Visited On</p>
                                        <h5 class="mt-0 mb-0 font-16">20/02/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Next Visit</p>
                                        <h5 class="mt-0 mb-0 font-16">05/03/2020</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Contact</p>
                                        <h5 class="mt-0 mb-0 font-16">+1 9876543210</h5>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-14">Status</p>
                                        <h5 class="mt-0 mb-0 font-16"><span class="badge badge-primary-inverse">Admitted</span></h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
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