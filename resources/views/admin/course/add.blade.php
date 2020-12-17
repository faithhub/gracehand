@extends('admin.layouts.app')
@section('admin')
    
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">Add New Course</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Add New Course</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<form method="POST" action="{{ url('admin/add-course') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mt-5">       
        <div class="col-lg-12">
        </div><!-- end col-lg-12 -->
        <div class="col-lg-12">
            <div class="edit-profile-wrap">
                <div class="user-form-action">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Course Information</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <div class="row">
                                    
            <div class="user-profile-action-wrap mb-2">
                <div class="user-profile-action mb-4 d-flex align-items-center">
                    <div class="user-pro-img">
                        <img src="{{ asset('images/avatar.jpg')}}" alt="user-image" class="img-fluid radius-round border">
                    </div>
                    <div class="upload-btn-box">
                        <input type="file" name="cover" accept="image/png, image/jpeg, image/jpg" max="500000">
                        <p>Course Cover Picture, Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                        @error('cover')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div><!-- end user-profile-action -->
            </div><!-- end user-profile-action-wrap -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Course Name</label>
                                            <div class="form-group">
                                                <span class="la la-mail-bulk form-icon"></span>
                                                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
                                                @error('title')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div><!-- end input-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Amount Offered For Course</label>
                                            <div class="form-group">
                                                <span class="form-icon">₦</span>
                                                <input class="form-control @error('amount') is-invalid @enderror" type="number" name="amount">
                                                @error('amount')
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
            <div class="user-form-action">
                <div class="billing-form-item">
                    <div class="billing-title-wrap">
                        <h3 class="widget-title pb-0">Author Information</h3>
                        <div class="title-shape margin-top-10px"></div>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content">
                        <div class="contact-form-action">
                                <div class="row">                                    
                                    <div class="user-profile-action-wrap mb-2">
                                        <div class="user-profile-action mb-4 d-flex align-items-center">
                                            <div class="user-pro-img">
                                                <img src="{{ asset('images/avatar.jpg')}}" alt="user-image" class="img-fluid radius-round border">
                                            </div>
                                            <div class="upload-btn-box">
                                                <input type="file" name="tutor_avatar" accept="image/png, image/jpeg, image/jpg" max="500000">
                                                <p>Tutor's Picture, Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                                                @error('tutor_avatar')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div><!-- end user-profile-action -->
                                    </div><!-- end user-profile-action-wrap -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Tutor's Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control @error('tutor_name') is-invalid @enderror" type="text" name="tutor_name" placeholder="John Smith">
                                                @error('tutor_name')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                        </div><!-- end contact-form-action -->
                    </div><!-- end billing-content -->
                </div>
            </div><!-- end user-form-action -->
        </div><!-- end col-lg-12 -->        
        <div class="col-lg-12">
            <div class="edit-profile-wrap">
                <div class="user-form-action">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Course Material</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">File Material</label>
                                            <div class="form-group">
                                                <span class="la la-file form-icon"></span>
                                                <input class="form-control" type="file" accept=".pdf,.doc,.docx" name="material_file">
                                                @error('material_file')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div><!-- end input-box -->                                        
                                        <div class="input-box">
                                            <label class="label-text">Video Material</label>
                                            <div class="form-group">
                                                <span class="la la-video form-icon"></span>
                                                <input class="form-control" type="file" accept="video/*" name="material_video">
                                                @error('material_video')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div><!-- end input-box -->
                                        
                                        <div class="input-box">
                                            <label class="label-text">Text Material</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="material" id="editor"></textarea>
                                                @error('material')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div><!-- end input-box -->
                                    </div><!-- end col-lg-6 -->
                                </div><!-- end row -->
                            </div><!-- end contact-form-action -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="btn-box">
                                        <button class="theme-btn border-0">Save</button>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end billing-content -->
                    </div>
                </div><!-- end user-form-action -->
            </div><!-- end edit-profile-wrap -->
        </div><!-- end col-lg-12 -->
    </div>
</form>

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