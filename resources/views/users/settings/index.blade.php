@extends('users.layouts.app')
@section('user')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Profile</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Profile</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row mt-5">       
        <div class="col-lg-12">
            <div class="user-profile-action-wrap mb-5">
                <div class="user-profile-action mb-4 d-flex align-items-center">
                    <div class="user-pro-img">
                        <img src="{{ asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.Auth::user()->avatar) }}" alt="user-image" class="img-fluid radius-round border">
                    </div>
                    <div class="upload-btn-box">
                        <input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg" max="500000">
                        <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                        @error('avatar')
                        <span class="invalid-feedback mb-2" role="alert" style="display: block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div><!-- end user-profile-action -->
            </div><!-- end user-profile-action-wrap -->
        </div><!-- end col-lg-12 -->
        <div class="col-lg-12">
            <div class="edit-profile-wrap">
                <div class="user-form-action">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">My Profile</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Email</label>
                                            <div class="form-group">
                                                <span class="la la-mail-bulk form-icon"></span>
                                                <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}" readonly disabled>
                                            </div>
                                        </div><!-- end input-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Full Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{Auth::user()->name}}">
                                                @error('name')
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
                        <h3 class="widget-title pb-0">Contact Information</h3>
                        <div class="title-shape margin-top-10px"></div>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Phone number</label>
                                            <div class="form-group">
                                                <span class="la la-phone form-icon"></span>
                                                <input class="form-control @error('mobile') is-invalid @enderror" type="number" name="mobile" value="{{Auth::user()->mobile}}" placeholder="+1 246-345-0695">
                                                @error('mobile')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Complete Address</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="{{Auth::user()->address}}" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                @error('address')
                                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="btn-box">
                                                <button class="theme-btn border-0">Save</button>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end billing-content -->
                </div>
            </div><!-- end user-form-action -->
        </div><!-- end col-lg-12 -->
    </div>
</form>
@endsection