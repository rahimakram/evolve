

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BANNER -->
    <section class="banner ptb-128  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12  wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Locations</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Our Locations</h1>
                        <p>With a network of gyms and venue partners, we provide convenient access to top-notch facilities
                            and programs designed to help you reach your fitness goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="our-locations" class="gallery ptb-128  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="mb-64">
                <div class="mxw-800 text-center m-auto">
                    <h2>Explore Our Locations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a mattis elit. Nunc vel lectus libero.
                        Sed quis sem ac sem imperdiet rutrum. Phasellus vel pulvinar tortor, ac scelerisque.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav id="filter-location" class="filter-gallery">
                        <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="locations-all-tab" data-bs-toggle="tab"
                                data-bs-target="#locations-all" type="button" role="tab" aria-controls="locations-all"
                                aria-selected="true">View All</button>
                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link" id="<?php echo e(Str::slug($activity->activity_name)); ?>-tab"
                                    data-bs-toggle="tab" data-bs-target="#<?php echo e(Str::slug($activity->activity_name)); ?>"
                                    type="button" role="tab" aria-controls="<?php echo e(Str::slug($activity->activity_name)); ?>"
                                    aria-selected="false"><?php echo e($activity->activity_name); ?></button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="locations-all" role="tabpanel"
                            aria-labelledby="locations-all-tab">
                            <div class="row mb-64">
                                <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn location-card" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop-01" data-name="<?php echo e($location->name); ?>"
                                            data-logo="<?php echo e(URL::asset('storage/' . $location->logo)); ?>"
                                            data-image="<?php echo e(URL::asset('storage/' . $location->image)); ?>"
                                            data-address="<?php echo e($location->address); ?>"
                                            data-description="<?php echo e($location->description); ?>"
                                            data-map-link="<?php echo e($location->map_link); ?>"
                                            data-video-link="<?php echo e($location->video_link); ?>"
                                            data-activities="<?php echo e(implode(', ', $location->activity_names->toArray())); ?>">
                                            <div class="card-img-box">
                                                <img src="<?php echo e(URL::asset('storage/' . $location->image)); ?>"
                                                    class="img-fluid" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo e($location->name); ?></h5>
                                                <p class="card-text"><?php echo e($location->address); ?></p>
                                                <div class="find-your-tab">
                                                    <?php
                                                        $location_activity_names = $location->activity_names->toArray();
                                                    ?>
                                                    <?php $__empty_2 = true; $__currentLoopData = $location_activity_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $activity_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                        <div class="btn-find"><?php echo e($activity_name); ?></div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                        <div class="btn-find">No Activity</div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-01">
                                            <div class="card-img-box">
                                                <img src="<?php echo e(URL::asset('dist/images/location/location-1.png')); ?>"
                                                    class="img-fluid" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Evolve Head Office</h5>
                                                <p class="card-text">Grand Hamad Street</p>
                                                <div class="find-your-tab">
                                                    <?php
                                                        $location_activity_names = $location->activity_names->toArray();
                                                    ?>
                                                    <?php $__empty_1 = true; $__currentLoopData = $location_activity_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $activity_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <div class="btn-find"><?php echo e($activity_name); ?></div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <div class="btn-find">No Activity</div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade" id="<?php echo e(Str::slug($activity->activity_name)); ?>" role="tabpanel"
                                aria-labelledby="<?php echo e(Str::slug($activity->activity_name)); ?>-tab">
                                <div class="row mb-64">
                                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(in_array($activity->activity_name, $location->activity_names->toArray())): ?>
                                            <div class="col-md-3" data-wow-delay="400ms" data-wow-duration="2s">
                                                <div class="card btn location-card" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop-01"
                                                    data-logo="<?php echo e(URL::asset('storage/' . $location->logo)); ?>"
                                                    data-image="<?php echo e(URL::asset('storage/' . $location->image)); ?>"
                                                    data-address="<?php echo e($location->address); ?>"
                                                    data-description="<?php echo e($location->description); ?>"
                                                    data-map-link="<?php echo e($location->map_link); ?>"
                                                    data-video-link="<?php echo e($location->video_link); ?>"
                                                    data-activities="<?php echo e(implode(', ', $location->activity_names->toArray())); ?>">
                                                    <div class="card-img-box">
                                                        <img src="<?php echo e(URL::asset('storage/' . $location->image)); ?>"
                                                            class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo e($location->name); ?></h5>
                                                        <p class="card-text"><?php echo e($location->address); ?></p>
                                                        <div class="find-your-tab">
                                                            <?php
                                                                $location_activity_names = $location->activity_names->toArray();
                                                            ?>
                                                            <?php $__empty_1 = true; $__currentLoopData = $location_activity_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $activity_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <div class="btn-find"><?php echo e($activity_name); ?></div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                <div class="btn-find">No Activity</div>
                                                            <?php endif; ?>
                                                        </div>
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
    </section>

    <section class="evole-map wow slideInLeft" data-wow-delay="00ms" data-wow-duration="2s">
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3607.5341528710696!2d51.53249607538467!3d25.286251777653693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOffice%201%2C%202nd%20Floor%2CAlfardan%20Centre%2C%20Grand%20Hamad%20Street%2CP.%20O.%20Box%2039428%2C%20Doha%2C%20Qatar!5e0!3m2!1sen!2sin!4v1727694756771!5m2!1sen!2sin"
                width="100%" height="635" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-01" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop-01Label" aria-hidden="true">
        <div class="modal-dialog mxw-800 text-center">
            <div class="modal-content ptb-48-64">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="loc-model-body">
                    <div class="loc-model-img mb-24"><img id="modal-image" src="" class="img-fluid"
                            alt=""></div>
                    <h4 id="modal-title"></h4>
                    <h6 id="modal-address" class="mb-24"></h6>
                    <p id="modal-description"></p>
                    <h6 class="ofs-h6">OUR Fitness Services</h6>
                    <div id="modal-activities" class="find-your-tab justify-content-center mb-56"></div>
                    
                    <div id="modal-video-container" class="location-video">
                        <iframe id="modal-video" width="560" height="315" src="" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('#nav-tabContent').on('click', '.location-card', function() {

                var name = $(this).data('name');
                var image = $(this).data('logo');
                var address = $(this).data('address');
                var arrowImage =
                    "<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>";
                var description = $(this).data('description');
                var videoLink = $(this).data('video-link');
                var activities = $(this).data('activities');
                var mapLink = $(this).data('map-link');

                if (!/^https?:\/\//i.test(mapLink)) {
                    mapLink = 'http://' + mapLink;
                }

                $('#modal-title').text(name);
                $('#modal-image').attr('src', image);
                $('#modal-address').text(address);

                var addressHtml = `<h6 class="mb-24">${address} 
                              <span class="px-3">•</span>
                              <span class="pe-2">View map</span>
                              <span><a href="${mapLink}" target="_blank"><img src="${arrowImage}" class="img-fluid" alt=""></a></span>
                           </h6>`;
                $('#modal-address').html(addressHtml);
                $('#modal-description').html(description);

                var activitiesHtml = activities.split(', ').map(function(item) {
                    return '<div class="btn-find">' + item + '</div>';
                }).join('');
                $('#modal-activities').html(activitiesHtml);

                // Set video source and poster
                // $('#modal-video-source').attr('src', video);
                // Update the iframe src with the video link
                // if (videoLink) {
                //     $('#modal-video-container').show();
                //     $('#modal-video').attr('src', videoLink);
                // } else {
                //     $('#modal-video-container')
                //         .hide(); 
                // }
                if (videoLink) {
                    // Convert the standard YouTube link to an embeddable link and add the necessary parameters
                    var embedLink = videoLink.replace("watch?v=", "embed/") +
                        "?rel=0&modestbranding=1&controls=0&showinfo=0&playsinline=1&autoplay=1";

                    $('#modal-video-container').show();
                    $('#modal-video').attr('src', embedLink);
                } else {
                    $('#modal-video-container').hide();
                }
            });
            $('#staticBackdrop-01').on('hidden.bs.modal', function() {
                $('#modal-video').attr('src', '');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\our-locations.blade.php ENDPATH**/ ?>