@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
     @if (\Session::has('success'))
<div class="alert alert-success" style="width: 300px; z-index: 1000; position: fixed; bottom: 90px; color: green; right: 10px;" role="alert">
  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button> -->
  <strong>Success!</strong> {!! \Session::get('success') !!}
</div>



@endif
    <div class="row mb-3">
        <div class="col d-flex justify-content-end">
            <!-- Button to trigger modal -->
            <a href="{{route('admin.portfolio')}}" class="btn btn-primary">
                Create New Portfolio
            </a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Portfolio List</h6>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
  <th>Portfolio</th>
                                <th>Creation Date</th>

                                <th>Action</th>
                                <!-- <th>Salary</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $key=>$portfolio)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$portfolio?->category->name}}</td>
                                <td>
    @php
        $file = $portfolio->portfolio_image; // ya file_path, image, etc. Adjust this
    @endphp

    @if ($file)
        @if (Str::endsWith($file, ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
            <img src="{{ asset('storage/' . $file) }}" alt="Image" width="100">
        @elseif (Str::endsWith($file, ['.mp4', '.webm', '.ogg']))
            <video width="150" controls>
                <source src="{{ asset('storage/' . $file) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <span>No preview</span>
        @endif
    @else
        <span>No file</span>
    @endif
</td>

                                <td>{{$portfolio->created_at}}</td>


                                <td>
                                    <a href="{{route('admin.edit', $portfolio->id)}}"
   class="btn btn-warning">
   Edit
</a>
   <a href="{{route('admin.portfolio.delete', $portfolio->id)}}"
   class="btn btn-danger">
   Edit
</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    new DataTable('#example');

    // Auto-close alerts
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 7000);

    // Handle Edit button click

</script>

@endsection
