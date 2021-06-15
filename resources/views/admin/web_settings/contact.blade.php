@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title line-height-45">Contact Us</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="index.html">Home</a></li>
        <li class="active__list-item">Dashboard</li>
        <li>Contact Us</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<form method="POST" action="{{ url('admin/contact-us') }}">
  @csrf
  <div class="row mt-5">
    <div class="col-lg-12">
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
      <div class="edit-profile-wrap">
        <div class="user-form-action">
          <div class="billing-form-item">
            <div class="billing-title-wrap">
              <h3 class="widget-title pb-0">Update Contact Us</h3>
              <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">
              <div class="contact-form-action">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Email</h3>
                      {{-- <label class="label-text">Training Title</label> --}}
                      <div class="form-group">
                        <span class="la la-envelope form-icon"></span>
                        <input class="form-control @error('contact_email') is-invalid @enderror" type="text" name="contact_email">
                        @error('contact_email')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Phone Number</h3>
                      {{-- <label class="label-text">Training Title</label> --}}
                      <div class="form-group">
                        <span class="la la-phone form-icon"></span>
                        <input class="form-control @error('contact_mobile') is-invalid @enderror" type="number" name="contact_mobile">
                        @error('contact_mobile')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Address</h3>
                      {{-- <label class="label-text">Training Title</label> --}}
                      <div class="form-group">
                        <span class="la la-map form-icon"></span>
                        <input class="form-control @error('contact_address') is-invalid @enderror" type="text" name="contact_address">
                        @error('contact_address')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Short Description</h3>
                      {{-- <label class="label-text">Description</label> --}}
                      <div class="form-group">
                        <span class="la la-map form-icon"></span>
                        <textarea class="form-control @error('contact_description') is-invalid @enderror" name="contact_description" id="editor"></textarea>
                        @error('contact_description')
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
          <button class="theme-btn border-0">Update</button>
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