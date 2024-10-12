

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Dashboards'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <!-- <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet" type="text/css" /> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('admin.components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dashboard
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Edit Location
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Location</h4>

                    <form method="post" action="<?php echo e(route('admin.location.update', $location->id)); ?>"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="location_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="location_name" name="location_name"
                                        placeholder="Enter Your Name"
                                        value="<?php echo e(old('location_name') ? old('location_name') : $location->name); ?>">
                                    <?php $__errorArgs = ['location_name'];
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
                                    <label for="activities" class="form-label">Activities</label>

                                    <select class="select2 form-control select2-multiple" id="activities"
                                        name="activities[]" multiple="multiple" data-placeholder="Choose activities...">
                                        <?php $__empty_1 = true; $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($activity->id); ?>"
                                                <?php if(isset($selectedactivities) && in_array($activity->id, $selectedactivities)): ?> selected <?php endif; ?>>
                                                <?php echo e($activity->activity_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="" disabled>No Activity available</option>
                                        <?php endif; ?>
                                    </select>

                                    <?php $__errorArgs = ['activities'];
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
                                <div class="mt-3">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input class="form-control" type="file" id="logo" name="logo"
                                        accept="image/*" onchange="previewLogo(event)">
                                    <?php $__errorArgs = ['logo'];
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
                                <!-- Show current image if available -->
                                <?php if($location->logo): ?>
                                    <img id="logo-preview" src="<?php echo e(asset('storage/' . $location->logo)); ?>"
                                        alt="Current Image" class="rounded-circle avatar-xl mt-3" />
                                <?php else: ?>
                                    <img id="logo-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                        alt="Logo Preview" style="display: none;" />
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        accept="image/*" onchange="previewImage(event)">
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
                                <!-- Show current image if available -->
                                <?php if($location->image): ?>
                                    <img id="image-preview" src="<?php echo e(asset('storage/' . $location->image)); ?>"
                                        alt="Current Image" class="rounded-circle avatar-xl mt-3" />
                                <?php else: ?>
                                    <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                        alt="Image Preview" style="display: none;" />
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">Video Link</label>
                                    <input type="text" class="form-control" id="video_link" name="video_link"
                                        placeholder="Enter Video Link"
                                        value="<?php echo e(old('video_link') ? old('video_link') : $location->video_link); ?>">
                                    <?php $__errorArgs = ['video_link'];
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
                                    <label for="map_link" class="form-label">Map Link</label>
                                    <input type="text" class="form-control" id="map_link" name="map_link"
                                        placeholder="Enter Map Link"
                                        value="<?php echo e(old('map_link') ? old('map_link') : $location->map_link); ?>">
                                    <?php $__errorArgs = ['map_link'];
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
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" id="description-editor"
                                        placeholder="Enter Your description"><?php echo e(old('description') ? old('description') : $location->description); ?></textarea>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea required="" name="address" class="form-control" rows="3" id="address"
                                        placeholder="Enter Your address"><?php echo e(old('address') ? old('address') : $location->address); ?></textarea>
                                    <?php $__errorArgs = ['address'];
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
    <script src="<?php echo e(URL::asset('build/libs/select2/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/form-advanced.init.js')); ?>"></script>
    <!-- Plugins js -->
    <!-- <script src="<?php echo e(URL::asset('build/libs/dropzone/dropzone-min.js')); ?>"></script> -->

    <!-- Form file upload init js -->
    <!-- <script src="<?php echo e(URL::asset('build/js/pages/form-file-upload.init.js')); ?>"></script> -->

    <!--tinymce js-->
    <script src="<?php echo e(URL::asset('build/libs/tinymce/tinymce.min.js')); ?>"></script>

    <!-- init js -->
    <script src="<?php echo e(URL::asset('build/js/pages/form-editor.init.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\location\edit.blade.php ENDPATH**/ ?>