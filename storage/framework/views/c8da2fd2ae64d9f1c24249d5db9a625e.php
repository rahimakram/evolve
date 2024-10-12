

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BANNER -->
    <section class="banner ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Our Team</h1>
                        <p>To complete our mission of giving you the highest standard of training, we select the right
                            people. Our team is our family. We hire humans, not just employees. We look at the core values
                            of the person, not just their practical skillset.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <section id="our-team-gallery" class="gallery ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">

            <div class="mb-64">
                <div class="mxw-800 text-center m-auto">
                    <h2>Meet Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a mattis elit. Nunc vel lectus libero.
                        Sed quis sem ac sem imperdiet rutrum. Phasellus vel pulvinar tortor, ac scelerisque.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav id="filter-team" class="filter-gallery">
                        <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="teal-all-tab" data-bs-toggle="tab"
                                data-bs-target="#teal-all" type="button" role="tab" aria-controls="teal-all"
                                aria-selected="true">View All</button>
                            <?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link" id="<?php echo e(Str::slug($specialization->specialization_name)); ?>-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#<?php echo e(Str::slug($specialization->specialization_name)); ?>" type="button"
                                    role="tab" aria-controls="<?php echo e(Str::slug($specialization->specialization_name)); ?>"
                                    aria-selected="false"><?php echo e($specialization->specialization_name); ?></button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="teal-all" role="tabpanel"
                            aria-labelledby="teal-all-tab">
                            <div class="row mb-64">
                                <?php $__empty_1 = true; $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    
                                    <div class="col-md-2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn trainer-card" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop-701" data-name="<?php echo e($trainer->name); ?>"
                                            data-avatar="<?php echo e(URL::asset('storage/' . $trainer->avatar)); ?>"
                                            data-experience="<?php echo e(jsonToCommaSeparated($trainer->experience)); ?>"
                                            data-languages="<?php echo e($trainer->languages); ?>"
                                            data-specializations="<?php echo e($trainer->specialization_names ? implode(', ', $trainer->specialization_names->toArray()) : 'N/A'); ?>"
                                            data-focus-areas="<?php echo e($trainer->special_focus_area ? jsonToCommaSeparated($trainer->special_focus_area) : 'No Focus Areas'); ?>"
                                            data-classes="<?php echo e($trainer->classes ? jsonToCommaSeparated($trainer->classes) : 'No Classes'); ?>"
                                            data-certifications="<?php echo e($trainer->certifications ? jsonToCommaSeparated($trainer->certifications) : 'No Certifications'); ?>"
                                            data-education="<?php echo e($trainer->education ? jsonToCommaSeparated($trainer->education) : 'No Education'); ?>">
                                            <div class="card-img-box text-center">
                                                <img src="<?php echo e(URL::asset('storage/' . $trainer->avatar)); ?>"
                                                    class="img-fluid" alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <h5 class="card-title"><?php echo e($trainer->name); ?></h5>
                                                <p class="card-text">
                                                    <?php if(!empty($trainer->specialization_names)): ?>
                                                        <?php echo e(implode(', ', $trainer->specialization_names->toArray())); ?>

                                                    <?php else: ?>
                                                        N/A
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-md-2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-701"
                                            data-name="<?php echo e($trainer->name); ?>"
                                            data-avatar="<?php echo e(URL::asset('storage/' . $trainer->avatar)); ?>"
                                            data-experience="<?php echo e($trainer->experience); ?> years experience"
                                            data-languages="<?php echo e($trainer->languages); ?>"
                                            data-specializations="<?php echo e($trainer->specialization_names ? implode(', ', $trainer->specialization_names->toArray()) : 'N/A'); ?>"
                                            data-focus-areas="<?php echo e($trainer->focus_areas ? implode(', ', $trainer->focus_areas) : 'No Focus Areas'); ?>"
                                            data-classes="<?php echo e($trainer->classes ? implode(', ', $trainer->classes) : 'No Classes'); ?>"
                                            data-certifications="<?php echo e($trainer->certifications ? implode(', ', $trainer->certifications) : 'No Certifications'); ?>"
                                            data-education="<?php echo e($trainer->education ? implode(', ', $trainer->education) : 'No Education'); ?>">
                                            <div class="card-img-box text-center">
                                                <img src="<?php echo e(URL::asset('dist/images/team/team-1.png')); ?>"
                                                    class="img-fluid" alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Adeem</h5>
                                                <p class="card-text">Personal Trainer & Brazilian Jiu-Jitsu Coach | Group
                                                    Fitness Instructor</p>
                                            </div>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Specialization Tabs Content -->
                        <?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade" id="<?php echo e(Str::slug($specialization->specialization_name)); ?>"
                                role="tabpanel"
                                aria-labelledby="<?php echo e(Str::slug($specialization->specialization_name)); ?>-tab">
                                <div class="row mb-64">
                                    <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(in_array($specialization->specialization_name, $trainer->specialization_names->toArray())): ?>
                                            <div class="col-md-2" data-wow-delay="100ms" data-wow-duration="0.5s">
                                                <div class="card btn trainer-card" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop-701" data-name="<?php echo e($trainer->name); ?>"
                                                    data-avatar="<?php echo e(URL::asset('storage/' . $trainer->avatar)); ?>"
                                                    data-experience="<?php echo e(jsonToCommaSeparated($trainer->experience)); ?>"
                                                    data-languages="<?php echo e($trainer->languages); ?>"
                                                    data-specializations="<?php echo e($trainer->specialization_names ? implode(', ', $trainer->specialization_names->toArray()) : 'N/A'); ?>"
                                                    data-focus-areas="<?php echo e($trainer->special_focus_area ? jsonToCommaSeparated($trainer->special_focus_area) : 'No Focus Areas'); ?>"
                                                    data-classes="<?php echo e($trainer->classes ? jsonToCommaSeparated($trainer->classes) : 'No Classes'); ?>"
                                                    data-certifications="<?php echo e($trainer->certifications ? jsonToCommaSeparated($trainer->certifications) : 'No Certifications'); ?>"
                                                    data-education="<?php echo e($trainer->education ? jsonToCommaSeparated($trainer->education) : 'No Education'); ?>">
                                                    <div class="card-img-box text-center">
                                                        <img src="<?php echo e(URL::asset('storage/' . $trainer->avatar)); ?>"
                                                            class="img-fluid" alt="<?php echo e($trainer->name); ?>">
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"><?php echo e($trainer->name); ?></h5>
                                                        <p class="card-text">
                                                            <?php echo e(implode(', ', $trainer->specialization_names->toArray())); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="ready-to-evolve ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="ready-to-evolve-content mxw-800 p64">
                        <h3>Ready to Plan Your Next Event?</h3>
                        <p>Give us a call, and let’s discuss how we can create an inspiring and motivating experience that
                            will propel your team forward for the rest of the year.</p>
                        <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img
                                    src="<?php echo e(URL::asset('dist/images/fitness-classes/Right.png')); ?>" class="img-fluid"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shared Modal -->
    <div class="modal model-team-img-pop fade" id="staticBackdrop-701" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop-701Label" aria-hidden="true">
        <div class="modal-dialog mxw-800 text-center">
            <div class="modal-content ptb-48-64">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="loc-model-body">
                    <div class="team-pop1 mb-32">
                        <div class="t-pop-img">
                            <img id="trainer-avatar" src="" class="img-fluid" alt="">
                        </div>
                        <div class="t-pop-content">
                            <h4 id="trainer-name"></h4>
                            <h6 class="">
                                <span id="trainer-experience"></span>
                                <span class="px-3">•</span>
                                <span id="trainer-languages"></span>
                            </h6>
                            <div id="trainer-specializations" class="find-your-tab"></div>
                        </div>
                    </div>

                    <div class="team-pop2">
                        <!-- Special Focus Areas -->
                        <div class="team-pop-area p-32">
                            <h6 class="mb-16">SPECIAL FOCUS AREAS</h6>
                            <ul class="ps-32" id="trainer-focus-areas"></ul>
                        </div>

                        <!-- Classes -->
                        <div class="team-pop-area p-32">
                            <h6 class="mb-16">CLASSES</h6>
                            <ul class="ps-32" id="trainer-classes"></ul>
                        </div>

                        <!-- Certifications -->
                        <div class="team-pop-area p-32">
                            <h6 class="mb-16">CERTIFICATIONS</h6>
                            <ul class="ps-32" id="trainer-certifications"></ul>
                        </div>

                        <!-- Education -->
                        <div class="team-pop-area p-32">
                            <h6 class="mb-16">EDUCATION</h6>
                            <ul class="ps-32" id="trainer-education"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            // When a trainer card is clicked
            $('.trainer-card').on('click', function() {
                // $('#nav-tabContent').on('click', '.trainer-card', function() {
                var name = $(this).data('name');
                var avatar = $(this).data('avatar');
                var experience = $(this).data('experience');
                var languages = $(this).data('languages');
                var specializations = $(this).data('specializations');
                var focusAreas = $(this).data('focus-areas');
                var classes = $(this).data('classes');
                var certifications = $(this).data('certifications');
                var education = $(this).data('education');

                $('#trainer-name').text(name);
                $('#trainer-avatar').attr('src', avatar);
                $('#trainer-experience').text(experience);
                $('#trainer-languages').text(languages);
                $('#trainer-specializations').html(specializations.split(', ').map(function(item) {
                    return '<div class="btn-find">' + item + '</div>';
                }).join(''));
                $('#trainer-focus-areas').html(focusAreas.split(', ').map(function(item) {
                    return '<li><h6>' + item + '</h6></li>';
                }).join(''));
                $('#trainer-classes').html(classes.split(', ').map(function(item) {
                    return '<li><h6>' + item + '</h6></li>';
                }).join(''));
                $('#trainer-certifications').html(certifications.split(', ').map(function(item) {
                    return '<li><h6>' + item + '</h6></li>';
                }).join(''));
                $('#trainer-education').html(education.split(', ').map(function(item) {
                    return '<li><h6>' + item + '</h6></li>';
                }).join(''));
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\our-team.blade.php ENDPATH**/ ?>