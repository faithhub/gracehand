@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title line-height-45">About Us</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="index.html">Home</a></li>
        <li class="active__list-item">Dashboard</li>
        <li>About Us</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<form method="POST" action="{{ url('admin/web-settings') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" value="about" name="type">
  <div class="row mt-5">
    <div class="col-lg-12">
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
      <div class="edit-profile-wrap">
        <div class="user-form-action">
          <div class="billing-form-item">
            <div class="billing-title-wrap">
              <h3 class="widget-title pb-0">Update About Us</h3>
              <div class="title-shape margin-top-10px"></div>
            </div>
            <div class="billing-content">
              <div class="contact-form-action">
                <div class="row">
                  <div class="user-profile-action-wrap mb-2">
                    <div class="user-profile-action mb-4 d-flex align-items-center">
                      <div class="user-pro-img">
                      @if(config("settings")->ceo_picture)
                        <img src='data:image/;base64,{{ substr(config("settings")->ceo_picture, 5) }}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @else
                        <img src='{{ asset("images/avatar.jpg") }}' alt="GraceHand Logo" class="img-fluid radius-round border">
                        @endif
                      </div>
                      <div class="upload-btn-box">
                        <input type="file" name="about_avatar" accept="image/png, image/jpeg, image/jpg" max="500000">
                        <p>CEO Picture, Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                        @error('about_avatar')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">CEO Name</h3>
                      {{-- <label class="label-text">Training Title</label> --}}
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control @error('ceo_name') is-invalid @enderror" value='{{config("settings")->ceo_name}}' type="text" name="ceo_name">
                        @error('ceo_name')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">About US Description</h3>
                      {{-- <label class="label-text">Description</label> --}}
                      <div class="form-group">
                        <span class="la la-mail-bulk form-icon"></span>
                        <textarea class="form-control @error('about_content') is-invalid @enderror" name="about_content" id="editor">{{config("settings")->about_content}}</textarea>
                        @error('about_content')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
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