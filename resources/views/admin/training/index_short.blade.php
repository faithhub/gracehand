@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title line-height-45">{{$page_title}}</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="index.html">Home</a></li>
        <li class="active__list-item">Dashboard</li>
        <li class="active__list-item">Training</li>
        <li>{{$page_title}}</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
  <div class="col-lg-12">
    <div class="billing-form-item">
      <div class="billing-title-wrap">
        <h3 class="widget-title pb-0">All {{$page_title}}(s)</h3>
        <div class="title-shape margin-top-10px"></div>
        <div class="text-right">
          <a href="{{ url('admin/add-short-training') }}" class="btn btn-success">Create New Training</a>
        </div>
      </div><!-- billing-title-wrap -->
      <div class="billing-content pb-0">
        @if ($trainings->count() > 0)
        <div class="table-responsive">
          <table class="table" id="myTable" width="100%">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Amount</th>
                <th>Applied Users</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($trainings as $training)
              <tr>
                <td>{{$sn++}}</td>
                <td>
                  <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h4 class="widget-title pb-2"><a href="{{ url('admin/view-training', $training->id) }}" class="color-text-2">{{$training->title}}</a></h4>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>
                  <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h3 class="widget-title pb-2 text-success"><a class="text-success">₦{{$training->amount}}</a></h3>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>{{$training->applied_users}} User (s)
                  {{-- <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h4 class="widget-title pb-2"><a class="color-text-2"></a></h4>
                    </div><!-- end manage-candidate-content -->
                  </div> --}}
                </td>
                <td>
                  <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h3 class="widget-title pb-2 text-success">
                        <a class="text-success">
                          @if ($training->published == 'yes')
                          <span class="btn btn-sm btn-success"><b>Published</b></span>
                          @else
                          <span class="btn btn-sm btn-warning"><b>Unpublished</b></span>                              
                          @endif
                        </a>
                      </h3>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>{{ date('D, M j, Y \a\t g:ia', strtotime($training->created_at))}}</td>
                <td class="text-center">                  
                  <div class="manage-candidate-wrap">
                    <div class="bread-action pt-0">
                        <ul class="info-list">                          
                          @if ($training->published == 'yes')
                          <li class="d-inline-block"><a href="{{ url('admin/short-unpublish', $training->id) }}"><i class="la la-lock" title="Unpublished"></i></a></li>
                          @else
                          <li class="d-inline-block"><a href="{{ url('admin/short-publish', $training->id) }}"><i class="la la-unlock" title="Publish"></i></a></li>                      
                          @endif
                            <li class="d-inline-block"><a href="{{ url('admin/view-training', $training->id) }}"><i class="la la-eye" title="View"></i></a></li>
                            <li class="d-inline-block"><a href="{{ url('admin/edit-training', $training->id) }}"><i class="la la-edit" title="Edit"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i data-toggle="modal" data-target="#delete{{$training->id}}" class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                        </ul>
                    </div>
                </div>
                  <div class="modal fade" id="delete{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body mt-2 mb-2 text-center">
                          <h4>Are you sure you want to delete?</h4>
                          <form method="POST" action="{{ url('admin/short-delete') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $training->id }}">
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
          <h2 class="text-black" style="color: black; font-family: Georgia, 'Times New Roman', Times, serif">No Training Created yet, Check back later</h2>
        </div>
        @endif
      </div>
    </div><!-- end billing-content -->
  </div><!-- end billing-form-item -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
@endsection