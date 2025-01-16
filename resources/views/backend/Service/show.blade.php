@extends('backend.layout.app')
@section('backend_title','Admin Brand Create')

@section('backend_content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-5">
      <div class="card">
          <div class="card-body">
              <h5 class="font-weight-bolder">Service Item Update</h5>
              <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <label>Title</label>
                  <input class="form-control" type="text" name="title" placeholder="" value="{{ $services->title }}" readonly />
                  @error('title')
                      <div class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <label class="form-label" for="icon">Service Icon</label>
                    <input type="text" class="form-control" id="icon" placeholder="Icon code"
                        name="icon" value="{{ $services->icon}}" readonly />
                    @error('icon')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                    <label class="form-label">Service Content</label>
                    <textarea name="content" class="form-control" id="myContent" cols="35" rows="30" readonly>{{ $services->content}}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>



              <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mt-2">
                <div><label class="form-label" for="">Title Image</label></div>
                <img src="{{ asset($services->title_image)}}" alt="Image Preview" id="title_img" class="mt-1 rounded float-start"
                    style="width:320px; max-height: 200px; border: none; outline: none; background: transparent;">
                @error('title_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mt-2">
                <div><label class="form-label" for="">Image</label></div>
                <img src="{{ asset($services->image)}}" alt="Image Preview" id="img" class="mt-3 rounded float-start"
                    style="width:320px; max-height: 200px; border: none; outline: none; background: transparent;">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <div>
                    <label>Status</label>
                </div>
                <div>

                    @if ($services->status == 1)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" checked>
                        <label class="form-check-label" for="status1">Active</label>
                    </div>
                    @elseif($services->status == 0)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status0" checked>
                            <label class="form-check-label" for="status0">Inactive</label>
                        </div>
                    @endif

                </div>
            </div>

              </div>
              <div class="mt-2">
                <a href="{{ route('service_List')}}" class="btn btn-info">Return List</a>
              </div>
          </div>
      </div>
    </div>
</div>

@endsection

@section('beackend_scripts')
@endsection