@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title line-height-45">Web Settings</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="index.html">Home</a></li>
        <li class="active__list-item">Dashboard</li>
        <li>Web Settings</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<form method="POST" action="{{ url('admin/web-settings') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" value="index" name="type">
  <div class="row mt-5">
    <div class="col-lg-12">
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
      <div class="edit-profile-wrap">
        <div class="user-form-action">
          <div class="billing-form-item">
            <div class="billing-title-wrap">
              <h3 class="widget-title pb-0">Update Web Settings</h3>
              <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">
              <div class="contact-form-action">
                <div class="row">

                  <div class="user-profile-action-wrap mb-2">
                    <div class="user-profile-action mb-4 d-flex align-items-center">
                      <div class="user-pro-img">
                        @if(config("settings")->website_logo)
                        <img src='data:image/;base64,{{ substr(config("settings")->website_logo, 5) }}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @else
                        <img src='{{ asset("uploads/logo/logo.png") }}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @endif
                      </div>
                      <div class="upload-btn-box">
                        <input type="file" name="website_logo" accept="image/png, image/jpeg, image/jpg" max="500000">
                        <p>Wesite Logo, Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                        @error('website_logo')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end user-profile-action -->
                  </div><!-- end user-profile-action-wrap -->
                  <div class="user-profile-action-wrap mb-2">
                    <div class="user-profile-action mb-4 d-flex align-items-center">
                      <div class="user-pro-img">
                        
                      @if(config("settings")->dashboard_logo)
                        <img src='data:image/;base64,{{ substr(config("settings")->dashboard_logo, 5)}}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @else
                        <img src='{{ asset("uploads/logo/logo_2.png") }}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @endif
                      </div>
                      <div class="upload-btn-box">
                        <input type="file" name="dashboard_logo" accept="image/png, image/jpeg, image/jpg" max="500000">
                        <p>Dashboard Logo, Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                        @error('dashboard_logo')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end user-profile-action -->
                  </div><!-- end user-profile-action-wrap -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Website Name</h3>
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control @error('website_name') is-invalid @enderror" value='{{config("settings")->website_name}}' type="text" name="website_name">
                        @error('website_name')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Facebook Link</h3>
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control @error('facebook') is-invalid @enderror" type="link" name="facebook">
                        @error('facebook')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Twitter Link</h3>
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control @error('twitter_link') is-invalid @enderror" type="text" name="twitter_link">
                        @error('twitter_link')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">LinkedIn Link</h3>
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control @error('lindein_link') is-invalid @enderror" type="link" name="lindein_link">
                        @error('lindein_link')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div><!-- end row -->
              </div><!-- end contact-form-action -->
            </div><!-- end billing-content -->
          </div>
        </div><!-- end user-form-action -->
      </div><!-- end edit-profile-wrap -->
    </div><!-- end col-lg-12 -->

    <div class="col-lg-12">
      <div class="form-group">
        <div class="btn-box">
          <button class="theme-btn border-0" type="submit">Update</button>
        </div>
      </div>
    </div><!-- end col-lg-12 -->
  </div>
</form>


{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script> --}}
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false,
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  });
</script>
@endsection