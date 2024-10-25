@extends('admin.layouts.master')

@section('title')
    @lang('translation.Dashboards')
@endsection

@section('css')
    <link href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <!-- <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Edit Instructor
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <form method="post" action="{{ route('admin.teams.update', $trainer->u_id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_name" class="form-label">Instructor Name</label>
                                    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
                                        placeholder="Enter Instructor's Name"
                                        value="{{ old('trainer_name') ? old('trainer_name') : $trainer->name }}">
                                    @error('trainer_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_contact" class="form-label">Contact</label>
                                    <input type="number" class="form-control" id="trainer_contact" name="trainer_contact"
                                        placeholder="Enter Instructor's Contact Number"
                                        value="{{ old('trainer_contact') ? old('trainer_contact') : $trainer->contact }}">
                                    @error('trainer_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="trainer_email" id="trainer_email"
                                        placeholder="Enter Instructor's Email ID"
                                        value="{{ old('trainer_email') ? old('trainer_email') : $trainer->email }}">
                                    @error('trainer_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-date-input" class="form-label">DOB</label>

                                    <input class="form-control" type="date" name="dob"
                                        value="{{ old('dob') ? old('dob') : \Carbon\Carbon::parse($trainer->dob)->format('Y-m-d') }}"
                                        id="example-date-input">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <select class="form-control" id="nationality" name="nationality"
                                        data-placeholder="Choose activities...">
                                        <option value="" disabled>Choose nationality</option>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->countryId }}"
                                                {{ $trainer->country_id == $country->countryId ? 'selected' : '' }}>
                                                {{ $country->countryName }}
                                            </option>
                                        @empty
                                            <option value="" disabled>no country</option>
                                        @endforelse
                                    </select>
                                    @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="specialisation" class="form-label">Specialisation</label>

                                    <select class="select2 form-control select2-multiple" id="specialisation"
                                        name="specialisation[]" multiple="multiple"
                                        data-placeholder="Choose specializations...">
                                        @forelse ($specializations as $specialization)
                                            <option value="{{ $specialization->id }}"
                                                @if (isset($selectedSpecializations) && in_array($specialization->id, $selectedSpecializations)) selected @endif>
                                                {{ $specialization->specialization_name }}</option>
                                        @empty
                                            <option value="" disabled>No Specialization available</option>
                                        @endforelse
                                    </select>

                                    @error('specialisation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row" style="align-items: baseline;">
                            <div class="col-md-6">
                                <div class="">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        accept="image/*" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @if ($trainer->avatar)
                                    <div style="position: relative" id="image-preview-container">
                                        <img id="image-preview" src="{{ asset('storage/' . $trainer->avatar) }}"
                                            alt="Current Image" class="rounded-circle mt-3 avatar-xl" />
                                        <button type="button" id="delete-img-btn"
                                            style="position: absolute; top:20px; left:80px"
                                            onclick="confirmDelete('{{ $trainer->avatar }}',{{ $trainer->u_id }})"
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
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" id="description-editor"
                                        placeholder="Enter Instructor's Description">{{ old('description') ? old('description') : $trainer->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="experience" class="form-label">Experience</label>
                                    <textarea required="" name="experience" class="form-control" rows="3" id="experience"
                                        placeholder="Enter Instructor's Experience">{{ old('experience') ? old('experience') : jsonToCommaSeparatedString($trainer->experience) }}</textarea>
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="certification" class="form-label">Certification</label>
                                    <textarea required="" name="certification" class="form-control" rows="3" id="certification"
                                        placeholder="Enter Instructor's Certification">{{ old('certification') ? old('certification') : jsonToCommaSeparatedString($trainer->certifications) }}</textarea>
                                    @error('certification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="classes" class="form-label">Classes</label>
                                    <textarea required="" name="classes" class="form-control" rows="3" id="classes"
                                        placeholder="Enter Instructor's Classes">{{ old('classes') ? old('classes') : jsonToCommaSeparatedString($trainer->classes) }}</textarea>
                                    @error('classes')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>
                                    <textarea required="" name="education" class="form-control" rows="3" id="education"
                                        placeholder="Enter Instructor's Education">{{ old('education') ? old('education') : jsonToCommaSeparatedString($trainer->education) }}</textarea>
                                    @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row" style="align-items: baseline">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="special_focus_area" class="form-label">Special Focus Area</label>
                                    <textarea required="" name="special_focus_area" class="form-control" rows="3" id="special_focus_area"
                                        placeholder="Enter Instructor's Special Focus Area">{{ old('special_focus_area') ? old('special_focus_area') : jsonToCommaSeparatedString($trainer->special_focus_area) }}</textarea>
                                    @error('special_focus_area')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <label for="languages" class="form-label">Languages</label>
                                    <textarea required="" name="languages" class="form-control" rows="3" id="languages"
                                        placeholder="Enter Instructor's Languages">{{ old('languages') ? old('languages') : jsonToCommaSeparatedString($trainer->languages) }}</textarea>
                                    @error('languages')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
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

    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <!-- Form file upload init js -->
    <!-- <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script> -->
    <!-- form advanced init -->
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ URL::asset('build/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('build/js/pages/form-editor.init.js') }}"></script>

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
                                model: 'User'
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
        tinymce.init({
            selector: '#description-editor', // Match the ID of the textarea
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | \
                                                                                                                                                                                                                                                                                                                                                                                                                                                alignleft aligncenter alignright alignjustify | \
                                                                                                                                                                                                                                                                                                                                                                                                                                                bullist numlist outdent indent | removeformat | help'
        });
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
