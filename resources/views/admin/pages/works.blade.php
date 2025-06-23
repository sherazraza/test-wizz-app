@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form action="{{ route('admin.cgi.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">

            <!-- Main Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Main Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="main_description" class="form-control" rows="3">{{ $section->main_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="main_image" accept="image/*">
                        @if(!empty($section->main_image))
                            <img src="{{ asset('storage/' . $section->main_image) }}" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                </div>
            </div>

            <!-- Level Up Your Product Visual Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Level Up Your Product Visual</h4>
                    <div class="mb-3">
                        <label class="form-label">3D Description</label>
                        <textarea name="levelup_3d_description" class="form-control" rows="3">{{ $section->levelup_3d_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CGI Description</label>
                        <textarea name="levelup_cgi_description" class="form-control" rows="3">{{ $section->levelup_cgi_description ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Crafting New Realities Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Crafting New Realities</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="crafting_description" class="form-control" rows="3">{{ $section->crafting_description ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Amazing Experience for E-commerce -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Amazing Experience for E-commerce</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="amazing_description" class="form-control" rows="3">{{ $section->amazing_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Front Image</label>
                        <input type="file" class="form-control" name="amazing_front_image" accept="image/*">
                        @if(!empty($section->amazing_front_image))
                            <img src="{{ asset('storage/' . $section->amazing_front_image) }}" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Back Image</label>
                        <input type="file" class="form-control" name="amazing_back_image" accept="image/*">
                        @if(!empty($section->amazing_back_image))
                            <img src="{{ asset('storage/' . $section->amazing_back_image) }}" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                </div>
            </div>

            <!-- Motion Graphics and Animations -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Motion Graphics and Animations</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="motion_description" class="form-control" rows="3">{{ $section->motion_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="motion_image" accept="image/*">
                        @if(!empty($section->motion_image))
                            <img src="{{ asset('storage/' . $section->motion_image) }}" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>How It Works</h4>
                    <div id="how-it-works-container">
                        @if($howItWorks->count())
                            @foreach($howItWorks as $how)
    <div class="how-it-works-item mb-3 border p-3 position-relative" id="how-item-{{ $how->id }}">
        <input type="text" class="form-control mb-2" name="how_title[]" value="{{ $how->title }}" placeholder="Title">
        <textarea name="how_description[]" class="form-control mb-2" placeholder="Description">{{ $how->description }}</textarea>
        <input type="file" class="form-control" name="how_image[]" accept="image/*">
        <input type="hidden" name="how_id[]" value="{{ $how->id }}">

        @if($how->image)
            <img src="{{ asset('storage/' . $how->image) }}" class="mt-2" style="max-width: 200px;">
        @endif

        <!-- 🗑️ Delete button -->
        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
            onclick="deleteHowItWorks({{ $how->id }})">
            ✕
        </button>
    </div>
@endforeach

                        @else
                            <div class="how-it-works-item mb-3">
                                <input type="text" class="form-control mb-2" name="how_title[]" placeholder="Title">
                                <textarea name="how_description[]" class="form-control mb-2" placeholder="Description"></textarea>
                                <input type="file" class="form-control" name="how_image[]" accept="image/*">
                            </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addHowItWorks()">Add More</button>
                </div>
            </div>

            <!-- Reliable Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Reliable Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="reliable_description" class="form-control" rows="3">{{ $section->reliable_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="reliable_image" accept="image/*">
                        @if(!empty($section->reliable_image))
                            <img src="{{ asset('storage/' . $section->reliable_image) }}" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center my-4">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </form>
</div>
<script>
function deleteHowItWorks(id) {
    if (confirm('Are you sure you want to delete this item?')) {
        fetch(`{{ url('admin/cgi/how-it-works/delete') }}/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            }
        })
        .then(res => {
            if (res.ok) {
                document.getElementById(`how-item-${id}`).remove();
            } else {
                alert('Failed to delete item.');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Something went wrong.');
        });
    }
}
</script>

<script>
    function addHowItWorks() {
        const container = document.getElementById('how-it-works-container');
        const html = `
        <div class="how-it-works-item mb-3">
            <input type="text" class="form-control mb-2" name="how_title[]" placeholder="Title">
            <textarea name="how_description[]" class="form-control mb-2" placeholder="Description"></textarea>
            <input type="file" class="form-control" name="how_image[]" accept="image/*">
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }
</script>
@endsection
