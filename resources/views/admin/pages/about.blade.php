@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form action="{{ route('admin.about.settings.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Who We Are Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>Who We Are</h4>
            <label>Description</label>
            <textarea name="who_description" class="form-control html-editor" rows="5">{{ $section->who_description ?? '' }}</textarea>

            <label class="mt-3">Quote</label>
            <textarea name="who_quote" class="form-control" rows="3">{{ $section->who_quote ?? '' }}</textarea>

            <label class="mt-3">Single Image</label>
            <input type="file" name="who_image" class="form-control" accept="image/*">
            @if(!empty($section->who_image))
                <img src="{{ asset('storage/' . $section->who_image) }}" class="mt-2" style="max-width: 200px;">
            @endif

            <label class="mt-3">Multiple Images</label>
            <input type="file" name="who_images[]" class="form-control" multiple accept="image/*">
            @php $whoImages = isset($section->who_images) ? json_decode($section->who_images, true) : []; @endphp
            @foreach($whoImages as $img)
                <img src="{{ asset('storage/' . $img) }}" class="mt-2 me-2" style="max-width: 100px;">
            @endforeach
        </div>

        {{-- How It Started Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>How It Started</h4>
            <label>Description</label>
            <textarea name="how_started_description" class="form-control html-editor" rows="5">{{ $section->how_started_description ?? '' }}</textarea>

            <label class="mt-3">Image</label>
            <input type="file" name="how_started_image" class="form-control" accept="image/*">
            @if(!empty($section->how_started_image))
                <img src="{{ asset('storage/' . $section->how_started_image) }}" class="mt-2" style="max-width: 200px;">
            @endif
        </div>

        {{-- Together We Are Strong Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>Together We Are Strong</h4>
            <label>Description</label>
            <textarea name="together_description" class="form-control html-editor" rows="5">{{ $section->together_description ?? '' }}</textarea>
        </div>

        {{-- Our Goal Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>Our Goal</h4>
            <label>Description</label>
            <textarea name="goal_description" class="form-control" rows="4">{{ $section->goal_description ?? '' }}</textarea>
        </div>

        {{-- Descriptions Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>Descriptions</h4>
            <div id="descriptions-container">
                @forelse($descriptions as $desc)
                    <div class="description-item mb-3" data-id="{{ $desc->id }}">
                        <label>Description</label>
                        <textarea name="description_texts[]" class="form-control mb-2" rows="2">{{ $desc->description }}</textarea>
                        <label>Number</label>
                        <input type="number" name="description_numbers[]" class="form-control mb-2" value="{{ $desc->number }}">
                        <input type="hidden" name="description_ids[]" value="{{ $desc->id }}">
                        <button type="button" class="btn btn-sm btn-danger delete-description" data-id="{{ $desc->id }}">Delete</button>
                    </div>
                @empty
                    <div class="description-item mb-3">
                        <label>Description</label>
                        <textarea name="description_texts[]" class="form-control mb-2" rows="2"></textarea>
                        <label>Number</label>
                        <input type="number" name="description_numbers[]" class="form-control mb-2" />
                    </div>
                @endforelse
            </div>
            <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addDescription()">Add More</button>
        </div>

        {{-- Our Team Section --}}
        <div class="bg-light p-4 rounded mb-4">
            <h4>Our Team</h4>
            <label>Main Description</label>
            <textarea name="team_description" class="form-control mb-3" rows="4">{{ $section->team_description ?? '' }}</textarea>

            <div id="team-members-container">
                @forelse($teamMembers as $member)
                    <div class="team-member-item mb-3" data-id="{{ $member->id }}">
                        <input type="text" name="team_names[]" class="form-control mb-2" value="{{ $member->name }}" placeholder="Name">
                        <input type="text" name="team_designations[]" class="form-control mb-2" value="{{ $member->designation }}" placeholder="Designation">
                        <input type="file" name="team_images[]" class="form-control mb-2" accept="image/*">
                        <input type="hidden" name="team_ids[]" value="{{ $member->id }}">
                        @if($member->image)
                            <img src="{{ asset('storage/' . $member->image) }}" class="mt-2" style="max-width: 100px;">
                        @endif
                        <button type="button" class="btn btn-sm btn-danger delete-team" data-id="{{ $member->id }}">Delete</button>
                    </div>
                @empty
                    <div class="team-member-item mb-3">
                        <input type="text" name="team_names[]" class="form-control mb-2" placeholder="Name">
                        <input type="text" name="team_designations[]" class="form-control mb-2" placeholder="Designation">
                        <input type="file" name="team_images[]" class="form-control mb-2" accept="image/*">
                    </div>
                @endforelse
            </div>
            <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addTeamMember()">Add More Team Members</button>
        </div>

        {{-- Submit --}}
        <div class="text-center">
            <button class="btn btn-primary mt-4">Save</button>
        </div>
    </form>
</div>

{{-- Scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function addTeamMember() {
        const container = document.getElementById('team-members-container');
        const html = `
            <div class="team-member-item mb-3">
                <input type="text" name="team_names[]" class="form-control mb-2" placeholder="Name">
                <input type="text" name="team_designations[]" class="form-control mb-2" placeholder="Designation">
                <input type="file" name="team_images[]" class="form-control" accept="image/*">
            </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }

    function addDescription() {
        const container = document.getElementById('descriptions-container');
        const html = `
            <div class="description-item mb-3">
                <label>Description</label>
                <textarea name="description_texts[]" class="form-control mb-2" rows="2"></textarea>
                <label>Number</label>
                <input type="number" name="description_numbers[]" class="form-control mb-2" />
            </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }

    // AJAX Delete for Team Member
    $(document).on('click', '.delete-team', function () {
        const id = $(this).data('id');
        const box = $(this).closest('.team-member-item');
        if (confirm('Delete this team member?')) {
            $.ajax({
                url: '/admin/about/team-member/' + id,
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                success: res => {
                    if (res.success) box.remove();
                }
            });
        }
    });

    // AJAX Delete for Description
    $(document).on('click', '.delete-description', function () {
        const id = $(this).data('id');
        const box = $(this).closest('.description-item');
        if (confirm('Delete this description?')) {
            $.ajax({
                url: '/admin/about/description/' + id,
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                success: res => {
                    if (res.success) box.remove();
                }
            });
        }
    });
</script>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.html-editor').forEach(editorEl => {
            ClassicEditor
                .create(editorEl)
                .catch(error => console.error(error));
        });
    });
</script>
@endsection
