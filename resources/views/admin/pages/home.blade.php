@extends('admin.layouts.master')

@section('content')
<div class="container-fluid pt-4 px-4">
    <form action="{{ route('admin.home.settings.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">

            <!-- Hero Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Hero Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="hero_title" value="{{ $home->hero_title ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="hero_description" rows="3">{{ $home->hero_description ?? '' }}</textarea>
                    </div>
                    @for($i = 1; $i <= 4; $i++)
                        <div class="mb-3">
                            <label class="form-label">Image {{ $i }}</label>
                            <input type="file" class="form-control" name="hero_image_{{ $i }}" accept="image/*">
                            @php $image = "hero_image_$i"; @endphp
                            @if(!empty($home->$image))
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $home->$image) }}" height="80">
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Client Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Client Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="client_title" value="{{ $home->client_title ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="client_description" rows="3">{{ $home->client_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Multiple Images</label>
                        <input type="file" class="form-control" name="client_images[]" accept="image/*" multiple>
                        @if(!empty($home->client_images))
                            <div class="row mt-2">
                                @foreach(json_decode($home->client_images, true) as $img)
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/' . $img) }}" class="img-fluid mb-2" height="80">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Snapshots Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Snapshots Section</h4>
                    @foreach(['brands', 'employees', 'sft_space' => 'SFT Production Space', 'delivered_photos' => 'Delivered Photos Per Year'] as $name => $label)
                        <div class="mb-3">
                            <label class="form-label">{{ is_string($label) ? $label : ucfirst($label) }}</label>
                            <input type="number" class="form-control" name="{{ is_int($name) ? $label : $name }}" value="{{ $home[is_int($name) ? $label : $name] ?? '' }}">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Reviews Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="review_name" value="{{ $home->review_name ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" class="form-control" name="review_designation" value="{{ $home->review_designation ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Review</label>
                        <textarea class="form-control" name="review_text" rows="3">{{ $home->review_text ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="review_image" accept="image/*">
                        @if(!empty($home->review_image))
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $home->review_image) }}" height="80">
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Logo</label>
                        <input type="file" class="form-control" name="company_logo" accept="image/*">
                        @if(!empty($home->company_logo))
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $home->company_logo) }}" height="80">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Video Editing Services Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Video Editing Services</h4>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="video_editing_title" value="{{ $home->video_editing_title ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="video_editing_description" rows="3">{{ $home->video_editing_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="video_editing_image" accept="image/*">
                        @if(!empty($home->video_editing_image))
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $home->video_editing_image) }}" height="80">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- 3D and CGI Model Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>3D and CGI Model Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="cgi_title" value="{{ $home->cgi_title ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="cgi_description" rows="3">{{ $home->cgi_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Multiple Videos</label>
                        <input type="file" class="form-control" name="cgi_videos[]" accept="video/*" multiple>
                        @if(!empty($home->cgi_videos))
                            <div class="row mt-2">
                                @foreach(json_decode($home->cgi_videos, true) as $vid)
                                    <div class="col-md-4">
                                        <video controls height="100" class="mb-2">
                                            <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="my-5">
                <div class="justify-content-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection
