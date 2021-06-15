@extends('admin.layouts.app')
@section('admin')
    
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">Training Details</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="index.html">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Training Details</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->


<div class="row mt-5">
    <div class="col-lg-12">        
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">{{$training['title']}}</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-7">                                
                                <div class="bread-img border">
                                    <a href="#">
                                        @if ($training['avatar'] != null)
                                        <img src="{{ asset('uploads/short_trainings/'.$training['avatar']) }}" alt="{{$training['title']}}" class="img-fluid radius-round border">                                    
                                        @else
                                        <img src="{{ asset('images/avatar.jpg') }}" alt="{{$training['title']}}" class="img-fluid radius-round border">                                    
                                        @endif
                                    </a>
                                </div>
                                <div class="manage-candidate-content">
                                    <h2 class="widget-title pb-2 pt-4"><a href="#" class="color-text-2"></i>{{$training['title']}}</a></h2>
                                    {{-- <p class="mb-2 font-size-15">
                                        <span class="mr-2"><i class="la la-envelope-o mr-1"></i>{{$training['email']}}</span>
                                    </p> --}}
                                    <p class="mb-2 font-size-15">
                                        <span class="mr-2"></i>Amount: <span class="text-success">₦{{$training['amount']}}</span></span>
                                    </p>
                                    <p class="mb-2 font-size-15">
                                        <span class="mr-2"></i>Status:
                                            <a class="text-success">
                                            @if ($training['published'] == 'yes')
                                            <span class="btn btn-sm btn-success"><b>Published</b></span>
                                            @else
                                            <span class="btn btn-sm btn-warning"><b>Unpublished</b></span>                              
                                            @endif
                                            </a>
                                        </span>
                                    </p>
                                    <p class="mb-2 font-size-15">
                                        <span class="mr-2"></i>Applied User (s): {{$training['applied_users']}}</span>
                                    </p>
                                    <p class="mb-2 font-size-15">
                                        <span class="mr-2">Date Created: {{date('D, M j, Y \a\t g:ia', strtotime($training['created_at']))}}</span>
                                    </p>
                                    <p class="mb-2 font-size-15">
                                        <span class="mr-2" id="editor">Description: {{ ($training['description']) }}</span>
                                    </p>
                                    {{-- <p class="font-size-15">
                                        <span>Visit website <a href="#" class="color-text">bluetech</a></span>
                                    </p> --}}
                                </div><!-- end manage-candidate-content -->
                                </div>
                            <div class="col-lg-5">
                                <div class="billing-form-item">
                                    <div class="billing-title-wrap">
                                        <h3 class="widget-title pb-0">Applied Users</h3>
                                        <div class="title-shape margin-top-10px"></div>
                                        <div class="billing-content pb-0 pl-0 pr-0">
                                            <table class="table">
                                                <thead>
                                                    <td>S/N</td>
                                                    <td>Name</td>
                                                    <td>Date Applied</td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Adebayo Oluwadara</td>
                                                        <td>Mon, Dec 21, 2020 at 2:37pm</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end manage-candidate-wrap -->
            </div><!-- end billing-content -->
        </div>      
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'span#editor',
    menubar: false,
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  });
</script>
@endsection