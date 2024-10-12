

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
            Edit Team
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Team</h4>

                    <form method="post" action="<?php echo e(route('admin.teams.update', $trainer->u_id)); ?>"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="trainer_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
                                        placeholder="Enter Your Name"
                                        value="<?php echo e(old('trainer_name') ? old('trainer_name') : $trainer->name); ?>">
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
                                    <input type="number" class="form-control" id="trainer_contact" name="trainer_contact"
                                        placeholder="Enter Your Contact Number"
                                        value="<?php echo e(old('trainer_contact') ? old('trainer_contact') : $trainer->contact); ?>">
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
                                    <input type="email" class="form-control" name="trainer_email" id="trainer_email"
                                        placeholder="Enter Your Email ID"
                                        value="<?php echo e(old('trainer_email') ? old('trainer_email') : $trainer->email); ?>">
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

                                    <select class="select2 form-control select2-multiple" id="specialisation"
                                        name="specialisation[]" multiple="multiple"
                                        data-placeholder="Choose specializations...">
                                        <?php $__empty_1 = true; $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($specialization->id); ?>"
                                                <?php if(isset($selectedSpecializations) && in_array($specialization->id, $selectedSpecializations)): ?> selected <?php endif; ?>>
                                                <?php echo e($specialization->specialization_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="" disabled>No Specialization available</option>
                                        <?php endif; ?>
                                    </select>

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
                                <?php if($trainer->avatar): ?>
                                    <img id="image-preview" src="<?php echo e(asset('storage/' . $trainer->avatar)); ?>"
                                        alt="Current Image" class="rounded-circle mt-3 avatar-xl" />
                                <?php else: ?>
                                    <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                        alt="Image Preview" style="display: none;" />
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="special_focus_area" class="form-label">Special Focus Area</label>
                                    <textarea required="" name="special_focus_area" class="form-control" rows="3" id="special_focus_area"
                                        placeholder="Enter Your Special Focus Area"><?php echo e(old('special_focus_area') ? old('special_focus_area') : jsonToCommaSeparatedString($trainer->special_focus_area)); ?></textarea>
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

                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" id="description-editor"
                                        placeholder="Enter Your Description"><?php echo e(old('description') ? old('description') : $trainer->description); ?></textarea>
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
                                    <label for="experience" class="form-label">Experience</label>
                                    <textarea required="" name="experience" class="form-control" rows="3" id="experience"
                                        placeholder="Enter Your Experience"><?php echo e(old('experience') ? old('experience') : jsonToCommaSeparatedString($trainer->experience)); ?></textarea>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="certification" class="form-label">Certification</label>
                                    <textarea required="" name="certification" class="form-control" rows="3" id="certification"
                                        placeholder="Enter Your Certification"><?php echo e(old('certification') ? old('certification') : jsonToCommaSeparatedString($trainer->certifications)); ?></textarea>
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

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="classes" class="form-label">Classes</label>
                                    <textarea required="" name="classes" class="form-control" rows="3" id="classes"
                                        placeholder="Enter Your Classes"><?php echo e(old('classes') ? old('classes') : jsonToCommaSeparatedString($trainer->classes)); ?></textarea>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="education" class="form-label">Education</label>
                                    <textarea required="" name="education" class="form-control" rows="3" id="education"
                                        placeholder="Enter Your Education"><?php echo e(old('education') ? old('education') : jsonToCommaSeparatedString($trainer->education)); ?></textarea>
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

                        </div>
                        <div class="row" style="align-items: baseline">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="languages" class="form-label">Languages</label>
                                    <textarea required="" name="languages" class="form-control" rows="3" id="languages"
                                        placeholder="Enter Your Languages"><?php echo e(old('languages') ? old('languages') : jsonToCommaSeparatedString($trainer->languages)); ?></textarea>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-date-input" class="col-md-2 col-form-label">DOB</label>

                                    <input class="form-control" type="date" name="dob"
                                        value="<?php echo e(old('dob') ? old('dob') : \Carbon\Carbon::parse($trainer->dob)->format('Y-m-d')); ?>"
                                        id="example-date-input">
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

    <script src="<?php echo e(URL::asset('build/libs/select2/js/select2.min.js')); ?>"></script>
    <!-- Form file upload init js -->
    <!-- <script src="<?php echo e(URL::asset('build/js/pages/form-file-upload.init.js')); ?>"></script> -->
    <!-- form advanced init -->
    <script src="<?php echo e(URL::asset('build/js/pages/form-advanced.init.js')); ?>"></script>

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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\team\edit.blade.php ENDPATH**/ ?>