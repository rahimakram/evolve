

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <!-- <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet" type="text/css" /> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('admin.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit Team <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
<div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Create Team</h4>

                <form method="post" action="<?php echo e(route('teams.update',$trainer->trainer_id)); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="trainer_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="trainer_name" name="trainer_name" placeholder="Enter Your Name" value="<?php echo e(old('trainer_name') ? old('trainer_name') : $trainer->full_name); ?>">
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
                                <input type="number" class="form-control" id="trainer_contact" name="trainer_contact" placeholder="Enter Your Contact Number" value="<?php echo e(old('trainer_contact') ? old('trainer_contact') : $trainer->phone); ?>">
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
                                <input type="email" class="form-control" name="trainer_email" id="trainer_email" placeholder="Enter Your Email ID" value="<?php echo e(old('trainer_email') ? old('trainer_email') : $trainer->email); ?>">
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
                                <textarea required="" name="description" class="form-control" rows="3"  id="description" placeholder="Enter Your Description"><?php echo e(old('description') ? old('description') : $trainer->bio_description); ?></textarea>
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
                                <textarea required="" name="special_focus_area" class="form-control" rows="3"  id="special_focus_area" placeholder="Enter Your Special Focus Area"><?php echo e(old('special_focus_area') ? old('special_focus_area') : $trainer->special_focus_area); ?></textarea>
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
                                <textarea required="" name="experience" class="form-control" rows="3"  id="experience" placeholder="Enter Your Experience"><?php echo e(old('experience') ? old('experience') : $trainer->experience); ?></textarea>
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
                                <textarea required="" name="certification" class="form-control" rows="3"  id="certification" placeholder="Enter Your Certification"><?php echo e(old('certification') ? old('certification') : $trainer->certifications); ?></textarea>
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
                                <textarea required="" name="classes" class="form-control" rows="3" id="classes" placeholder="Enter Your Classes"><?php echo e(old('classes') ? old('classes')  : $trainer->classes); ?></textarea>
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
                                <textarea required="" name="education" class="form-control" rows="3" id="education" placeholder="Enter Your Education"><?php echo e(old('education') ? old('education') : $trainer->education); ?></textarea>
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
                                <textarea required="" name="languages" class="form-control" rows="3" id="languages" placeholder="Enter Your Languages"><?php echo e(old('languages') ? old('languages') : $trainer->languages); ?></textarea>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\team\edit.blade.php ENDPATH**/ ?>