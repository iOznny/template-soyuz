<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="{{url('/')}}" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                 </a>
                             </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                    <img src="assets/images/svg-icon/menu.svg" class="img-fluid menu-hamburger-collapse" alt="menu">
                                    <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                             </div>
                        </li>                              
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="logobar">
                                    <a href="{{url('/')}}" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addonSearch"><img src="assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                            </div>
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addonSearch">                                              
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="languagebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="live-icon">EN</span><span class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                        </div>
                                    </div>
                                </div>                                   
                            </li>
                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                        <img src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                        <span class="live-icon">3</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="notifybar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                        <span class="live-icon">2</span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                            <div class="notification-dropdown-title">
                                                <h4>Notifications</h4>                            
                                            </div>
                                            <ul class="list-unstyled">  
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-success-inverse">N</span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">New trends for you</h5>
                                                        <p><span class="timing">10 min ago</span></p>                            
                                                    </div>
                                                </li>                                                  
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-primary-inverse"><i class="feather icon-gift"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">John birthday today</h5>
                                                        <p><span class="timing">Today, 12:00 AM</span></p>                            
                                                    </div>
                                                </li>                                                    
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-warning-inverse">T</span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">This is start of your story</h5>
                                                        <p><span class="timing">Yesterday, 01:25 PM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-danger-inverse"><i class="feather icon-thumbs-up"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">Admin has 1 new like</h5>
                                                        <p><span class="timing">5 Feb 2020, 03:31 PM</span></p>                            
                                                    </div>
                                                </li>                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                      <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="live-icon">John Doe</span><span class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                            <div class="dropdown-item">
                                                <div class="profilename">
                                                  <h5>John Doe</h5>
                                                </div>
                                            </div>
                                            <div class="userbox">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/crm.svg" class="img-fluid" alt="user">My Profile</a>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                    </li>                                                        
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                   
                            </li>
                            <li class="list-inline-item menubar-toggle">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="assets/images/svg-icon/menu.svg" class="img-fluid menu-hamburger-collapse" alt="menu">
                                        <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                 </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div> 
            <!-- End row -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Topbar -->  
    <!-- Start Navigationbar -->
    <div class="navigationbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start Horizontal Nav -->
            <nav class="horizontal-nav mobile-navbar fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="horizontal-menu">
                    <li class="scroll dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/crm.svg" class="img-fluid" alt="CRM"><span>CRM</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/')}}"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                            <li><a href="{{url('/crm-projects')}}"><img src="assets/images/svg-icon/reports.svg" class="img-fluid" alt="projects">Projects</a></li>
                            <li><a href="{{url('/crm-lead-status')}}"><img src="assets/images/svg-icon/charts.svg" class="img-fluid" alt="leads">Lead Status</a></li>
                            <li><a href="{{url('/crm-clients')}}"><img src="assets/images/svg-icon/customers.svg" class="img-fluid" alt="clients">Clients</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/ecommerce.svg" class="img-fluid" alt="ecommerce"><span>eCommerce</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/dashboard-ecommerce')}}"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/frontend.svg" class="img-fluid" alt="frontend">Front End</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/ecommerce-shop')}}">Shop</a></li>
                                    <li><a href="{{url('/ecommerce-single-product')}}">Single Product</a></li>
                                    <li><a href="{{url('/ecommerce-cart')}}">Cart</a></li>
                                    <li><a href="{{url('/ecommerce-checkout')}}">Checkout</a></li>
                                    <li><a href="{{url('/ecommerce-thankyou')}}">Thank You</a></li>
                                    <li><a href="{{url('/ecommerce-myaccount')}}">My Account</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/backend.svg" class="img-fluid" alt="backend">Back End</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/ecommerce-product-list')}}">Product List</a></li>
                                    <li><a href="{{url('/ecommerce-product-detail')}}">Product Detail</a></li>
                                    <li><a href="{{url('/ecommerce-order-list')}}">Order List</a></li>
                                    <li><a href="{{url('/ecommerce-order-detail')}}">Order Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/hospital.svg" class="img-fluid" alt="hospital"><span>Hospital</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/dashboard-hospital')}}"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                            <li><a href="{{url('/hospital-appointment')}}"><img src="assets/images/svg-icon/calender.svg" class="img-fluid" alt="appointments">Appointments</a></li>
                            <li><a href="{{url('/hospital-doctor')}}"><img src="assets/images/svg-icon/doctor.svg" class="img-fluid" alt="doctors">Doctors</a></li>
                            <li><a href="{{url('/hospital-patient')}}"><img src="assets/images/svg-icon/customers.svg" class="img-fluid" alt="patients">Patients</a></li>
                        </ul>
                    </li>    
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/ui-kits.svg" class="img-fluid" alt="ui-kits"><span>UI Kits</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic">Basic UI</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/basic-ui-kits-alerts')}}">Alerts</a></li>
                                    <li><a href="{{url('/basic-ui-kits-badges')}}">Badges</a></li>
                                    <li><a href="{{url('/basic-ui-kits-buttons')}}">Buttons</a></li>
                                    <li><a href="{{url('/basic-ui-kits-cards')}}">Cards</a></li>
                                    <li><a href="{{url('/basic-ui-kits-carousel')}}">Carousel</a></li>
                                    <li><a href="{{url('/basic-ui-kits-collapse')}}">Collapse</a></li>
                                    <li><a href="{{url('/basic-ui-kits-dropdowns')}}">Dropdowns</a></li>
                                    <li><a href="{{url('/basic-ui-kits-embeds')}}">Embeds</a></li>
                                    <li><a href="{{url('/basic-ui-kits-grids')}}">Grids</a></li>
                                    <li><a href="{{url('/basic-ui-kits-images')}}">Images</a></li>
                                    <li><a href="{{url('/basic-ui-kits-media')}}">Media</a></li>
                                    <li><a href="{{url('/basic-ui-kits-modals')}}">Modals</a></li>
                                    <li><a href="{{url('/basic-ui-kits-paginations')}}">Paginations</a></li>
                                    <li><a href="{{url('/basic-ui-kits-popovers')}}">Popovers</a></li>
                                    <li><a href="{{url('/basic-ui-kits-progressbars')}}">Progress Bars</a></li>
                                    <li><a href="{{url('/basic-ui-kits-spinners')}}">Spinners</a></li>
                                    <li><a href="{{url('/basic-ui-kits-tabs')}}">Tabs</a></li>   
                                    <li><a href="{{url('/basic-ui-kits-toasts')}}">Toasts</a></li>     
                                    <li><a href="{{url('/basic-ui-kits-tooltips')}}">Tooltips</a></li>
                                    <li><a href="{{url('/basic-ui-kits-typography')}}">Typography</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced">Advanced UI</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/advanced-ui-kits-image-crop')}}">Image Crop</a></li>  
                                    <li><a href="{{url('/advanced-ui-kits-jquery-confirm')}}">jQuery Confirm</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-nestable')}}">Nestable</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-pnotify')}}">Pnotify</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-range-slider')}}">Range Slider</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-ratings')}}">Ratings</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-session-timeout')}}">Session Timeout</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-sweet-alerts')}}">Sweet Alerts</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-switchery')}}">Switchery</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-toolbar')}}">Toolbar</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-tour')}}">Tour</a></li>
                                    <li><a href="{{url('/advanced-ui-kits-treeview')}}">Tree View</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps">Apps</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/apps-calender')}}">Calender</a></li>
                                    <li><a href="{{url('/apps-chat')}}">Chat</a></li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Email</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/apps-email-inbox')}}">Inbox</a></li>
                                            <li><a href="{{url('/apps-email-open')}}">Open</a></li>
                                            <li><a href="{{url('/apps-email-compose')}}">Compose</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/apps-kanban-board')}}">Kanban Board</a></li>
                                    <li><a href="{{url('/apps-onboarding-screens')}}">Onboarding Screens</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/forms.svg" class="img-fluid" alt="forms">Forms</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/form-inputs')}}">Basic Elements</a></li>
                                    <li><a href="{{url('/form-groups')}}">Groups</a></li>
                                    <li><a href="{{url('/form-layouts')}}">Layouts</a></li>
                                    <li><a href="{{url('/form-colorpickers')}}">Color Pickers</a></li>
                                    <li><a href="{{url('/form-datepickers')}}">Date Pickers</a></li>
                                    <li><a href="{{url('/form-editors')}}">Editors</a></li>
                                    <li><a href="{{url('/form-file-uploads')}}">File Uploads</a></li>
                                    <li><a href="{{url('/form-input-mask')}}">Input Mask</a></li>
                                    <li><a href="{{url('/form-maxlength')}}">MaxLength</a></li>
                                    <li><a href="{{url('/form-selects')}}">Selects</a></li>
                                    <li><a href="{{url('/form-touchspin')}}">Touchspin</a></li>
                                    <li><a href="{{url('/form-validations')}}">Validations</a></li>
                                    <li><a href="{{url('/form-wizards')}}">Wizards</a></li>
                                    <li><a href="{{url('/form-xeditable')}}">X-editable</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/charts.svg" class="img-fluid" alt="charts">Charts</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/chart-apex')}}">Apex</a></li>
                                    <li><a href="{{url('/chart-c3')}}">C3</a></li>
                                    <li><a href="{{url('/chart-chartistjs')}}">Chartist</a></li> 
                                    <li><a href="{{url('/chart-chartjs')}}">Chartjs</a></li>
                                    <li><a href="{{url('/chart-flot')}}">Flot</a></li>
                                    <li><a href="{{url('/chart-knob')}}">Knob</a></li>
                                    <li><a href="{{url('/chart-morris')}}">Morris</a></li>
                                    <li><a href="{{url('/chart-piety')}}">Piety</a></li>
                                    <li><a href="{{url('/chart-sparkline')}}">Sparkline</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/icons.svg" class="img-fluid" alt="icons">Icons</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/icon-svg')}}">SVG</a></li>
                                    <li><a href="{{url('/icon-dripicons')}}">Dripicons</a></li>
                                    <li><a href="{{url('/icon-feather')}}">Feather</a></li>
                                    <li><a href="{{url('/icon-flag')}}">Flag</a></li>  
                                    <li><a href="{{url('/icon-font-awesome')}}">Font Awesome</a></li>
                                    <li><a href="{{url('/icon-ionicons')}}">Ion</a></li>
                                    <li><a href="{{url('/icon-line-awesome')}}">Line Awesome</a></li>
                                    <li><a href="{{url('/icon-material-design')}}">Material Design</a></li>
                                    <li><a href="{{url('/icon-simple-line')}}">Simple Line</a></li>
                                    <li><a href="{{url('/icon-socicon')}}">Socicon</a></li>
                                    <li><a href="{{url('/icon-themify')}}">Themify</a></li>
                                    <li><a href="{{url('/icon-typicons')}}">Typicons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables">Tables</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/table-bootstrap')}}">Bootstrap</a></li>
                                    <li><a href="{{url('/table-datatable')}}">Datatable</a></li>
                                    <li><a href="{{url('/table-editable')}}">Editable</a></li>
                                    <li><a href="{{url('/table-footable')}}">Foo</a></li>
                                    <li><a href="{{url('/table-rwdtable')}}">RWD</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/maps.svg" class="img-fluid" alt="maps">Maps</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/map-google')}}">Google</a></li>
                                    <li><a href="{{url('/map-vector')}}">Vector</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{url('/widgets')}}"><img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"><span>Widgets</span><span class="badge badge-success pull-right">New</span></a>                                        
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="pages"><span>Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/basic_page.svg" class="img-fluid" alt="basic_page">Basic</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/page-starter')}}">Starter</a></li>
                                    <li><a href="{{url('/page-blog')}}">Blog</a></li>
                                    <li><a href="{{url('/page-faq')}}">FAQ</a></li>
                                    <li><a href="{{url('/page-gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/page-invoice')}}">Invoice</a></li>
                                    <li><a href="{{url('/page-pricing')}}">Pricing</a></li>
                                    <li><a href="{{url('/page-timeline')}}">Timeline</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/svg-icon/authentication.svg" class="img-fluid" alt="authentication">Authentications</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/user-login')}}">Login</a></li>
                                    <li><a href="{{url('/user-register')}}">Register</a></li>
                                    <li><a href="{{url('/user-forgotpsw')}}">Forgot Password</a></li>
                                    <li><a href="{{url('/user-lock-screen')}}">Lock Screen</a></li>
                                    <li><a href="{{url('/error-comingsoon')}}">Coming Soon</a></li>  
                                    <li><a href="{{url('/error-maintenance')}}">Maintenance</a></li>
                                    <li><a href="{{url('/error-404')}}">Error 404</a></li>
                                    <li><a href="{{url('/error-500')}}">Error 500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                  </ul>
                </div>
            </nav>
            <!-- End Horizontal Nav -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Navigationbar --> 
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2020 Soyuz - All Rights Reserved.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>