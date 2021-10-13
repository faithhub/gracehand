@extends('admin.layouts.app')
@section('admin')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">Partnership</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Partnership</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">All Partnership</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                @if ($users->count() > 0)
                <div class="table-responsive">
                    <table class="table" id="myTable" width="100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Partnership</th>
                                <!-- <th>Referred Count</th> -->
                                <th>Date Registered</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>
                                    <b><a href="{{ url('admin/view-partnership', $user->id) }}" class="text-success">{{$user->fullName}}</a></b>
                                </td>
                                <!-- <td></td> -->
                                <td>{{ date('D, M j, Y \a\t g:ia', strtotime($user->created_at))}}</td>
                                <td class="text-center">
                                    <div class="manage-candidate-wrap">
                                        <div class="bread-action pt-0">
                                            <a class="btn btn-sm btn-success" href="{{ url('admin/view-partnership', $user->id) }}"><i class="la la-eye"></i></a>
                                            <!-- <a class="btn btn-sm btn-success" href="{{ url('admin/edit-user', $user->id) }}"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> -->
                                            <a class="btn btn-sm btn-danger" href="#"><i data-toggle="modal" data-target="#delete{{$user->id}}" class="la la-trash"></i></a>
                                        </div>
                                    </div>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body mt-2 mb-2 text-center">
                                                    <h2>Are you sure you want to delete?</h2>
                                                    <form method="POST" action="{{ url('admin/delete-partnership') }}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
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
                    <h2 class="text-black" style="color: black; font-family: Georgia, 'Times New Roman', Times, serif">No Partnership Registered yet, Check back later</h2>
                </div>
                @endif
            </div>
        </div><!-- end billing-content -->
    </div><!-- end billing-form-item -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->

@endsection