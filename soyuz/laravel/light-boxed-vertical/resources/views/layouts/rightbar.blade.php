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
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="assets/images/svg-icon/menu.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
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
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                   <img src="assets/images/svg-icon/menu.svg" class="img-fluid menu-hamburger-collapse" alt="menu">
                                   <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                 </a>
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
                    </ul>
                </div>
            </div>
            <!-- End col -->
        </div> 
        <!-- End row -->
    </div>
    <!-- End Topbar -->    
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2020 Soyuz - All Rights Reserved.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>