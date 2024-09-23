

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <!-- <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet" type="text/css" /> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('admin.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Create Team <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
<div class="col-xl-12">
        <div class="card">
            <div class="card-body">
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
                <h4 class="card-title mb-4">Create Team</h4>

                <form method="post" action="<?php echo e(route('teams.create')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="trainer_name" name="trainer_name" placeholder="Enter Your Name" value="<?php echo e(old('trainer_name')); ?>">
                                <?php $__errorArgs = ['trainer_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_contact" class="form-label">Contact</label>
                                <input type="number" class="form-control" id="trainer_contact" name="trainer_contact" placeholder="Enter Your Contact Number" value="<?php echo e(old('trainer_contact')); ?>">
                                <?php $__errorArgs = ['trainer_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="trainer_email" id="trainer_email" placeholder="Enter Your Email ID" value="<?php echo e(old('trainer_email')); ?>">
                                <?php $__errorArgs = ['trainer_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="specialisation" class="form-label">Specialisation</label>
                                <input type="text" class="form-control" id="specialisation" name="specialisation" placeholder="Enter Your Specialisation" value="<?php echo e(old('specialisation')); ?>">
                                <?php $__errorArgs = ['specialisation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div> -->
                    <div class="row" style="align-items: baseline;">
                        <div class="col-md-6">
                            <div class="mt-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea required="" name="description" class="form-control" rows="3"  id="description" placeholder="Enter Your Description"><?php echo e(old('description')); ?></textarea>
                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="special_focus_area" class="form-label">Special Focus Area</label>
                                <textarea required="" name="special_focus_area" class="form-control" rows="3"  id="special_focus_area" placeholder="Enter Your Special Focus Area"><?php echo e(old('special_focus_area')); ?></textarea>
                                <?php $__errorArgs = ['special_focus_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experience</label>
                                <textarea required="" name="experience" class="form-control" rows="3"  id="experience" placeholder="Enter Your Experience"><?php echo e(old('experience')); ?></textarea>
                                <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="certification" class="form-label">Certification</label>
                                <textarea required="" name="certification" class="form-control" rows="3"  id="certification" placeholder="Enter Your Certification"><?php echo e(old('certification')); ?></textarea>
                                <?php $__errorArgs = ['certification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="classes" class="form-label">Classes</label>
                                <textarea required="" name="classes" class="form-control" rows="3" id="classes" placeholder="Enter Your Classes"><?php echo e(old('classes')); ?></textarea>
                                <?php $__errorArgs = ['classes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="education" class="form-label">Education</label>
                                <textarea required="" name="education" class="form-control" rows="3" id="education" placeholder="Enter Your Education"><?php echo e(old('education')); ?></textarea>
                                <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="languages" class="form-label">Languages</label>
                                <textarea required="" name="languages" class="form-control" rows="3" id="languages" placeholder="Enter Your Languages"><?php echo e(old('languages')); ?></textarea>
                                <?php $__errorArgs = ['languages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Plugins js -->
<!-- <script src="<?php echo e(URL::asset('build/libs/dropzone/dropzone-min.js')); ?>"></script> -->

<!-- Form file upload init js -->
<!-- <script src="<?php echo e(URL::asset('build/js/pages/form-file-upload.init.js')); ?>"></script> -->
 <script>
    
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\team\add.blade.php ENDPATH**/ ?>