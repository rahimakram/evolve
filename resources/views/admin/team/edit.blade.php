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
            Edit Team
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Team</h4>

                    <form method="post" action="{{ route('admin.teams.update', $trainer->u_id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
                                        placeholder="Enter Your Name"
                                        value="{{ old('trainer_name') ? old('trainer_name') : $trainer->name }}">
                                    @error('trainer_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- {{ $trainer->contact }} --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_contact" class="form-label">Contact</label>
                                    <input type="number" class="form-control" id="trainer_contact" name="trainer_contact"
                                        placeholder="Enter Your Contact Number"
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
                                        placeholder="Enter Your Email ID"
                                        value="{{ old('trainer_email') ? old('trainer_email') : $trainer->email }}">
                                    @error('trainer_email')
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
                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea required="" name="description" class="form-control" rows="3" id="description"
                                        placeholder="Enter Your Description">{{ old('description') ? old('description') : $trainer->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="special_focus_area" class="form-label">Special Focus Area</label>
                                    <textarea required="" name="special_focus_area" class="form-control" rows="3" id="special_focus_area"
                                        placeholder="Enter Your Special Focus Area">{{ old('special_focus_area') ? old('special_focus_area') : $trainer->special_focus_area }}</textarea>
                                    @error('special_focus_area')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="experience" class="form-label">Experience</label>
                                    <textarea required="" name="experience" class="form-control" rows="3" id="experience"
                                        placeholder="Enter Your Experience">{{ old('experience') ? old('experience') : $trainer->experience }}</textarea>
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="certification" class="form-label">Certification</label>
                                    <textarea required="" name="certification" class="form-control" rows="3" id="certification"
                                        placeholder="Enter Your Certification">{{ old('certification') ? old('certification') : $trainer->certifications }}</textarea>
                                    @error('certification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="classes" class="form-label">Classes</label>
                                    <textarea required="" name="classes" class="form-control" rows="3" id="classes"
                                        placeholder="Enter Your Classes">{{ old('classes') ? old('classes') : $trainer->classes }}</textarea>
                                    @error('classes')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>
                                    <textarea required="" name="education" class="form-control" rows="3" id="education"
                                        placeholder="Enter Your Education">{{ old('education') ? old('education') : $trainer->education }}</textarea>
                                    @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="languages" class="form-label">Languages</label>
                                    <textarea required="" name="languages" class="form-control" rows="3" id="languages"
                                        placeholder="Enter Your Languages">{{ old('languages') ? old('languages') : $trainer->languages }}</textarea>
                                    @error('languages')
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
    <!-- Form file upload init js -->
    <!-- <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script> -->
    <!-- form advanced init -->
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
    <script></script>
@endsection
