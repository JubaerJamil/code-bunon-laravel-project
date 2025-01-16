@extends('backend.layout.app')
@section('backend_title','Admin Brand Create')

@section('backend_content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-5">
      <div class="card">
          <div class="card-body">
            <form action="{{ Route('slider_Update',$sliders->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <h5 class="font-weight-bolder">Slider Create</h5>
              <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <label>Title</label>
                  <input class="form-control" type="text" name="title" placeholder="" value="{{ $sliders->title }}" />
                  @error('title')
                      <div class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <label class="form-label" for="headline">Slider Headline</label>
                    <input type="text" class="form-control" id="headline" placeholder="Enter Headline" name="headline" value="{{ $sliders->headline}}" />
                    @error('headline')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12 mb-2">
                    <label class="form-label">Slider Content</label>
                    <textarea name="content" class="form-control" id="" cols="35" rows="5">{{ $sliders->content}}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


              <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                <label class="form-label" for="ecommerce-category-image">Slider Image</label>
                <input class="form-control" name="image" type="file" oninput="previewImage(this)">
                <p>Best image size for perfect view 1170px * 550px</p>
                <img src="{{ asset($sliders->image) }}" alt="Image Preview" id="img" class="mt-3 rounded float-start"
                    style="width:320px; max-height: 200px; border: none; outline: none; background: transparent;">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div>
                    <label>Status</label>
                </div>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{ $sliders->status == 1 ? 'checked' : ''}}>
                        <label class="form-check-label" for="status1">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status0" value="0" {{ $sliders->status == 0 ? 'checked' : ''}}>
                        <label class="form-check-label" for="status0">Inactive</label>
                    </div>
                </div>
              </div>

              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('slider_List')}}" class="btn btn-info">Return List</a>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>

@endsection

@section('beackend_scripts')

<script>
    function previewImage(input) {
    const img = document.getElementById('img');

    if (input.files && input.files[0]) {
        img.src = window.URL.createObjectURL(input.files[0]);
        img.style.display = 'block'; // Show the image
    } else {
        img.style.display = 'none'; // Hide the image if no file selected
    }
}
</script>
@endsection