

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
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Join a Class</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Join a Class</h1>
                        <p>From high-intensity interval training to calming slow flow sessions, we offer a diverse range of
                            group classes throughout the week to keep you motivated and engaged. Our expert instructors lead
                            each session with enthusiasm and expertise, ensuring you get the most out of every workout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="class-schedule ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="mb-64">
                <div class="mxw-800 text-center m-auto">
                    <h2>Class Schedule - July 2024</h2>
                    <p>Last updated: July 8, 2024</p>
                </div>
            </div>

            <div class="row wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                <div class="col-12">
                    <nav id="filter-schedule" class="filter-gallery">
                        <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="schedule-all-tab" data-bs-toggle="tab"
                                data-bs-target="#schedule-all" type="button" role="tab" aria-controls="schedule-all"
                                aria-selected="true">View All</button>
                            <?php $__currentLoopData = $day_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link" id="sundays-tab" data-bs-toggle="tab" data-bs-target="#sundays"
                                    type="button" role="tab" aria-controls="sundays"
                                    aria-selected="false"><?php echo e($day); ?></button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="schedule-all" role="tabpanel"
                            aria-labelledby="schedule-all-tab">
                            <!-- Sundays -->
                            <?php $__currentLoopData = $grouped_timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day => $day_timelines): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row mb-64">
                                    <div class="days-title mb-32"><?php echo e($day); ?></div>
                                    <?php $__currentLoopData = $day_timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2s">
                                            <div class="days-box p-32">
                                                <div class="days-time mb-32">
                                                    <div class="d-flex justify-content-between mb-16">
                                                        <div class="days-pic-text">
                                                            
                                                            <h5><?php echo e(\Carbon\Carbon::parse($timeline->time)->format('g:i A')); ?>

                                                            </h5>
                                                            <h3><?php echo e($timeline->title); ?></h3>
                                                            <h6><?php echo e($timeline->location_name); ?> <span class="px-2">•</span>
                                                                <span class="color-primary">View map</span><span><a
                                                                        href="<?php echo e($timeline->map_link); ?>"><img
                                                                            src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                            class="img-fluid ms-2"
                                                                            alt=""></a></span>
                                                            </h6>
                                                            <h6>Instructor: <?php echo e($timeline->instructor_name); ?> <span
                                                                    class="px-2">•</span> <span class="color-primary">View
                                                                    profile</span><span><a href="#"><img
                                                                            src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                            class="img-fluid ms-2"
                                                                            alt=""></a></span>
                                                            </h6>
                                                        </div>
                                                        <div class="days-pic">
                                                            <img src="<?php echo e(URL::asset('storage/' . $timeline->instructor_image)); ?>"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <p><?php echo e(strip_tags($timeline->description)); ?></p>
                                                </div>

                                                <div class="days-dates">
                                                    <div class="dates-available">DATES AVAILABLE:</div>
                                                    <div class="dates-available-days">
                                                        <div class="d-a-day">July 1</div>
                                                        <div class="d-a-day">July 8</div>
                                                        <div class="d-a-day">July 15</div>
                                                        <div class="d-a-day">July 22</div>
                                                        <div class="d-a-day">July 29</div>
                                                    </div>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <a href="#" class="btn btn-schedule" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop-801">Join Class</a>



                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- Mondays -->
                            
                            <!-- Wednesdays -->
                            
                        </div>
                        <div class="tab-pane fade" id="sundays" role="tabpanel" aria-labelledby="sundays-tab">
                            <!-- Sundays -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="days-title mb-32">Sundays</div>
                                    <div class="days-box p-32">
                                        <div class="days-time mb-32">
                                            <div class="d-flex justify-content-between mb-16">
                                                <div class="days-pic-text">
                                                    <h5>6:30 PM - 7:30 PM</h5>
                                                    <h3>Slow Flow</h3>
                                                    <h6>Steigenberger Hotel Doha <span class="px-2">•</span> <span
                                                            class="color-primary">View map</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                    <h6>Instructor: John <span class="px-2">•</span> <span
                                                            class="color-primary">View profile</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                </div>
                                                <div class="days-pic">
                                                    <img src="<?php echo e(URL::asset('dist/images/join-class/Avatar-1.png')); ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <p>Experience a blend of flowing postures and mindful breathing in the Slow Flow
                                                class. The steady-paced movements are enhanced by the calming aroma of
                                                incense by our scent partner - Nippon Kodo - to awaken your senses and guide
                                                you toward deep relaxation, helping to release tension and enhance your
                                                overall sense of wellbeing.</p>
                                        </div>

                                        <div class="days-dates">
                                            <div class="dates-available">DATES AVAILABLE:</div>
                                            <div class="dates-available-days">
                                                <div class="d-a-day">July 1</div>
                                                <div class="d-a-day">July 8</div>
                                                <div class="d-a-day">July 15</div>
                                                <div class="d-a-day">July 22</div>
                                                <div class="d-a-day">July 29</div>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-schedule">Join Class</a>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mondays" role="tabpanel" aria-labelledby="mondays-tab">
                            <!-- Mondays -->
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="days-title mb-32">Mondays</div>
                                    <div class="days-box p-32">
                                        <div class="days-time mb-32">
                                            <div class="d-flex justify-content-between mb-16">
                                                <div class="days-pic-text">
                                                    <h5>6:30 PM - 7:30 PM</h5>
                                                    <h3>Slow Flow</h3>
                                                    <h6>Steigenberger Hotel Doha <span class="px-2">•</span> <span
                                                            class="color-primary">View map</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                    <h6>Instructor: John <span class="px-2">•</span> <span
                                                            class="color-primary">View profile</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                </div>
                                                <div class="days-pic">
                                                    <img src="<?php echo e(URL::asset('dist/images/join-class/Avatar-1.png')); ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <p>Experience a blend of flowing postures and mindful breathing in the Slow Flow
                                                class. The steady-paced movements are enhanced by the calming aroma of
                                                incense by our scent partner - Nippon Kodo - to awaken your senses and guide
                                                you toward deep relaxation, helping to release tension and enhance your
                                                overall sense of wellbeing.</p>
                                        </div>

                                        <div class="days-dates">
                                            <div class="dates-available">DATES AVAILABLE:</div>
                                            <div class="dates-available-days">
                                                <div class="d-a-day">July 1</div>
                                                <div class="d-a-day">July 8</div>
                                                <div class="d-a-day">July 15</div>
                                                <div class="d-a-day">July 22</div>
                                                <div class="d-a-day">July 29</div>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-schedule">Join Class</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="days-box p-32">
                                        <div class="days-time mb-32">
                                            <div class="d-flex justify-content-between mb-16">
                                                <div class="days-pic-text">
                                                    <h5>6:30 PM - 7:30 PM</h5>
                                                    <h3>Slow Flow</h3>
                                                    <h6>Steigenberger Hotel Doha <span class="px-2">•</span> <span
                                                            class="color-primary">View map</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                    <h6>Instructor: John <span class="px-2">•</span> <span
                                                            class="color-primary">View profile</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                </div>
                                                <div class="days-pic">
                                                    <img src="<?php echo e(URL::asset('dist/images/join-class/Avatar-1.png')); ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <p>Experience a blend of flowing postures and mindful breathing in the Slow Flow
                                                class. The steady-paced movements are enhanced by the calming aroma of
                                                incense by our scent partner - Nippon Kodo - to awaken your senses and guide
                                                you toward deep relaxation, helping to release tension and enhance your
                                                overall sense of wellbeing.</p>
                                        </div>

                                        <div class="days-dates">
                                            <div class="dates-available">DATES AVAILABLE:</div>
                                            <div class="dates-available-days">
                                                <div class="d-a-day">July 1</div>
                                                <div class="d-a-day">July 8</div>
                                                <div class="d-a-day">July 15</div>
                                                <div class="d-a-day">July 22</div>
                                                <div class="d-a-day">July 29</div>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-schedule">Join Class</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wednesdays" role="tabpanel" aria-labelledby="wednesdays-tab">
                            <!-- Wednesdays -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="days-title mb-32">Wednesdays</div>
                                    <div class="days-box p-32">
                                        <div class="days-time mb-32">
                                            <div class="d-flex justify-content-between mb-16">
                                                <div class="days-pic-text">
                                                    <h5>6:30 PM - 7:30 PM</h5>
                                                    <h3>Slow Flow</h3>
                                                    <h6>Steigenberger Hotel Doha <span class="px-2">•</span> <span
                                                            class="color-primary">View map</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                    <h6>Instructor: John <span class="px-2">•</span> <span
                                                            class="color-primary">View profile</span><span><a
                                                                href="#"><img
                                                                    src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>"
                                                                    class="img-fluid ms-2" alt=""></a></span></h6>
                                                </div>
                                                <div class="days-pic">
                                                    <img src="<?php echo e(URL::asset('dist/images/join-class/Avatar-1.png')); ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <p>Experience a blend of flowing postures and mindful breathing in the Slow Flow
                                                class. The steady-paced movements are enhanced by the calming aroma of
                                                incense by our scent partner - Nippon Kodo - to awaken your senses and guide
                                                you toward deep relaxation, helping to release tension and enhance your
                                                overall sense of wellbeing.</p>
                                        </div>

                                        <div class="days-dates">
                                            <div class="dates-available">DATES AVAILABLE:</div>
                                            <div class="dates-available-days">
                                                <div class="d-a-day">July 1</div>
                                                <div class="d-a-day">July 8</div>
                                                <div class="d-a-day">July 15</div>
                                                <div class="d-a-day">July 22</div>
                                                <div class="d-a-day">July 29</div>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-schedule">Join Class</a>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-801" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop-801Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mxw-800 text-center">
            <div class="modal-content ptb-48-64">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="loc-model-body">
                    <div class="mb-48">
                        <h4>Choose Payment Option</h4>
                        <h6>Slow Flow <span class="px-3">•</span>Mondays, 6:30 PM -
                            7:30 PM<span class="px-3">•</span>Steigenberger Hotel
                            Doha<span class="px-3">•</span>Instructor: John</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center">
                                <h5>Single Pass</h5>
                                <p>Enjoy one Slow Flow class with this single-use pass,
                                    perfect for a focused and relaxing session.</p>
                                <div class="d-flex align-items-end justify-content-center">
                                    <div class="sp">
                                        <h6>QAR</h6>
                                    </div>
                                    <div class="sp">
                                        <h2>50</h2>
                                    </div>
                                    <div class="sp">
                                        <h6>.00</h6>
                                    </div>
                                </div>
                                <a href="single-pass-payment" class="btn btn-schedule">Buy Single Pass <span
                                        class="ps-3"><img src="<?php echo e(URL::asset('dist/images/Right-white.png')); ?>"
                                            class="img-fluid" alt=""></span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <h5>Monthly Pass</h5>
                                <p>Unlimited access to Slow Flow classes for a month,
                                    ideal for maintaining a consistent practice.</p>
                                <div class="d-flex align-items-end justify-content-center">
                                    <div class="sp">
                                        <h6>QAR</h6>
                                    </div>
                                    <div class="sp">
                                        <h2>149</h2>
                                    </div>
                                    <div class="sp">
                                        <h6>.00</h6>
                                    </div>
                                </div>
                                <a href="monthly-pass-payment" class="btn btn-schedule">Buy Monthly Pass <span
                                        class="ps-3"><img src="<?php echo e(URL::asset('dist/images/Right-white.png')); ?>"
                                            class="img-fluid" alt=""></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\join-a-class.blade.php ENDPATH**/ ?>