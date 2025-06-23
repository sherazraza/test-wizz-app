@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h4 class="mb-4">Image Pricing Settings</h4>

        <form action="{{ route('admin.image-pricing.save') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Main Description</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description', $pricing->description ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Base Price</label>
                <input type="number" step="0.01" name="base_price" class="form-control" value="{{ old('base_price', $pricing->base_price ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Base Price Description</label>
                <textarea name="base_price_description" class="form-control" rows="2">{{ old('base_price_description', $pricing->base_price_description ?? '') }}</textarea>
            </div>

            <hr class="my-4">

            <h5>Additional Services</h5>
            <div id="services-container">
                @forelse($services as $service)
                    <div class="service-group border p-3 mb-3 rounded" data-id="{{ $service->id }}">
                        <label>Service Name</label>
                        <input type="text" name="service_names[]" class="form-control mb-2" value="{{ $service->name }}">

                        <label>Service Price</label>
                        <input type="number" name="service_prices[]" class="form-control mb-2" value="{{ $service->price }}">

                        <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                    </div>
                @empty
                    <div class="service-group border p-3 mb-3 rounded">
                        <label>Service Name</label>
                        <input type="text" name="service_names[]" class="form-control mb-2">

                        <label>Service Price</label>
                        <input type="number" name="service_prices[]" class="form-control mb-2">

                        <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
                    </div>
                @endforelse
            </div>

            <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addService()">Add More Service</button>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- jQuery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function addService() {
        const html = `
            <div class="service-group border p-3 mb-3 rounded">
                <label>Service Name</label>
                <input type="text" name="service_names[]" class="form-control mb-2">

                <label>Service Price</label>
                <input type="number" name="service_prices[]" class="form-control mb-2">

                <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
            </div>
        `;
        $('#services-container').append(html);
    }

    $(document).on('click', '.remove-service', function () {
        const group = $(this).closest('.service-group');
        const id = group.data('id');

        if (id) {
            if (confirm('Are you sure you want to delete this service?')) {
                $.ajax({
                    url: "{{ route('admin.image-pricing.service.delete') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    success: function (res) {
                        if (res.success) {
                            group.remove();
                        } else {
                            alert('Failed to delete. Try again.');
                        }
                    },
                    error: function () {
                        alert('Server error. Try again.');
                    }
                });
            }
        } else {
            group.remove();
        }
    });
</script>
@endsection
