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
            Create Location
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success" role="alert"> {{ $value }} </div>
                    @endsession
                    {{-- <h4 class="card-title mb-4">Create Location</h4> --}}

                    <form method="post" action="{{ route('admin.location.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="location_name" class="form-label">Location name</label>
                                    <input type="text" class="form-control" id="location_name" name="location_name"
                                        placeholder="Enter Location Name" value="{{ old('location_name') }}">
                                    @error('location_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="activities" class="form-label">Activities</label>

                                    <select class="select2 form-control select2-multiple" id="activities"
                                        name="activities[]" multiple="multiple" data-placeholder="Choose activities...">
                                        @forelse ($activities as $activity)
                                            <option value="{{ $activity->id }}">
                                                {{ $activity->activity_name }}</option>
                                        @empty
                                            <option value="" disabled>No Activity available</option>
                                        @endforelse
                                    </select>

                                    @error('activities')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input class="form-control" type="file" id="logo" name="logo"
                                        accept="image/*" onchange="previewLogo(event)">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <img id="logo-preview" class="rounded-circle mt-3" src="#" alt="Logo Preview"
                                    style="max-width: 100px; min-height: 100px; display: none;">
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
                                <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                    alt="Image Preview" style="display: none;">
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">Video Link</label>
                                    <input type="text" class="form-control" id="video_link" name="video_link"
                                        placeholder="Enter Video Link" value="{{ old('video_link') }}">
                                    @error('video_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="map_link" class="form-label">Map Link</label>
                                    <input type="text" class="form-control" id="map_link" name="map_link"
                                        placeholder="Enter Map Link" value="{{ old('map_link') }}">
                                    @error('map_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}


                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="latitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude"
                                        placeholder="Enter Latitude" value="{{ old('latitude') }}">
                                    @error('latitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude"
                                        placeholder="Enter Longitude" value="{{ old('longitude') }}">
                                    @error('longitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" id="description-editor"
                                        placeholder="Enter location description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea required="" name="address" class="form-control" rows="3" id="address"
                                        placeholder="Enter Your address">{{ old('address') }}</textarea>
                                    @error('address')
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
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
    <!-- Form file upload init js -->
    <!-- <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script> -->
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
        function previewLogo(event) {
            const imagePreview = document.getElementById('logo-preview');
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
