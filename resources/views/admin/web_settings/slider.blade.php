@extends('admin.layouts.app')
@section('admin')
    
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">Sliders</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Sliders</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">All Sliders</h3>
                <div class="title-shape margin-top-10px"></div>
                <div class="text-right">
                  <a href="{{ url('admin/slider-create') }}" class="btn btn-success">Create Slider</a>
                </div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                    @if ($sliders->count() > 0)
                        <div class="table-responsive">
                            <table class="table" id="myTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th width="40%">Sliders</th>
                                        <th>Referred Count</th>
                                        <th>Date Registered</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($sliders as $slider)                            
                                    <tr>
                                        <td>{{$sn++}}</td>
                                        <td width="40%">                                        
                                            <div class="bread-details d-flex">
                                                <div class="bread-img flex-shrink-0">
                                                    <a href="{{ url('admin/view-partnership', $slider->id) }}" class="d-block">
                                                        <img src="{{ asset('images/avatar.jpg') ??  asset('uploads/profile_pictures/'.Auth::user()->avatar)}}" alt="{{$slider->first_name  }}">
                                                    </a>
                                                </div>
                                                <div class="manage-candidate-content">
                                                    <h2 class="widget-title pb-2"><a href="{{ url('admin/view-partnership', $slider->id) }}" class="color-text-2"><i class="la la-user mr-1"></i>{{$slider->fullName}}</a></h2>
                                                    <p class="font-size-15">
                                                        <span class="mr-2"><i class="la la-envelope-o mr-1"></i><a href="mailto:{{$slider->email}}" class="color-text-3">{{$slider->email}}</a></span><br>
                                                        <span class="mr-2"><i class="la la-phone mr-1"></i>{{$slider->mobile ?? 'Not Uploaded Yet'}}</span>
                                                    </p>
                                                    <p class="mt-1 font-size-15">
                                                        <span class="mr-2"><i class="la la-map-marker mr-1"></i>{{$slider->address ?? 'Not Uploaded Yet'}}</span>
                                                    </p>
                                                    
                                                    {{-- <p class="mt-1 font-size-15">
                                                        <span class="mr-2"><i class="la la-user mr-1"></i></span>
                                                    </p> --}}
                                                </div><!-- end manage-candidate-content -->
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>{{ date('D, M j, Y \a\t g:ia', strtotime($slider->created_at))}}</td>
                                        <td class="text-center">
                                            <div class="manage-candidate-wrap">
                                                <div class="bread-action pt-0">
                                                    <ul class="info-list">
                                                        <li class="d-inline-block"><a href="{{ url('admin/view-partnership', $slider->id) }}" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                        {{-- <li class="d-inline-block"><a href="{{ url('admin/edit-user', $slider->id) }}"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li> --}}
                                                        <li class="d-inline-block"><a href="#"><i data-toggle="modal" data-target="#delete{{$slider->id}}" class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal Delete -->
                                <div class="modal fade" id="delete{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body mt-2 mb-2 text-center">
                                            <h2>Are you sure you want to delete?</h2>
                                        <form method="POST" action="{{ url('admin/delete-partnership') }}">
                                            @csrf                                                        
                                            <input type="hidden" name="id" value="{{ $slider->id }}">
                                            <button type="submit" class="btn btn-success m-2">Yes</button> 
                                            <button type="button" class="btn btn-dark m-2" data-dismiss="modal" aria-label="Close">No</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center mb-4 mt-3">
                            <h2 class="text-black" style="color: black; font-family: Georgia, 'Times New Roman', Times, serif">No Slider Created yet, Check back later</h2>
                        </div>
                    @endif
                </div>
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

@endsection