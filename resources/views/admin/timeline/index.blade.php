@extends('admin.layouts.master')

@section('title')
    @lang('translation.Dashboards')
@endsection
@section('css')
    <!-- Sweet Alert-->
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Timetable
        @endslot
    @endcomponent
    {{-- {{ $timelines }} --}}
    <div class="row">
        @php
            // dd($timelines);
        @endphp
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        {{-- @session('success')
                            <div class="alert alert-success" role="alert"> {{ $value }} </div>
                        @endsession --}}
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="{{ route('admin.timeline.add') }}"
                                    class="btn btn-success btn-rounded waves-effect waves-light addContact-modal mb-2"><i
                                        class="mdi mdi-plus me-1"></i> Create Timetable</a>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <!-- end row -->
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100"
                            id="userList-table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 40px;">Title</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Instructor</th>
                                    <th scope="col">Date</th>
                                    {{-- <th scope="col">Image</th> --}}
                                    <th scope="col" style="width: 200px;">Status</th>
                                    <th scope="col" style="width: 200px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($timelines as $timeline)
                                    <tr>
                                        <!-- Assuming 'name', 'contact', 'email', 'specialisation', and 'description' fields exist in the trainers, trainer_detail, or trainer_profile tables -->
                                        <td>{{ $timeline->title }}</td> <!-- Trainer's name -->
                                        <td>{{ $timeline->location_name ? $timeline->location_name : 'N/A' }}</td>
                                        <!-- Trainer's contact -->
                                        <td>{{ $timeline->instructor_name ?? 'N/A' }}</td> <!-- Trainer's email -->
                                        <td>{{ $timeline->date ?? 'N/A' }}
                                            {{-- @if (!empty($timeline->specialization_names))
                                                {{ implode(', ', $timeline->specialization_names->toArray()) }}
                                            @else
                                                N/A
                                            @endif --}}
                                        </td> <!-- Trainer's specialization -->

                                        {{-- <td><img class="rounded-circle header-profile-user"
                                                src="{{ asset('storage/' . $timeline->image) }}"></td> --}}
                                        <!-- Trainer's description -->

                                        <td>
                                            @if ($timeline->status == 'Y')
                                                <button onclick="confirmDeactivate({{ $timeline->id }})" type="button"
                                                    class="btn btn-sm btn-success waves-effect waves-light">

                                                    Active
                                                </button>
                                                <form style="display:none" id="deactivate_trainer_form_{{ $timeline->id }}"
                                                    action="{{ route('admin.timeline.deactivate', $timeline->id) }}"
                                                    method="post">
                                                    @csrf
                                                </form>
                                            @else
                                                <!-- Deactivate Button -->
                                                <button onclick="confirmActivate({{ $timeline->id }})" type="button"
                                                    class="btn btn-sm btn-danger waves-effect waves-light">
                                                    Deactive
                                                </button>
                                                <!-- Activate Button -->

                                                <form style="display:none" id="activate_trainer_form_{{ $timeline->id }}"
                                                    action="{{ route('admin.timeline.activate', $timeline->id) }}"
                                                    method="post">
                                                    @csrf
                                                </form>
                                            @endif
                                        </td>


                                        <td>
                                            <a href="{{ route('admin.timeline.edit', $timeline->id) }}"
                                                class="btn btn-sm waves-effect btn-success waves-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                <i class="bx bx-edit font-size-16 align-middle"></i>
                                            </a>
                                            <button type="button" onclick="confirmDelete({{ $timeline->id }})"
                                                class="btn btn-sm waves-effect btn-danger waves-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                <i class="bx bx-trash font-size-16 align-middle"></i>
                                            </button>
                                            <form style="display:hidden" id="delete_trainer_form_{{ $timeline->id }}"
                                                action="{{ route('admin.timeline.delete', $timeline->id) }}"
                                                method="post">
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>


                        <!-- end table -->
                    </div>
                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-end mt-4">
                        {{ $timelines->onEachSide(1)->links('pagination::bootstrap-5') }}
                        <!-- Displays pagination controls -->
                    </div>
                    <!-- end table responsive -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newContactModal" tabindex="-1" aria-labelledby="newContactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContactModalLabel">Add Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createContact-form" id="createContact-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" class="form-control" id="userid-input">
                                <div class="text-center mb-4">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute bottom-0 end-0">
                                            <label for="member-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select Member Image">
                                                <div class="avatar-xs">
                                                    <div
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="bx bxs-image-alt"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="member-image-input"
                                                type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-circle">
                                                <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}"
                                                    id="member-img" class="avatar-md rounded-circle h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username-input" class="form-label">User Name</label>
                                    <input type="text" id="username-input" class="form-control"
                                        placeholder="Enter name" required />
                                    <div class="invalid-feedback">Please enter a name.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Designation</label>
                                    <input type="text" id="designation-input" class="form-control"
                                        placeholder="Enter Designation" required />
                                    <div class="invalid-feedback">Please enter a designation.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email-input" class="form-label">Email</label>
                                    <input type="email" id="email-input" class="form-control"
                                        placeholder="Enter email" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tag-input" class="form-label">Tags</label>
                                    <select class="select2 form-control select2-multiple" id="tag-input"
                                        multiple="multiple" data-placeholder="Choose ...">
                                        <option value="Photoshop">Photoshop</option>
                                        <option value="illustrator">illustrator</option>
                                        <option value="Html">Html</option>
                                        <option value="Css">Css</option>
                                        <option value="Javascript">Javascript</option>
                                        <option value="Php">Php</option>
                                        <option value="Java">Java</option>
                                        <option value="Ruby">Ruby</option>
                                        <option value="Python">Python</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addContact-btn" class="btn btn-success">Add
                                        Customer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end newContactModal -->


    <!-- end row -->
@endsection
@section('script')
    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        function confirmDelete(trainerId) {
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
                    // If the user confirms, submit the form
                    document.getElementById('delete_trainer_form_' + trainerId).submit();
                }
            })
        }

        function confirmDeactivate(trainerId) {
            document.getElementById('deactivate_trainer_form_' + trainerId).submit();
            // Swal.fire({
            //     title: 'Are you sure?',
            //     text: "You won't be able to revert this!",
            //     icon: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, deactivate it!'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         // If the user confirms, submit the form
            //         document.getElementById('deactivate_trainer_form_' + trainerId).submit();
            //     }
            // })
        }

        function confirmActivate(trainerId) {
            document.getElementById('activate_trainer_form_' + trainerId).submit();
            // Swal.fire({
            //     title: 'Are you sure?',
            //     text: "You want to activate this trainer!",
            //     icon: 'info',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, activate it!'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         document.getElementById('activate_trainer_form_' + trainerId).submit();
            //     }
            // })
        }
    </script>
@endsection
