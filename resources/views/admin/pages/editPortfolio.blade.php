@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid pt-4 px-4">
         @if (\Session::has('error'))
<div class="alert alert-danger" style="width: 300px; position: fixed; top: 30px; color: red; right: 10px;" role="alert">
  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button> -->
  <strong>Error!</strong> {!! \Session::get('error') !!}
</div>



@endif
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Portfolios</h6>
                    <form action="{{route('admin.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <!-- Portfolio Content Image -->
                        <div class="mb-3">
                            <label for="portfolioImage" class="form-label">Portfolio Content</label>
                            <input type="file" class="form-control" id="portfolioImage" name="portfolio_image" accept="image/*,video/*">
 @php
        $file = $portfolio->portfolio_image; // ya file_path, image, etc. Adjust this
    @endphp

    @if ($file)
        @if (Str::endsWith($file, ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
            <img src="{{ asset('storage/' . $file) }}" alt="Image" width="200">
        @elseif (Str::endsWith($file, ['.mp4', '.webm', '.ogg']))
            <video width="250" controls>
                <source src="{{ asset('storage/' . $file) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <span>No preview</span>
        @endif
    @else
        <span>No file</span>
    @endif
                        </div>

                        <!-- Category Dropdown -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                           <select class="form-select" id="category" required name="category">
    <option selected disabled>Choose a category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{$category->id == $portfolio->category_id ? 'selected' : ""}}>{{ $category->name }}</option>
    @endforeach
</select>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 7000);
</script>
@endsection
