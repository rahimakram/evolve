

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Sweet Alert-->
<link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('admin.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Personal Team <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
                        <div class="alert alert-success" role="alert"> <?php echo e($value); ?> </div>
                    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
                        <div class="col-sm-4">
                            <!-- <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#newContactModal"
                                    class="btn btn-success btn-rounded waves-effect waves-light addContact-modal mb-2"><i
                                        class="mdi mdi-plus me-1"></i> Create Team</button> -->
                                        <a href="<?php echo e(route('teams.add')); ?>" class="btn btn-success btn-rounded waves-effect waves-light addContact-modal mb-2"><i
                                        class="mdi mdi-plus me-1"></i> Create Team</a>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <!-- end row -->
                    <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100" id="userList-table">
                      <thead class="table-light">
                          <tr>
                              <th scope="col" style="width: 40px;">Team Name</th>
                              <th scope="col">Team Contact</th>
                              <th scope="col">Team Email</th>
                              <th scope="col">Specialisation</th>
                              <th scope="col">Description</th>
                              <th scope="col" style="width: 200px;">Status</th>
                              <th scope="col" style="width: 200px;">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <!-- Assuming 'name', 'contact', 'email', 'specialisation', and 'description' fields exist in the trainers, trainer_detail, or trainer_profile tables -->
                                  <td><?php echo e($trainer->full_name); ?></td> <!-- Trainer's name -->
                                  <td><?php echo e($trainer->phone == "" ? 'N/A' : $trainer->phone); ?></td> <!-- Trainer's contact -->
                                  <td><?php echo e($trainer->email ?? 'N/A'); ?></td> <!-- Trainer's email -->
                                  <td><?php echo e($trainer->work_title ?? 'N/A'); ?></td> <!-- Trainer's specialization -->
                                  <td><?php echo e($trainer->bio_description ?? 'N/A'); ?></td> <!-- Trainer's description -->
                                  
                                  <td>
                                        <?php if($trainer->status == 'active'): ?>
                                            <!-- Deactivate Button -->
                                            <button onclick="confirmDeactivate(<?php echo e($trainer->trainer_id); ?>)" type="button" class="btn btn-sm btn-danger waves-effect waves-light">
                                                <i class="bx bx-block font-size-16 align-middle me-2"></i> Deactivate
                                            </button>
                                            <form style="display:none" id="deactivate_trainer_form_<?php echo e($trainer->trainer_id); ?>" action="<?php echo e(route('teams.deactivate',$trainer->trainer_id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        <?php else: ?>
                                            <!-- Activate Button -->
                                            <button onclick="confirmActivate(<?php echo e($trainer->trainer_id); ?>)" type="button" class="btn btn-sm btn-success waves-effect waves-light">
                                                <i class="bx bx-check-circle font-size-16 align-middle me-2"></i> Activate
                                            </button>
                                            <form style="display:none" id="activate_trainer_form_<?php echo e($trainer->trainer_id); ?>" action="<?php echo e(route('teams.activate',$trainer->trainer_id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        <?php endif; ?>
                                    </td>

                                  
                                  <td>
                                      <!-- Action Buttons: Edit & Delete -->
                                      <a href="<?php echo e(route('teams.edit',$trainer->trainer_id)); ?>" class="btn btn-sm btn-success waves-effect waves-light">
                                          <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                        </a>
                                      <button type="button" onclick="confirmDelete(<?php echo e($trainer->trainer_id); ?>)" class="btn btn-sm btn-danger waves-effect waves-light">
                                          <i class="bx bx-trash font-size-16 align-middle me-2"></i> Delete
                                        </button>
                                        <form style="display:hidden" id="delete_trainer_form_<?php echo e($trainer->trainer_id); ?>" action="<?php echo e(route('teams.delete',$trainer->trainer_id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                  </td>
                              </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>


                        <!-- end table -->
                    </div>
                    <!-- Pagination Links -->
                      <div class="d-flex justify-content-end mt-4">
                      <?php echo e($trainers->onEachSide(1)->links('pagination::bootstrap-5')); ?>

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
                                                <img src="<?php echo e(URL::asset('build/images/users/user-dummy-img.jpg')); ?>" id="member-img"
                                                    class="avatar-md rounded-circle h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username-input" class="form-label">User Name</label>
                                    <input type="text" id="username-input" class="form-control" placeholder="Enter name"
                                        required />
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<!-- Sweet Alerts js -->
<script src="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

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
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, deactivate it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, submit the form
                document.getElementById('deactivate_trainer_form_' + trainerId).submit();
            }
        })
    }

    function confirmActivate(trainerId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to activate this trainer!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, activate it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('activate_trainer_form_' + trainerId).submit();
            }
        })
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\team\index.blade.php ENDPATH**/ ?>