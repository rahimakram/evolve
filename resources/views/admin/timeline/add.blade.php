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
            Create Timetable
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success" role="alert"> {{ $value }} </div>
                    @endsession
                    {{-- <h4 class="card-title mb-4">Create Timetable</h4> --}}

                    <form method="post" action="{{ route('admin.timeline.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Class Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Class Name" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instructor" class="form-label">Instructor</label>
                                    <select class="form-select" name="instructor" id="instructor">
                                        <option disabled>Select instructor</option>
                                        @forelse ($instructors as $instructor)
                                            <option value="{{ $instructor->id }}">
                                                {{ $instructor->name }}</option>
                                        @empty
                                            <option value="" disabled>No instructor available</option>
                                        @endforelse
                                    </select>
                                    @error('instructor')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <select class="form-select" name="location" id="location">
                                        <option>Select location</option>
                                        @forelse ($locations as $location)
                                            <option value="{{ $location->id }}">
                                                {{ $location->name }}</option>
                                        @empty
                                            <option value="" disabled>No location available</option>
                                        @endforelse
                                    </select>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="activities" class="form-label">Activities</label>
                                    {{-- <select class="select2 form-control select2-multiple" id="activities"
                                        name="activities[]" multiple="multiple" data-placeholder="Choose activities...">
                                    </select> --}}
                                    <select class="form-control" id="activities" name="activities"
                                        data-placeholder="Choose activities...">
                                        <option value="" disabled>Choose activity</option>
                                    </select>
                                    @error('activities')
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

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    {{-- <textarea required="" name="description" class="form-control" rows="3" id="description"
                                        placeholder="Enter Your Description">{{ old('description') }}</textarea> --}}
                                    <textarea id="description-editor" name="description" class="form-control" rows="3" id="description"
                                        placeholder="Enter Timetable Description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @php
                            // dd($remainingDays);
                        @endphp
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-date-input" class="col-md-2 col-form-label">Date</label>

                                    <input class="form-control" type="date" name="date" value="{{ old('date') }}"
                                        id="example-date-input">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <label for="example-date-input" class="col-md-2 col-form-label">Day</label>
                                <div class="d-flex">
                                    @foreach ($remainingDays as $day)
                                        <div class="form-check form-checkbox-outline form-check-primary mb-3 me-3">
                                            <input class="form-check-input" type="checkbox" name="days[]"
                                                id="customCheckcolor{{ $loop->iteration }}" value="{{ $day }}">
                                            <label class="form-check-label" for="customCheckcolor{{ $loop->iteration }}">
                                                {{ $day }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('days')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-start-time-input" class="col-md-2 col-form-label">Start
                                        Time</label>
                                    <input class="form-control" type="time" name="start_time" value="13:45:00"
                                        id="example-start-time-input" value="{{ old('start_time') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-end-time-input" class="col-md-2 col-form-label">End Time</label>
                                    <input class="form-control" type="time" name="end_time" value="13:45:00"
                                        id="example-end-time-input" value="{{ old('end_time') }}">
                                </div>
                            </div>
                            {{-- <div class="col-md-6 mt-3">
                                <img id="image-preview" src="#" alt="Image Preview"
                                    style="max-width: 35px; height: auto; display: none;" />
                            </div> --}}
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="monthly_pass_price" class="form-label">Monthly Pass Price</label>
                                    <input type="number" class="form-control" id="monthly_pass_price"
                                        name="monthly_pass_price" placeholder="Enter Monthly Pass Price"
                                        value="{{ old('monthly_pass_price') }}" step="0.01" min="0">
                                    @error('monthly_pass_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="single_pass_price" class="form-label">Single Pass Price</label>
                                    <input type="number" class="form-control" id="single_pass_price"
                                        name="single_pass_price" placeholder="Enter Single Pass Price"
                                        value="{{ old('single_pass_price') }}" step="0.01" min="0">
                                    @error('single_pass_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="formFile" class="form-label" for="image">Image</label>
                                    <input class="form-control" type="file" id="image" name="image"
                                        accept="image/*" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                    alt="Image Preview" style="display: none;">
                            </div>
                        </div> --}}
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
        $(document).ready(function() {
            $('#location').change(function() {
                // Set up CSRF token for all AJAX requests
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // console.log($(this).val());
                // return false;
                var locationId = $(this).val(); // Get selected location ID
                if (locationId) {
                    // Make AJAX call to fetch activities
                    $.ajax({
                        url: "{{ route('admin.timeline.getLocationActivities') }}", // Your route to fetch activities
                        type: "POST",
                        data: {
                            location_id: locationId
                        },
                        success: function(data) {
                            // Clear the activities select field before appending new options
                            $('#activities').empty();

                            if (data.activities.length > 0) {
                                $.each(data.activities, function(key, activity) {
                                    $('#activities').append('<option value="' + activity
                                        .id + '">' + activity.activity_name +
                                        '</option>');
                                });
                            } else {
                                $('#activities').append(
                                    '<option value="" disabled>No activities available</option>'
                                );
                            }

                            // Refresh the select2 field
                            $('#activities').trigger('change');
                        },
                        error: function(error) {
                            console.log("Error fetching activities:", error);
                        }
                    });
                } else {
                    // Clear the activities select if no location is selected
                    $('#activities').empty().append('<option value="" disabled>Select activities</option>');
                    $('#activities').trigger('change');
                }
            });
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
                    imagePreview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
