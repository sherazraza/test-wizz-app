@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form action="{{ route('admin.video.editing.save') }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Video</label>
                        <input type="file" class="form-control" name="main_image" accept="video/*">
                        @if(!empty($section->main_image))
                            <video src="{{ asset('storage/' . $section->main_image) }}" alt="Main Image" class="img-thumbnail mt-2" width="200" controls></video>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Video Editing Service Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Video Editing Service Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="video_service_description" class="form-control" rows="3">{{ $section->video_service_description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Video</label>
                        <input type="file" class="form-control" name="video_service_image" accept="video/*">
                        @if(!empty($section->video_service_image))
                            <video src="{{ asset('storage/' . $section->video_service_image) }}" alt="Service Image" class="img-thumbnail mt-2" width="200" controls></video>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Services Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="services_description" class="form-control" rows="3">{{ $section->services_description ?? '' }}</textarea>
                    </div>
                    <div id="services-container">
                        @if($services->count())
                            @foreach($services as $service)
                            <div class="service-item mb-3">
                                <input type="text" class="form-control mb-2" name="service_titles[]" value="{{ $service->title }}" placeholder="Service Title">
                                <textarea name="service_descriptions[]" class="form-control" placeholder="Service Description">{{ $service->description }}</textarea>
                            </div>
                            @endforeach
                        @else
                        <div class="service-item mb-3">
                            <input type="text" class="form-control mb-2" name="service_titles[]" placeholder="Service Title">
                            <textarea name="service_descriptions[]" class="form-control" placeholder="Service Description"></textarea>
                        </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="addService()">Add More</button>
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
                        <label class="form-label">Video</label>
                        <input type="file" class="form-control" name="reliable_image" accept="video/*">
                        @if(!empty($section->reliable_image))
                            <video src="{{ asset('storage/' . $section->reliable_image) }}" alt="Reliable Image" class="img-thumbnail mt-2" width="200" controls></video>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Product Retouch Video Section 1 -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Product Retouch Video Section</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="product_retouch_description_1" class="form-control" rows="3">{{ $section->product_retouch_description_1 ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Video 1</label>
                        <input type="file" class="form-control" name="product_retouch_video_1a" accept="video/*">
                        @if(!empty($section->product_retouch_video_1a))
                            <video width="320" height="240" controls class="mt-2">
                                <source src="{{ asset('storage/' . $section->product_retouch_video_1a) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Video 2</label>
                        <input type="file" class="form-control" name="product_retouch_video_1b" accept="video/*">
                        @if(!empty($section->product_retouch_video_1b))
                            <video width="320" height="240" controls class="mt-2">
                                <source src="{{ asset('storage/' . $section->product_retouch_video_1b) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Product Retouch Video Section 2 -->
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4 mb-4">
                    <h4>Product Retouch Video Section 2</h4>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="product_retouch_description_2" class="form-control" rows="3">{{ $section->product_retouch_description_2 ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Video 1</label>
                        <input type="file" class="form-control" name="product_retouch_video_2a" accept="video/*">
                        @if(!empty($section->product_retouch_video_2a))
                            <video width="320" height="240" controls class="mt-2">
                                <source src="{{ asset('storage/' . $section->product_retouch_video_2a) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Video 2</label>
                        <input type="file" class="form-control" name="product_retouch_video_2b" accept="video/*">
                        @if(!empty($section->product_retouch_video_2b))
                            <video width="320" height="240" controls class="mt-2">
                                <source src="{{ asset('storage/' . $section->product_retouch_video_2b) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                </div>
            </div>

            <div class="my-4 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </form>
</div>

<script>
    function addService() {
        const container = document.getElementById('services-container');
        const html = `
            <div class="service-item mb-3">
                <input type="text" class="form-control mb-2" name="service_titles[]" placeholder="Service Title">
                <textarea name="service_descriptions[]" class="form-control" placeholder="Service Description"></textarea>
            </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }
</script>
@endsection
