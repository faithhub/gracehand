@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title line-height-45">Add New Chapter for {{$trainingInfo != null ? $trainingInfo[0]->title : null}}</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="index.html">Home</a></li>
        <li class="active__list-item">Dashboard</li>
        <li>Add Chapters</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<h4>You are adding chapter {{$chapterCount > 0 ? $chapterCount + 1 : 1}}</h4>

<form method="POST" action="{{ url('admin/add-chapter') }}" enctype="multipart/form-data">
  @csrf
  <div class="row mt-5">
    <div class="col-lg-12">
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
      <div class="edit-profile-wrap">
        <div class="user-form-action">
          <div class="billing-form-item">
            <div class="billing-title-wrap">
              <h3 class="widget-title pb-0">Chapter Data</h3>
              <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">
              <div class="contact-form-action">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Chapter Title</h3>
                      <label class="label-text">Chapter Title</label>
                      <div class="form-group">
                        <span class="la la-mail-bulk form-icon"></span>
                        <input class="form-control @error('chapterTitle') is-invalid @enderror" type="text" name="chapterTitle">
                        @error('chapterTitle')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div><!-- end input-box -->
                  </div><!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="input-box">
                      <h3 class="widget-title">Chapter Content</h3>
                      <label class="label-text">Description</label>
                      <div class="form-group">
                        <span class="la la-mail-bulk form-icon"></span>
                        <textarea class="form-control @error('title') is-invalid @enderror" name="content"></textarea>
                        @error('content')
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
          <button class="theme-btn border-0"><i class="la la-plus" title="Add Chapter"></i>Add Chapter</button>
        </div>
      </div>
    </div><!-- end col-lg-12 -->
  </div>
  <input class="form-control @error('trainingId') is-invalid @enderror" value="{{$trainingInfo[0]->id}}" type="text" name="trainingId">
  <input class="form-control @error('chapterNo') is-invalid @enderror" value="{{$chapterCount > 0 ? $chapterCount + 1 : 1}}" type="text" name="chapterNo">
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