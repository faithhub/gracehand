@extends('web.layouts.app')
@section('content')
<div class="popular page_section" style="margin-top: 4rem">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h1>Join Partners</h1>
        </div>
      </div>
    </div>

    <div class="row course_boxes">

      <!-- Popular Course Item -->
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 course_box">
        <div class="card" style="
                box-shadow: 0px 20px 49px rgba(0, 0, 0, 0.17);">
          <div class="card-body pt-4 pb-4">
            <form method="POST" action="{{ route('partnership') }}">
              @csrf

              <div class="form-group col">
                <label for="fullName" class="col-form-label text-md-right">{{ __('Full Name') }}</label>

                <div class="">
                  <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" autocomplete="name" autofocus>

                  @error('fullName')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group col">
                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group col">
                <label for="mobile" class="col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                <div class="">
                  <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile">

                  @error('mobile')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group col">
                <label for="adddress" class="col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="">
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group col mb-0">
                <div class="offset-md-3">
                  <button type="submit" class="btn" style="background-color: #006600; color: white; cursor: pointer;">
                    {{ __('Create Partnership Code') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>v>

@endsection