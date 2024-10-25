@extends('admin.layouts.master')

@section('title')
    @lang('translation.Dashboards')
@endsection

@section('css')
    <!-- Plugins css -->
    <!-- <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Edit Activity
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title mb-4">Edit Activity</h4> --}}

                    <form method="post" action="{{ route('admin.activity.update', $activity->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="activity_name" class="form-label">Activity Name</label>
                                    <input type="text" class="form-control" id="activity_name" name="activity_name"
                                        placeholder="Create Activity"
                                        value="{{ old('activity_name') ? old('activity_name') : $activity->activity_name }}">
                                    @error('activity_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        accept="image/*" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Show current image if available -->
                                @if ($activity->image)
                                    <div style="position: relative" id="image-preview-container">
                                        <img id="image-preview" src="{{ asset('storage/' . $activity->image) }}"
                                            alt="Current Image" class="rounded-circle mt-3 avatar-xl" />
                                        <button type="button" id="delete-img-btn"
                                            style="position: absolute; top:20px; left:80px"
                                            onclick="confirmDelete('{{ $activity->image }}',{{ $activity->id }})"
                                            class="btn btn-sm waves-effect btn-danger waves-light rounded-circle">
                                            <i class="bx bx-trash font-size-16 align-middle"></i>
                                        </button>
                                    </div>
                                @else
                                    <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                        alt="Image Preview" style="display: none;" />
                                @endif
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
@section('script')
    <!-- Plugins js -->
    <!-- <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script> -->

    <!-- Form file upload init js -->
    <!-- <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script> -->

    <script>
        function confirmDelete(imgPath, id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    if (imgPath) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: "{{ route('admin.delete.img') }}", // Your route to fetch activities
                            type: "POST",
                            data: {
                                imgPath: imgPath,
                                id: id,
                                model: 'ActivityCategory'
                            },
                            success: function(data) {
                                if (data.msg == 'success') {
                                    // $('#image-preview').css('display', 'none');
                                    $('#image-preview-container').css('display', 'none');
                                    toastr.success(data.message, 'Success');

                                    // Hide the message after 5 seconds (optional)
                                    setTimeout(function() {
                                        $('#ajax-message').fadeOut();
                                    }, 5000);
                                }

                            },
                            error: function(error) {
                                // console.log("Error fetching activities:", error);
                                $('#ajax-message').html('An error occurred!').show();
                            }
                        });

                    }

                }
            })
        }
    </script>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('image-preview');
            const imagePreviewContainer = document.getElementById('image-preview-container');
            const dltBtn = document.getElementById('delete-img-btn');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    if (imagePreviewContainer) {
                        imagePreviewContainer.style.display = 'block'; // Show the image preview
                    }
                    if (dltBtn) {

                        dltBtn.style.display = 'none';
                    }
                    imagePreview.style.display = 'block'; // Show the image preview
                }

                reader.readAsDataURL(file); // Convert the file into a data URL
            }
        }
    </script>
@endsection
