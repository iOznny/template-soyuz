@section('title') 
Soyuz - RWD Table
@endsection 
@extends('layouts.main')
@section('style')
<!-- RWD Table css -->
<link href="{{ asset('assets/plugins/rwd-table-patterns/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">RWD</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">RWD</li>
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
                    <h5 class="card-title">Default RWD Table</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Focus, Display and Display all data.</h6>
                    <div class="table-responsive rwd-table">
                        <table id="tech-companies-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th data-priority="1">Last Trade</th>
                                    <th data-priority="3">Trade Time</th>
                                    <th data-priority="1">Change</th>
                                    <th data-priority="3">Prev Close</th>
                                    <th data-priority="3">Open</th>
                                    <th data-priority="6">Bid</th>
                                    <th data-priority="6">Ask</th>
                                    <th data-priority="6">1y Target Est</th>
                                    <th data-priority="6">Lorem</th>
                                    <th data-priority="6">Ipsum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <td>597.91 x 300</td>
                                    <td>731.10</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <td>378.99 x 100</td>
                                    <td>505.94</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                    <td>191.55</td>
                                    <td>12:23PM</td>
                                    <td>3.16 (1.68%)</td>
                                    <td>188.39</td>
                                    <td>194.99</td>
                                    <td>191.52 x 300</td>
                                    <td>191.58 x 100</td>
                                    <td>240.32</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                    <td>31.15</td>
                                    <td>12:44PM</td>
                                    <td>1.41 (4.72%)</td>
                                    <td>29.74</td>
                                    <td>30.67</td>
                                    <td>31.14 x 6500</td>
                                    <td>31.15 x 3200</td>
                                    <td>36.11</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                    <td>25.50</td>
                                    <td>12:27PM</td>
                                    <td>0.66 (2.67%)</td>
                                    <td>24.84</td>
                                    <td>25.37</td>
                                    <td>25.50 x 71100</td>
                                    <td>25.51 x 17800</td>
                                    <td>31.50</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                    <td>18.65</td>
                                    <td>12:45PM</td>
                                    <td>0.97 (5.49%)</td>
                                    <td>17.68</td>
                                    <td>18.23</td>
                                    <td>18.65 x 10300</td>
                                    <td>18.66 x 24000</td>
                                    <td>21.12</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                    <td>15.81</td>
                                    <td>12:25PM</td>
                                    <td>0.11 (0.67%)</td>
                                    <td>15.70</td>
                                    <td>15.94</td>
                                    <td>15.79 x 6100</td>
                                    <td>15.80 x 17000</td>
                                    <td>18.16</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <td>597.91 x 300</td>
                                    <td>731.10</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <td>378.99 x 100</td>
                                    <td>505.94</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                    <td>191.55</td>
                                    <td>12:23PM</td>
                                    <td>3.16 (1.68%)</td>
                                    <td>188.39</td>
                                    <td>194.99</td>
                                    <td>191.52 x 300</td>
                                    <td>191.58 x 100</td>
                                    <td>240.32</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                    <td>31.15</td>
                                    <td>12:44PM</td>
                                    <td>1.41 (4.72%)</td>
                                    <td>29.74</td>
                                    <td>30.67</td>
                                    <td>31.14 x 6500</td>
                                    <td>31.15 x 3200</td>
                                    <td>36.11</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                    <td>25.50</td>
                                    <td>12:27PM</td>
                                    <td>0.66 (2.67%)</td>
                                    <td>24.84</td>
                                    <td>25.37</td>
                                    <td>25.50 x 71100</td>
                                    <td>25.51 x 17800</td>
                                    <td>31.50</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                    <td>18.65</td>
                                    <td>12:45PM</td>
                                    <td>0.97 (5.49%)</td>
                                    <td>17.68</td>
                                    <td>18.23</td>
                                    <td>18.65 x 10300</td>
                                    <td>18.66 x 24000</td>
                                    <td>21.12</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                    <td>15.81</td>
                                    <td>12:25PM</td>
                                    <td>0.11 (0.67%)</td>
                                    <td>15.70</td>
                                    <td>15.94</td>
                                    <td>15.79 x 6100</td>
                                    <td>15.80 x 17000</td>
                                    <td>18.16</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <td>597.91 x 300</td>
                                    <td>731.10</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <td>378.99 x 100</td>
                                    <td>505.94</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                    <td>191.55</td>
                                    <td>12:23PM</td>
                                    <td>3.16 (1.68%)</td>
                                    <td>188.39</td>
                                    <td>194.99</td>
                                    <td>191.52 x 300</td>
                                    <td>191.58 x 100</td>
                                    <td>240.32</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                    <td>31.15</td>
                                    <td>12:44PM</td>
                                    <td>1.41 (4.72%)</td>
                                    <td>29.74</td>
                                    <td>30.67</td>
                                    <td>31.14 x 6500</td>
                                    <td>31.15 x 3200</td>
                                    <td>36.11</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                    <td>25.50</td>
                                    <td>12:27PM</td>
                                    <td>0.66 (2.67%)</td>
                                    <td>24.84</td>
                                    <td>25.37</td>
                                    <td>25.50 x 71100</td>
                                    <td>25.51 x 17800</td>
                                    <td>31.50</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                    <td>18.65</td>
                                    <td>12:45PM</td>
                                    <td>0.97 (5.49%)</td>
                                    <td>17.68</td>
                                    <td>18.23</td>
                                    <td>18.65 x 10300</td>
                                    <td>18.66 x 24000</td>
                                    <td>21.12</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                    <td>15.81</td>
                                    <td>12:25PM</td>
                                    <td>0.11 (0.67%)</td>
                                    <td>15.70</td>
                                    <td>15.94</td>
                                    <td>15.79 x 6100</td>
                                    <td>15.80 x 17000</td>
                                    <td>18.16</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <td>597.91 x 300</td>
                                    <td>731.10</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <td>378.99 x 100</td>
                                    <td>505.94</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                    <td>191.55</td>
                                    <td>12:23PM</td>
                                    <td>3.16 (1.68%)</td>
                                    <td>188.39</td>
                                    <td>194.99</td>
                                    <td>191.52 x 300</td>
                                    <td>191.58 x 100</td>
                                    <td>240.32</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                    <td>31.15</td>
                                    <td>12:44PM</td>
                                    <td>1.41 (4.72%)</td>
                                    <td>29.74</td>
                                    <td>30.67</td>
                                    <td>31.14 x 6500</td>
                                    <td>31.15 x 3200</td>
                                    <td>36.11</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                    <td>25.50</td>
                                    <td>12:27PM</td>
                                    <td>0.66 (2.67%)</td>
                                    <td>24.84</td>
                                    <td>25.37</td>
                                    <td>25.50 x 71100</td>
                                    <td>25.51 x 17800</td>
                                    <td>31.50</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                    <td>18.65</td>
                                    <td>12:45PM</td>
                                    <td>0.97 (5.49%)</td>
                                    <td>17.68</td>
                                    <td>18.23</td>
                                    <td>18.65 x 10300</td>
                                    <td>18.66 x 24000</td>
                                    <td>21.12</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                    <td>15.81</td>
                                    <td>12:25PM</td>
                                    <td>0.11 (0.67%)</td>
                                    <td>15.70</td>
                                    <td>15.94</td>
                                    <td>15.79 x 6100</td>
                                    <td>15.80 x 17000</td>
                                    <td>18.16</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <td>597.91 x 300</td>
                                    <td>731.10</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <td>378.99 x 100</td>
                                    <td>505.94</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                    <td>191.55</td>
                                    <td>12:23PM</td>
                                    <td>3.16 (1.68%)</td>
                                    <td>188.39</td>
                                    <td>194.99</td>
                                    <td>191.52 x 300</td>
                                    <td>191.58 x 100</td>
                                    <td>240.32</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                    <td>31.15</td>
                                    <td>12:44PM</td>
                                    <td>1.41 (4.72%)</td>
                                    <td>29.74</td>
                                    <td>30.67</td>
                                    <td>31.14 x 6500</td>
                                    <td>31.15 x 3200</td>
                                    <td>36.11</td>
                                    <td colspan="2">Spanning cell</td>
                                </tr>
                                <tr>
                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                    <td>25.50</td>
                                    <td>12:27PM</td>
                                    <td>0.66 (2.67%)</td>
                                    <td>24.84</td>
                                    <td>25.37</td>
                                    <td>25.50 x 71100</td>
                                    <td>25.51 x 17800</td>
                                    <td>31.50</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                    <td>18.65</td>
                                    <td>12:45PM</td>
                                    <td>0.97 (5.49%)</td>
                                    <td>17.68</td>
                                    <td>18.23</td>
                                    <td>18.65 x 10300</td>
                                    <td>18.66 x 24000</td>
                                    <td>21.12</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
                                </tr>
                                <tr>
                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                    <td>15.81</td>
                                    <td>12:25PM</td>
                                    <td>0.11 (0.67%)</td>
                                    <td>15.70</td>
                                    <td>15.94</td>
                                    <td>15.79 x 6100</td>
                                    <td>15.80 x 17000</td>
                                    <td>18.16</td>
                                    <td>Non-spanning</td>
                                    <td>Non-spanning</td>
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
<!-- RWD Table js -->
<script src="{{ asset('assets/plugins/rwd-table-patterns/rwd-table.min.js') }}"></script>     
<script src="{{ asset('assets/js/custom/custom-table-rwd.js') }}"></script>
@endsection 