@extends('admin.layouts.app')
@section('admin')
    
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">User Details</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>User Details</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->


<div class="row mt-5">
    <div class="col-lg-12">        
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">{{$user['name']}} Details</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                    <div class="bread-details d-flex">
                        <div class="bread-img border">
                            <a href="#">
                                <img src="{{ asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.$user['avatar']   ) }}" alt="user-image" class="img-fluid radius-round border">
                            </a>
                        </div>
                        <div class="manage-candidate-content">
                            <h2 class="widget-title pb-2"><a href="#" class="color-text-2">{{$user['name']}}</a></h2>
                            <p class="mb-2 font-size-15">
                                <span class="mr-2"><i class="la la-envelope-o mr-1"></i>{{$user['email']}}</span>
                            </p><p class="mb-2 font-size-15">
                                <span class="mr-2"><i class="la la-phone mr-1"></i>{{$user['mobile'] ?? 'Not Uploaded Yet'}}</span>
                            </p><p class="mb-2 font-size-15">
                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>{{$user['address'] ?? 'Not Uploaded Yet'}}</span>
                            </p>
                            <p class="mb-2 font-size-15">
                                <span class="mr-2"><i class="la la-user mr-1"></i>Referred By: {{$user['mobile'] ?? 'Nobody'}}</span>
                            </p>
                            <p class="mb-2 font-size-15">
                                <span class="mr-2"><i class="la la-time-o mr-1"></i>Date Registered: {{date('D, M j, Y \a\t g:ia', strtotime($user['created_at']))}}</span>
                            </p>
                            {{-- <p class="font-size-15">
                                <span>Visit website <a href="#" class="color-text">bluetech</a></span>
                            </p> --}}
                        </div><!-- end manage-candidate-content -->
                    </div>
                    {{-- <div class="bread-action">
                        <ul class="info-list">
                            <li class="d-inline-block mb-0"><a href="#"><i class="la la-external-link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visit website"></i></a></li>
                            <li class="d-inline-block mb-0"><a href="#"><i class="la la-envelope-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Message"></i></a></li>
                            <li class="d-inline-block mb-0"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"></i></a></li>
                        </ul>
                    </div> --}}
                </div><!-- end manage-candidate-wrap -->
            </div><!-- end billing-content -->
        </div>      
    </div>
</div>

@endsection