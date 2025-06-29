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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                Create New Category
            </button>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Categories List</h6>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>

                                <th>Creation Date</th>
                                <th>Is Active</th>
                                <th>Action</th>
                                <!-- <th>Salary</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    @if($category->is_active == '1')
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Inactive</button>
                                    @endif
                                </td>

                                <td>
                                    <a href="javascript:void(0)"
   class="btn btn-warning editCategoryBtn"
   data-id="{{ $category->id }}"
   data-name="{{ $category->name }}">
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

<!-- Bootstrap Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('admin.category.store')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" name="name" id="categoryName" class="form-control" placeholder="Enter category name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editCategoryForm" method="POST">
            @csrf
            @method('PUT') <!-- Important for update requests -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editCategoryId">
                    <div class="mb-3">
                        <label for="editCategoryName" class="form-label">Category Name</label>
                        <input type="text" name="name" id="editCategoryName" class="form-control" placeholder="Enter category name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </div>
        </form>
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
    $('.editCategoryBtn').on('click', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');

        $('#editCategoryId').val(id);
        $('#editCategoryName').val(name);

        // Set form action dynamically
        $('#editCategoryForm').attr('action', '/admin/categories/' + id);

        $('#editCategoryModal').modal('show');
    });
</script>

@endsection
