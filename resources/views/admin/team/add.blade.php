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
            Create Team
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success" role="alert"> {{ $value }} </div>
                    @endsession
                    <h4 class="card-title mb-4">Create Team</h4>

                    <form method="post" action="{{ route('admin.teams.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
                                        placeholder="Enter Your Name" value="{{ old('trainer_name') }}">
                                    @error('trainer_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_contact" class="form-label">Contact</label>
                                    <input type="number" class="form-control" id="trainer_contact" name="trainer_contact"
                                        placeholder="Enter Your Contact Number" value="{{ old('trainer_contact') }}">
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
                                        placeholder="Enter Your Email ID" value="{{ old('trainer_email') }}">
                                    @error('trainer_email')
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
                                            <option value="{{ $specialization->id }}">
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
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="specialisation" class="form-label">Specialisation</label>
                                    <input type="text" class="form-control" id="specialisation" name="specialisation"
                                        placeholder="Enter Your Specialisation" value="{{ old('specialisation') }}">
                                    @error('specialisation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                        <div class="row" style="align-items: baseline;">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        accept="image/*" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                    alt="Image Preview" style="display: none;">
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="special_focus_area" class="form-label">Special Focus Area</label>
                                    <textarea required="" name="special_focus_area" class="form-control" rows="3" id="special_focus_area"
                                        placeholder="Enter Your Special Focus Area">{{ old('special_focus_area') }}</textarea>
                                    @error('special_focus_area')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" id="description-editor"
                                        placeholder="Enter Your Description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="experience" class="form-label">Experience</label>
                                    <textarea required="" name="experience" class="form-control" rows="3" id="experience"
                                        placeholder="Enter Your Experience">{{ old('experience') }}</textarea>
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="certification" class="form-label">Certification</label>
                                    <textarea required="" name="certification" class="form-control" rows="3" id="certification"
                                        placeholder="Enter Your Certification">{{ old('certification') }}</textarea>
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
                                        placeholder="Enter Your Classes">{{ old('classes') }}</textarea>
                                    @error('classes')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>
                                    <textarea required="" name="education" class="form-control" rows="3" id="education"
                                        placeholder="Enter Your Education">{{ old('education') }}</textarea>
                                    @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-items: baseline">


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="languages" class="form-label">Languages</label>
                                    <textarea required="" name="languages" class="form-control" rows="3" id="languages"
                                        placeholder="Enter Your Languages">{{ old('languages') }}</textarea>
                                    @error('languages')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-date-input" class="col-md-2 col-form-label">DOB</label>

                                    <input class="form-control" type="date" name="dob"
                                        value="{{ old('dob') }}" id="example-date-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter Password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password"
                                        value="{{ old('password_confirmation') }}">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- <textarea required="" class="form-control" rows="3" style="height: 17px;"></textarea> -->
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
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <!-- form advanced init -->
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ URL::asset('build/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('build/js/pages/form-editor.init.js') }}"></script>

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
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show the image preview
                }

                reader.readAsDataURL(file); // Convert the file into a data URL
            }
        }
    </script>
@endsection
