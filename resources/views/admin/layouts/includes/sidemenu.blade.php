<div class="dashboard-sidebar">
  <div class="dashboard-nav-trigger">
    <div class="dashboard-nav-trigger-btn">
      <i class="la la-bars"></i> Dashboard Navigation
    </div>
  </div>
  <div class="dashboard-nav-container">
    <div class="humburger-menu">
      <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
    </div><!-- end humburger-menu -->
    <div class="side-menu-wrap">
      <ul class="side-menu-ul">
        <li class="{{ request()->is('admin')  ? 'page-active' : '' }}"><a href="{{ url('admin') }}"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
        <li class="{{ request()->is('admin/partnership*')  ? 'page-active' : '' }}"><a href="{{ url('admin/partnership') }}"><i class="la la-user icon-element"></i> Partnerships</a></li>
        <li class="{{ request()->is('admin/full-training*')  ? 'page-active' : ''}}{{ request()->is('admin/short-training*')  ? 'page-active' : '' }}{{ request()->is('admin/view-training*')  ? 'page-active' : '' }}">
          <a href="#"><i class="la la-bookmark icon-element"></i> Training <span class="la la-caret-down btn-toggle"></span></a>
          <ul class="dropdown-menu-item">
            <li><a href="{{ url('admin/short-training') }}">Short Training</a></li>
            <li><a href="{{ url('admin/full-training') }}">Full Package Training</a></li>
          </ul>
        </li>
        <li class="{{ request()->is('admin/about-us*')  ? 'page-active' : '' }}{{ request()->is('admin/contact-us*')  ? 'page-active' : '' }}"{{ request()->is('admin/slider*')  ? 'page-active' : '' }}>
          <a href="#"><i class="la la-bookmark icon-element"></i> Website Settings <span class="la la-caret-down btn-toggle"></span></a>
          <ul class="dropdown-menu-item">
            <li><a href="{{ url('admin/about-us') }}">About Us</a></li>
            <li><a href="{{ url('admin/contact-us') }}">Contact Us</a></li>
            <li><a href="{{ url('admin/slider') }}">Sliders & Banners</a></li>
          </ul>
        </li>
        <li><a href="employer-transactions.html"><i class="la la-money-bill icon-element"></i>Payment History</a></li>
        {{-- <li><a href="employer-job-alert.html"><i class="la la-book icon-element"></i>E-Book</a></li> --}}
        {{-- <li><div class="section-block margin-top-30px mb-3"></div></li> --}}
        <li class="{{ request()->is('profile*')  ? 'page-active' : '' }}"><a href="{{ url('admin/profile') }}"><i class="la la-user icon-element"></i> View Profile</a></li>
        <li class="{{ request()->is('change-password*')  ? 'page-active' : '' }}"><a href="{{ url('admin/change-password') }}"><i class="la la-lock icon-element"></i> Change Password</a></li>
        <li><a href="{{ url('logout') }}"><i class="la la-power-off icon-element"></i> Logout</a></li>
      </ul>
    </div><!-- end side-menu-wrap -->
  </div>
</div><!-- end dashboard-sidebar -->