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
          <a href="{{ url('admin/add-training') }}" class="btn btn-success">Create New Training</a>
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
                <th>Training Type</th>
                <th>Amount</th>
                <th>Date Created</th>
                <th>Published</th>
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
                      <h4 class="widget-title pb-2"><a href="#" class="color-text-2">{{$training->title}}</a></h4>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>
                  <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h3 class="widget-title pb-2"><a href="#" class="color-text-2">{{$training->trainingType}}</a></h3>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>
                  <div class="bread-details d-flex">
                    <div class="manage-candidate-content">
                      <h3 class="widget-title pb-2"><a href="#" class="color-text-2">{{$training->amount}}</a></h3>
                    </div><!-- end manage-candidate-content -->
                  </div>
                </td>
                <td>{{ date('D, M j, Y \a\t g:ia', strtotime($training->created_at))}}</td>
                <td>{{$training->published}}</td>
                <td class="text-center">
                  <div class="manage-candidate-wrap">
                    <div class="bread-action pt-0">
                      <ul class="info-list">
                        <li class="d-inline-block"><a href="{{ url('admin/add-chapters', $training->id) }}"><i class="la la-plus" title="Add Chapters"></i></a></li>
                        <li class="d-inline-block">
                          <form method="POST" action="{{url('admin/publish')}}">
                            @csrf
                            <input name="trainingId" value="{{$training->id}}" hidden>
                            <button type="submit" style="border:none;" {{$training->published == 'yes' ? __('disabled') : null}}>
                              <i class="la la-eye" title="Publish Training"></i>
                            </button>
                          </form>
                        </li>
                        <!-- <li class="d-inline-block"><a href="{{ url('admin/view-user') }}"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                        <li class="d-inline-block"><a href="{{ url('admin/edit-user') }}"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                        <li class="d-inline-block"><a href="#"><i data-toggle="modal" data-target="#delete{{$training->id}}" class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li> -->
                      </ul>
                    </div>
                  </div>
                  <!-- Modal Delete -->
                  <div class="modal fade" id="delete{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body mt-2 mb-2 text-center">
                          <h2>Are you sure you want to delete?</h2>
                          <form method="POST" action="{{ url('user/delete-user') }}">
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