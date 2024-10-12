

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Dashboards'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <!-- <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet" type="text/css" /> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('admin.components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dashboard
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Create Specialization
        <?php $__env->endSlot(); ?>
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
                    <h4 class="card-title mb-4">Create Specialization</h4>

                    <form method="post" action="<?php echo e(route('admin.specialization.create')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="specialization_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="specialization_name"
                                        name="specialization_name" placeholder="Enter Your Name"
                                        value="<?php echo e(old('specialization_name')); ?>">
                                    <?php $__errorArgs = ['specialization_name'];
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
    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\specialization\add.blade.php ENDPATH**/ ?>