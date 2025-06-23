@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h4 class="mb-4">Video Pricing Settings</h4>

        <form action="{{ route('admin.video-pricing.save') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Main Description</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description', $videoPricing->description ?? '') }}</textarea>
            </div>

            <hr class="my-4">

            <h5>Packages</h5>
            <div id="packages-container">
                @forelse($packages as $index => $package)
                    <div class="package-group border p-3 mb-4 rounded" data-id="{{ $package->id }}">
                        <input type="hidden" name="package_ids[]" value="{{ $package->id }}">

                        <label>Package Name</label>
                        <input type="text" name="package_names[]" class="form-control mb-2" value="{{ $package->package_name }}">

                        <label>Starting From Price</label>
                        <input type="number" step="0.01" name="package_prices[]" class="form-control mb-3" value="{{ $package->starting_price }}">

                        <div class="services-wrapper">
                            <h6>Services</h6>
                            <div class="service-items mb-2">
                                @foreach(json_decode($package->services ?? '[]') as $service)
                                    <div class="d-flex align-items-center mb-2">
                                        <input type="text" name="package_services[{{ $index }}][]" class="form-control me-2" value="{{ $service }}">
                                        <button type="button" class="btn btn-sm btn-danger remove-service">×</button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary add-service">Add More Service</button>
                        </div>

                        <button type="button" class="btn btn-danger btn-sm mt-3 remove-package">Remove Package</button>
                    </div>
                @empty
                    <div class="package-group border p-3 mb-4 rounded">
                        <label>Package Name</label>
                        <input type="text" name="package_names[]" class="form-control mb-2">

                        <label>Starting From Price</label>
                        <input type="number" step="0.01" name="package_prices[]" class="form-control mb-3">

                        <div class="services-wrapper">
                            <h6>Services</h6>
                            <div class="service-items mb-2">
                                <div class="d-flex align-items-center mb-2">
                                    <input type="text" name="package_services[0][]" class="form-control me-2" placeholder="Service Name">
                                    <button type="button" class="btn btn-sm btn-danger remove-service">×</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary add-service">Add More Service</button>
                        </div>

                        <button type="button" class="btn btn-danger btn-sm mt-3 remove-package">Remove Package</button>
                    </div>
                @endforelse
            </div>

            <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addPackage()">Add More Package</button>

            <div class="text-center mt-4">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let packageIndex = {{ count($packages) }};

    function addPackage() {
        const html = `
            <div class="package-group border p-3 mb-4 rounded">
                <label>Package Name</label>
                <input type="text" name="package_names[]" class="form-control mb-2">

                <label>Starting From Price</label>
                <input type="number" step="0.01" name="package_prices[]" class="form-control mb-3">

                <div class="services-wrapper">
                    <h6>Services</h6>
                    <div class="service-items mb-2">
                        <div class="d-flex align-items-center mb-2">
                            <input type="text" name="package_services[${packageIndex}][]" class="form-control me-2" placeholder="Service Name">
                            <button type="button" class="btn btn-sm btn-danger remove-service">×</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-secondary add-service">Add More Service</button>
                </div>

                <button type="button" class="btn btn-danger btn-sm mt-3 remove-package">Remove Package</button>
            </div>
        `;
        $('#packages-container').append(html);
        packageIndex++;
    }

    // Add service input
    $(document).on('click', '.add-service', function () {
        const serviceContainer = $(this).siblings('.service-items');
        const inputName = serviceContainer.find('input').first().attr('name');
        const newInput = `
            <div class="d-flex align-items-center mb-2">
                <input type="text" name="${inputName}" class="form-control me-2" placeholder="Service Name">
                <button type="button" class="btn btn-sm btn-danger remove-service">×</button>
            </div>
        `;
        serviceContainer.append(newInput);
    });

    // Remove individual service input
    $(document).on('click', '.remove-service', function () {
        $(this).closest('.d-flex').remove();
    });

    // Remove whole package (with AJAX if saved)
    $(document).on('click', '.remove-package', function () {
        const group = $(this).closest('.package-group');
        const packageId = group.data('id');

        if (packageId) {
            if (confirm("Are you sure you want to delete this package?")) {
                $.ajax({
                    url: "{{ route('admin.video-pricing.delete-package') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: packageId
                    },
                    success: function (res) {
                        if (res.success) {
                            group.remove();
                        } else {
                            alert("Error deleting package.");
                        }
                    },
                    error: function () {
                        alert("Something went wrong.");
                    }
                });
            }
        } else {
            group.remove();
        }
    });
</script>
@endsection
