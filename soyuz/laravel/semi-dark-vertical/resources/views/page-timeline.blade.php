@section('title') 
Soyuz - Timeline
@endsection 
@extends('layouts.main')
@section('style')
<!-- Vertical Timeline css -->
<link href="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Timeline</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Basic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
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
    <div class="card m-b-30">
    <section class="timeline timeline-js">
        <div class="timeline-container">
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div> 
                <div class="timeline-content content-js">
                    <h4>Company Founded</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">Jul 2019</span>
                </div> 
            </div>
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                <div class="timeline-content content-js">
                    <h4>Featured in Stock Exchange </h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">Mar 2019</span>
                </div>
            </div>
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                <div class="timeline-content content-js">
                    <h4>Entered Retail Sector</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">Jan 2019</span>
                </div>
            </div>
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                <div class="timeline-content content-js">
                    <h4>Achieve Milestone of 250 Stores worldwide</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">Aug 2018</span>
                </div>
            </div>
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                <div class="timeline-content content-js">
                    <h4>Operations began in Switzerland</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">May 2018</span>
                </div>
            </div>
            <div class="timeline-block block-js">
                <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                <div class="timeline-content content-js">
                    <h4>Milestone - Covered 24% of Electronics Market</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <span class="timeline-date">Feb 2018</span>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Timeline js -->
<script src="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.js') }}"></script>
@endsection 