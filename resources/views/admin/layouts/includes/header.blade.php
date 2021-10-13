

	
	<!-- Menu -->
	
<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
							<a href="index.html"><img src="{{ asset('uploads/logo/trans_logo_2.png') }}" alt="logo" style="width: 30px; height: auto;"><b style="font-size: 30px; color:#26ae61" class="m-2 mt-5">GraceHands</b></a>
                        </div><!-- end logo -->
                        <div class="logo-right-content">
                            <div class="header-action-button d-flex align-items-center">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                                <div class="user-action-wrap">
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image dot-status online-status">
                                                            <a href="#">
                                                                <img src="{{asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="#">{{Auth::user()->name}}</a>
                                                            </h4>
                                                            <span class="email">{{Auth::user()->email}}</span>
                                                        </div>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="{{ url('user/profile') }}" class="d-block">
                                                                    <i class="la la-user"></i> Profile
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">                                                                
                                                                <a href="{{ url('user/change-password') }}" class="d-block">
                                                                    <i class="la la-lock"></i> Change Password
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="{{ url('admin/full-training') }}" class="d-block">
                                                                    <i class="la la-bookmark"></i> Full Package Training
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="{{ url('admin/ongoing-training') }}" class="d-block">
                                                                    <i class="la la-book"></i> Short Training
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="{{ route('logout') }}" class="d-block">
                                                                    <i class="la la-power-off"></i> Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end mess__body -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
    </div><!-- end side-nav-container -->
    <div class="user-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="user-panel-nav">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification-home" role="tab" aria-controls="notification-home" aria-selected="true">
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message-home" role="tab" aria-controls="message-home" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab" aria-controls="account-home" aria-selected="false">Account</a>
                </li>
            </ul>
        </div>
        <div class="user-panel-content">
            <div class="tab-content" id="tab-tabContent">
                <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="mess-dropdown">
                            <div class="mess__title d-flex align-items-center">
                                <div class="image dot-status online-status">
                                    <a href="#">
                                        <img src="{{asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">
                                        <a href="#">{{Auth::user()->name}}</a>
                                    </h4>
                                    <span class="email">{{Auth::user()->email}}</span>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body">
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-user"></i> Account
                                </a>
                                <a href="employer-dashboard-bookmark.html" class="d-block">
                                    <i class="la la-bookmark"></i> Bookmarks
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-plus"></i> Post a Job
                                </a>
                                <a href="{{ url('change-password') }}" class="d-block">
                                    <i class="la la-question"></i> Change Password
                                </a>
                                <a href="{{ url('profile') }}" class="d-block">
                                    <i class="la la-gear"></i> Profile
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="{{ route('logout') }}" class="d-block">
                                    <i class="la la-power-off"></i> Logout
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-nav-container -->
</header>