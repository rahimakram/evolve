

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
            Create Timeline
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
                    <h4 class="card-title mb-4">Create Timeline</h4>

                    <form method="post" action="<?php echo e(route('admin.timeline.create')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Your Name" value="<?php echo e(old('title')); ?>">
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="location" class="form-label">Location</label>
                                    <select class="form-select" name="location" id="location">
                                        <option>Select location</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($location->id); ?>">
                                                <?php echo e($location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="" disabled>No location available</option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['location'];
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
                                    <label for="instructor" class="form-label">Instructor</label>
                                    <select class="form-select" name="instructor" id="instructor">
                                        <option disabled>Select instructor</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($instructor->id); ?>">
                                                <?php echo e($instructor->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="" disabled>No instructor available</option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['instructor'];
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
                        <div class="row" style="align-items: baseline;">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description-editor" class="form-label">Description</label>
                                    
                                    <textarea id="description-editor" name="description" class="form-control" rows="3" id="description"
                                        placeholder="Enter Your Description"></textarea>
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
                                    <label for="example-date-input" class="col-md-2 col-form-label">Date</label>

                                    <input class="form-control" type="date" name="date" value="<?php echo e(old('date')); ?>"
                                        id="example-date-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                                    <input class="form-control" type="time" name="time" value="13:45:00"
                                        id="example-time-input" value="<?php echo e(old('time')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="formFile" class="form-label" for="image">Image</label>
                                    <input class="form-control" type="file" id="image" name="image"
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
                                <img id="image-preview" class="rounded-circle avatar-xl mt-3" src="#"
                                    alt="Image Preview" style="display: none;">
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
    <script src="<?php echo e(URL::asset('build/libs/select2/js/select2.min.js')); ?>"></script>
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
        $(document).ready(function() {
            $('#location').change(function() {
                // Set up CSRF token for all AJAX requests
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // console.log($(this).val());
                // return false;
                var locationId = $(this).val(); // Get selected location ID
                if (locationId) {
                    // Make AJAX call to fetch activities
                    $.ajax({
                        url: "<?php echo e(route('admin.timeline.getLocationActivities')); ?>", // Your route to fetch activities
                        type: "POST",
                        data: {
                            location_id: locationId
                        },
                        success: function(data) {
                            // Clear the activities select field before appending new options
                            $('#activities').empty();

                            if (data.activities.length > 0) {
                                $.each(data.activities, function(key, activity) {
                                    $('#activities').append('<option value="' + activity
                                        .id + '">' + activity.activity_name +
                                        '</option>');
                                });
                            } else {
                                $('#activities').append(
                                    '<option value="" disabled>No activities available</option>'
                                );
                            }

                            // Refresh the select2 field
                            $('#activities').trigger('change');
                        },
                        error: function(error) {
                            console.log("Error fetching activities:", error);
                        }
                    });
                } else {
                    // Clear the activities select if no location is selected
                    $('#activities').empty().append('<option value="" disabled>Select activities</option>');
                    $('#activities').trigger('change');
                }
            });
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\admin\timeline\add.blade.php ENDPATH**/ ?>