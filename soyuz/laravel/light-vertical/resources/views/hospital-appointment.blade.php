@section('title') 
Soyuz - Hospital Appointment
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Appointment</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Hospital</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add Appointments</button>
                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Appointment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="appointno">No</label>
                                            <input type="text" class="form-control" id="appointno">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="appointpatient">Patient Name</label>
                                            <input type="text" class="form-control" id="appointpatient">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="appointdoctor">Doctor Name</label>
                                            <input type="text" class="form-control" id="appointdoctor">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="appointdate">Date</label>
                                            <input type="date" class="form-control" id="appointdate">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="appointtime">Time</label>
                                            <input type="time" class="form-control" id="appointtime">
                                        </div>                                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="appointpatientid">Patient ID</label>
                                            <input type="text" class="form-control" id="appointpatientid">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="appointdoctorid">Doctor ID</label>
                                            <input type="text" class="form-control" id="appointdoctorid">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="appointtype">Type</label>
                                            <select id="appointtype" class="form-control">
                                                <option selected>Select Type...</option>
                                                <option value="new">New</option>
                                                <option value="old">Old</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="appointpaystatus">Payment Status</label>
                                            <select id="appointpaystatus" class="form-control">
                                                <option selected>Select Payment Status...</option>
                                                <option value="pending">Pending</option>
                                                <option value="success">Success</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Add Appointment</button>
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
                <div class="card-header">
                    <h5 class="card-title">Appointment List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Patient ID</th>
                                    <th>Doctor ID</th>
                                    <th>Payment Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Dr. Andrew Garfield</td>
                                    <td>01/03/2020</td>
                                    <td>5:30 PM</td>
                                    <td>New</td>
                                    <td>P_2020_01</td>
                                    <td>D_2020_01</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jeniffer Simpson</td>
                                    <td>Dr. Shriram Ramesh</td>
                                    <td>28/02/2020</td>
                                    <td>7:00 PM</td>
                                    <td>New</td>
                                    <td>P_2020_02</td>
                                    <td>D_2020_02</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Princess Cherry</td>
                                    <td>Dr. Naomi Wattson</td>
                                    <td>25/02/2020</td>
                                    <td>8:30 PM</td>
                                    <td>Old</td>
                                    <td>P_2020_03</td>
                                    <td>D_2020_03</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Harry Patel</td>
                                    <td>Dr. Mark Wahlberg</td>
                                    <td>21/02/2020</td>
                                    <td>11:30 AM</td>
                                    <td>New</td>
                                    <td>P_2020_04</td>
                                    <td>D_2020_04</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Paul Taylor</td>
                                    <td>Dr. Lauren Gotbil</td>
                                    <td>17/02/2020</td>
                                    <td>10:30 AM</td>
                                    <td>Old</td>
                                    <td>P_2020_05</td>
                                    <td>D_2020_05</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
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