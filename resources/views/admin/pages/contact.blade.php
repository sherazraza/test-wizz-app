@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h4 class="mb-4">Contact Us Settings</h4>

        <form action="{{ route('admin.contact.save') }}" method="POST">
            @csrf

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required value="{{ $contact->email ?? '' }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email Description</label>
                <textarea name="email_description" class="form-control" rows="3">{{ $contact->email_description ?? '' }}</textarea>
            </div>

            <hr class="my-4">

            <h5>Contact Locations</h5>
            <div id="locations-container">
                @forelse($contactLocations as $loc)
                    <div class="location-group border p-3 mb-3 rounded">
                        <label>Location Title</label>
                        <input type="text" name="location_titles[]" class="form-control mb-2" value="{{ $loc->title }}">

                        <label>Location Description</label>
                        <textarea name="location_descriptions[]" class="form-control mb-2" rows="2">{{ $loc->description }}</textarea>

                        <label>Phone Number</label>
                        <input type="text" name="location_phones[]" class="form-control mb-2" value="{{ $loc->phone }}">

                        <input type="hidden" name="location_ids[]" value="{{ $loc->id }}">
                        <button type="button" class="btn btn-danger btn-sm remove-location" data-id="{{ $loc->id }}">Remove</button>
                    </div>
                @empty
                    <div class="location-group border p-3 mb-3 rounded">
                        <label>Location Title</label>
                        <input type="text" name="location_titles[]" class="form-control mb-2">

                        <label>Location Description</label>
                        <textarea name="location_descriptions[]" class="form-control mb-2" rows="2"></textarea>

                        <label>Phone Number</label>
                        <input type="text" name="location_phones[]" class="form-control mb-2">

                        <button type="button" class="btn btn-danger btn-sm remove-location">Remove</button>
                    </div>
                @endforelse
            </div>

            <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addLocation()">Add More</button>

            <div class="text-center mt-4">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function addLocation() {
        const html = `
            <div class="location-group border p-3 mb-3 rounded">
                <label>Location Title</label>
                <input type="text" name="location_titles[]" class="form-control mb-2">

                <label>Location Description</label>
                <textarea name="location_descriptions[]" class="form-control mb-2" rows="2"></textarea>

                <label>Phone Number</label>
                <input type="text" name="location_phones[]" class="form-control mb-2">

                <button type="button" class="btn btn-danger btn-sm remove-location">Remove</button>
            </div>
        `;
        document.getElementById('locations-container').insertAdjacentHTML('beforeend', html);
    }

    // Handle dynamic and existing deletion
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-location')) {
            const button = e.target;
            const locationId = button.getAttribute('data-id');

            if (locationId) {
                if (!confirm('Are you sure you want to delete this location?')) return;

                fetch(`/admin/contact-location/${locationId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        button.closest('.location-group').remove();
                    } else {
                        alert('Error deleting location.');
                    }
                });
            } else {
                // Just remove frontend-only unsaved location
                button.closest('.location-group').remove();
            }
        }
    });
</script>
@endsection
