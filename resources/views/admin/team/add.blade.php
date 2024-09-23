@extends('admin.layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('css')
    <!-- Plugins css -->
    <!-- <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection
@section('content')

@component('admin.components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Create Team @endslot
@endcomponent

<div class="row">
<div class="col-xl-12">
        <div class="card">
            <div class="card-body">
            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession
                <h4 class="card-title mb-4">Create Team</h4>

                <form method="post" action="{{route('teams.create')}}" enctype="multipart/form-data">
                  @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="trainer_name" name="trainer_name" placeholder="Enter Your Name" value="{{ old('trainer_name') }}">
                                @error('trainer_name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_contact" class="form-label">Contact</label>
                                <input type="number" class="form-control" id="trainer_contact" name="trainer_contact" placeholder="Enter Your Contact Number" value="{{ old('trainer_contact') }}">
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
                                <input type="email" class="form-control" name="trainer_email" id="trainer_email" placeholder="Enter Your Email ID" value="{{ old('trainer_email') }}">
                                @error('trainer_email')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="specialisation" class="form-label">Specialisation</label>
                                <input type="text" class="form-control" id="specialisation" name="specialisation" placeholder="Enter Your Specialisation" value="{{ old('specialisation') }}">
                                @error('specialisation')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                    <label for="image" class="form-label">Image</label>
                      <div class="col-md-12">
                          <div class="dropzone" id="dropzone">
                              <div class="fallback">
                                  <input name="file" type="file" name="image" id="image" multiple="multiple">
                              </div>
                              <div class="dz-message needsclick">
                                  <div class="mb-3">
                                      <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                  </div>

                                  <h4>Drop files here or click to upload.</h4>
                              </div>
                          </div>

                          <ul class="list-unstyled mb-0" id="dropzone-preview">
                              <li class="mt-2" id="dropzone-preview-list">
                                  <div class="border rounded">
                                      <div class="d-flex p-2">
                                          <div class="flex-shrink-0 me-3">
                                              <div class="avatar-sm bg-light rounded">
                                                  <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                      src="https://img.themesbrand.com/judia/new-document.png"
                                                      alt="Dropzone-Image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <div class="pt-1">
                                                  <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                  <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                  <strong class="error text-danger" data-dz-errormessage></strong>
                                              </div>
                                          </div>
                                          <div class="flex-shrink-0 ms-3">
                                              <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                            @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div> -->
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
                                <textarea required="" name="description" class="form-control" rows="3"  id="description" placeholder="Enter Your Description">{{ old('description') }}</textarea>
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
                                <textarea required="" name="special_focus_area" class="form-control" rows="3"  id="special_focus_area" placeholder="Enter Your Special Focus Area">{{ old('special_focus_area') }}</textarea>
                                @error('special_focus_area')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experience</label>
                                <textarea required="" name="experience" class="form-control" rows="3"  id="experience" placeholder="Enter Your Experience">{{ old('experience') }}</textarea>
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
                                <textarea required="" name="certification" class="form-control" rows="3"  id="certification" placeholder="Enter Your Certification">{{ old('certification') }}</textarea>
                                @error('certification')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="classes" class="form-label">Classes</label>
                                <textarea required="" name="classes" class="form-control" rows="3" id="classes" placeholder="Enter Your Classes">{{ old('classes') }}</textarea>
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
                                <textarea required="" name="education" class="form-control" rows="3" id="education" placeholder="Enter Your Education">{{ old('education') }}</textarea>
                                @error('education')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="languages" class="form-label">Languages</label>
                                <textarea required="" name="languages" class="form-control" rows="3" id="languages" placeholder="Enter Your Languages">{{ old('languages') }}</textarea>
                                @error('languages')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
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
 <script>
    
 </script>
@endsection