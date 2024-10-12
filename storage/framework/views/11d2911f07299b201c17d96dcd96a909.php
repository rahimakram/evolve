

<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>

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
                        <p>With a network of gyms and venue partners, we provide convenient access to top-notch facilities and programs designed to help you reach your fitness goals.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a mattis elit. Nunc vel lectus libero. Sed quis sem ac sem imperdiet rutrum. Phasellus vel pulvinar tortor, ac scelerisque.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">            
            <nav id="filter-location" class="filter-gallery">
              <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                <button class="nav-link active" id="locations-all-tab" data-bs-toggle="tab" data-bs-target="#locations-all" type="button" role="tab" aria-controls="locations-all" aria-selected="true">View All</button>
                <button class="nav-link" id="fitness-training-tab" data-bs-toggle="tab" data-bs-target="#fitness-training" type="button" role="tab" aria-controls="fitness-training" aria-selected="false">Fitness Training</button>
                <button class="nav-link" id="slow-flow-tab" data-bs-toggle="tab" data-bs-target="#slow-flow" type="button" role="tab" aria-controls="slow-flow" aria-selected="false">Slow Flow</button>
                <button class="nav-link" id="loc-pilates-tab" data-bs-toggle="tab" data-bs-target="#loc-pilates" type="button" role="tab" aria-controls="loc-pilates" aria-selected="false">Pilates</button>
                <button class="nav-link" id="loc-arts-tab" data-bs-toggle="tab" data-bs-target="#loc-arts" type="button" role="tab" aria-controls="loc-arts" aria-selected="false">Martial Arts</button>
                <button class="nav-link" id="loc-swimming-tab" data-bs-toggle="tab" data-bs-target="#loc-swimming" type="button" role="tab" aria-controls="loc-swimming" aria-selected="false">Swimming</button>
                <button class="nav-link" id="loc-biomechanics-tab" data-bs-toggle="tab" data-bs-target="#loc-biomechanics" type="button" role="tab" aria-controls="loc-biomechanics" aria-selected="false">Biomechanics</button>
                <button class="nav-link" id="loc-reformer-tab" data-bs-toggle="tab" data-bs-target="#loc-reformer" type="button" role="tab" aria-controls="loc-reformer" aria-selected="false">Reformer Pilates</button>
                <button class="nav-link" id="loc-stretch-flow-tab" data-bs-toggle="tab" data-bs-target="#loc-stretch-flow" type="button" role="tab" aria-controls="loc-stretch-flow" aria-selected="false">Stretch & Flow</button>
                <button class="nav-link" id="loc-mixed-gym-tab" data-bs-toggle="tab" data-bs-target="#loc-mixed-gym" type="button" role="tab" aria-controls="loc-mixed-gym" aria-selected="false">Mixed Gym</button>
                <button class="nav-link find" id="loc-ladies-gym-tab" data-bs-toggle="tab" data-bs-target="#loc-ladies-gym" type="button" role="tab" aria-controls="loc-ladies-gym" aria-selected="false">Ladies Only Gym</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
    
              <div class="tab-pane fade show active" id="locations-all" role="tabpanel" aria-labelledby="locations-all-tab">
                <div class="row mb-64">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <!-- Button trigger modal -->
                    <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-01">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-1.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Evolve Head Office</h5>
                        <p class="card-text">Grand Hamad Street</p>                
                      </div>
                    </div>                
    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-01" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-01Label" aria-hidden="true">
                      <div class="modal-dialog mxw-800 text-center">
                        <div class="modal-content ptb-48-64">
                          <div class="text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="loc-model-body">
                            <div class="loc-model-img mb-24"><img src="<?php echo e(URL::asset('dist/images/location/mandarin-oriental.png')); ?>" class="img-fluid" alt=""></div>
                            <h4>Mandarin Oriental</h4>
                            <h6 class="mb-24">Msheireb <span class="px-3">•</span><span class="pe-2">View map</span><span><img src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>" class="img-fluid" alt=""></span></h6>
                            <p>At Mandarin Oriental Doha, our fitness training services offer personalized, luxury wellness experiences, featuring state-of-the-art facilities and expert trainers to help you achieve your health and fitness goals in style.</p>
                            <h6 class="ofs-h6">OUR Fitness Services</h6>
                            <div class="find-your-tab justify-content-center mb-56">
                              <div class="btn-find">Fitness Training</div>
                              <div class="btn-find">Slow Flow</div>
                              <div class="btn-find">Pilates</div>
                              <div class="btn-find">Martial Arts</div>
                              <div class="btn-find">Swimming</div>
                              <div class="btn-find">Mixed Gym</div>
                              <div class="btn-find find">Ladies Only Gym</div>
                            </div>
                            <div class="location-video">                              
                              <video autoplay="" loop="" controls="" poster="<?php echo e(URL::asset('dist/images/location/location-video-1.png')); ?>">
                                <source type="video/mp4" src="<?php echo e(URL::asset('dist/images/sports-management/dummy-video.mp4')); ?>">             
                              </video>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-02">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-2.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Banyan Tree Doha</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Slow Flow</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>               
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-02" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-02Label" aria-hidden="true">
                      <div class="modal-dialog mxw-800 text-center">
                        <div class="modal-content ptb-48-64">
                          <div class="text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="loc-model-body">
                            <div class="loc-model-img mb-24"><img src="<?php echo e(URL::asset('dist/images/location/mandarin-oriental.png')); ?>" class="img-fluid" alt=""></div>
                            <h4>Mandarin Oriental</h4>
                            <h6 class="mb-24">Msheireb <span class="px-3">•</span><span class="pe-2">View map</span><span><img src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>" class="img-fluid" alt=""></span></h6>
                            <p>At Mandarin Oriental Doha, our fitness training services offer personalized, luxury wellness experiences, featuring state-of-the-art facilities and expert trainers to help you achieve your health and fitness goals in style.</p>
                            <h6 class="ofs-h6">OUR Fitness Services</h6>
                            <div class="find-your-tab justify-content-center mb-56">
                              <div class="btn-find">Fitness Training</div>
                              <div class="btn-find">Slow Flow</div>
                              <div class="btn-find">Pilates</div>
                              <div class="btn-find">Martial Arts</div>
                              <div class="btn-find">Swimming</div>
                              <div class="btn-find">Mixed Gym</div>
                              <div class="btn-find find">Ladies Only Gym</div>
                            </div>
                            <div class="location-video">                              
                              <video autoplay="" loop="" controls="" poster="<?php echo e(URL::asset('dist/images/location/location-video-1.png')); ?>">
                                <source type="video/mp4" src="<?php echo e(URL::asset('dist/images/sports-management/dummy-video.mp4')); ?>">             
                              </video>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-3.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Dynamik Gym</h5>
                        <p class="card-text">The Pearl Qatar</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-4.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Education City Golf Club</h5>
                        <p class="card-text">Education City</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Stretch & Flow</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-64">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-5.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Four Seasons Hotel Doha</h5>
                        <p class="card-text">West Bay</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Stretch & Flow</div>
                        </div>               
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-6.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Hilton Salwa Beach Resort</h5>
                        <p class="card-text">Abu Samra</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Stretch & Flow</div>
                        </div>               
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-7.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Marsa Malaz Kempinski</h5>
                        <p class="card-text">The Pearl Qatar</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Slow Flow</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Stretch & Flow</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-8.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Mandarin Oriental</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-64">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-9.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Park Hyatt Doha</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>                 
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-10.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Sharq Village & Spa</h5>
                        <p class="card-text">Ras Bu Abboud</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>    
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Stretch & Flow</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>               
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-11.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Steigenberger Hotel Doha</h5>
                        <p class="card-text">Umm Ghuwailina</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-12.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">The Bentley Luxury Hotel & Suites</h5>
                        <p class="card-text">West Bay</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Slow Flow</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-13.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">The Chedi Katara Hotel & Resort</h5>
                        <p class="card-text">West Bay</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Stretch & Flow</div>                          
                        </div>              
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-14.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Wyndham Doha West Bay</h5>
                        <p class="card-text">West Bay</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Swimming</div>                          
                        </div>               
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="fitness-training" role="tabpanel" aria-labelledby="fitness-training-tab">
                <div class="row mb-64">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-15">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-2.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Banyan Tree Doha</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Slow Flow</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>               
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-15Label" aria-hidden="true">
                      <div class="modal-dialog mxw-800 text-center">
                        <div class="modal-content ptb-48-64">
                          <div class="text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="loc-model-body">
                            <div class="loc-model-img mb-24"><img src="<?php echo e(URL::asset('dist/images/location/mandarin-oriental.png')); ?>" class="img-fluid" alt=""></div>
                            <h4>Mandarin Oriental</h4>
                            <h6 class="mb-24">Msheireb <span class="px-3">•</span><span class="pe-2">View map</span><span><img src="<?php echo e(URL::asset('dist/images/arrow-top.png')); ?>" class="img-fluid" alt=""></span></h6>
                            <p>At Mandarin Oriental Doha, our fitness training services offer personalized, luxury wellness experiences, featuring state-of-the-art facilities and expert trainers to help you achieve your health and fitness goals in style.</p>
                            <h6 class="ofs-h6">OUR Fitness Services</h6>
                            <div class="find-your-tab justify-content-center mb-56">
                              <div class="btn-find">Fitness Training</div>
                              <div class="btn-find">Slow Flow</div>
                              <div class="btn-find">Pilates</div>
                              <div class="btn-find">Martial Arts</div>
                              <div class="btn-find">Swimming</div>
                              <div class="btn-find">Mixed Gym</div>
                              <div class="btn-find find">Ladies Only Gym</div>
                            </div>
                            <div class="location-video">                              
                              <video autoplay="" loop="" controls="" poster="<?php echo e(URL::asset('dist/images/location/location-video-1.png')); ?>">
                                <source type="video/mp4" src="<?php echo e(URL::asset('dist/images/sports-management/dummy-video.mp4')); ?>">             
                              </video>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-3.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Dynamik Gym</h5>
                        <p class="card-text">The Pearl Qatar</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-8.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Mandarin Oriental</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-9.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Park Hyatt Doha</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>                 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-10.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Sharq Village & Spa</h5>
                        <p class="card-text">Ras Bu Abboud</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>    
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Stretch & Flow</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>               
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-11.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Steigenberger Hotel Doha</h5>
                        <p class="card-text">Umm Ghuwailina</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-12.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">The Bentley Luxury Hotel & Suites</h5>
                        <p class="card-text">West Bay</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Slow Flow</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Swimming</div>
                          <div class="btn-find">Mixed Gym</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="slow-flow" role="tabpanel" aria-labelledby="slow-flow-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-4.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Magazine Cover Story</h5>
                        <p class="card-text">Get ready for a thrilling team activity! Unleash your creativity as each team crafts an imaginary magazine cover story highlighting a successful project or business achievement for your company. Dive into the creative process by selecting the perfect images, crafting captivating headlines, and formulating inspiring quotes. This exercise not only sparks creativity but also encourages your team to envision greater possibilities for your company's success, making it a fun and engaging way to inspire innovation and teamwork.</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-5.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Marshmallow Spaghetti Tower</h5>
                        <p class="card-text">Get ready for an exciting team challenge! Armed with only tape, marshmallows, string, scissors, and spaghetti, teams will compete to build the tallest tower. But here's the twist: the tower must support a marshmallow at its peak and stand on its own for five seconds. This fun and interactive activity will test your team's creativity, ingenuity, and teamwork. Who will rise to the occasion and build the most impressive tower?</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-6.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Interactive Quiz</h5>
                        <p class="card-text">Experience an interactive online quiz that brings your audience closer to the topics in a fun and engaging manner. Whether it's general knowledge, industry-focused, or a mix of both, this quiz will captivate participants. Scores are calculated based on accuracy and time, adding an exciting competitive edge. With a running score counter, participants can track their performance in real-time, fuelling the excitement and keeping everyone on their toes. Collaborating with Evolve, we'll craft a list of questions tailored to your audience, ensuring a memorable and enjoyable experience for all.</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-7.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Interactive Quiz</h5>
                        <p class="card-text">Experience an interactive online quiz that brings your audience closer to the topics in a fun and engaging manner. Whether it's general knowledge, industry-focused, or a mix of both, this quiz will captivate participants. Scores are calculated based on accuracy and time, adding an exciting competitive edge. With a running score counter, participants can track their performance in real-time, fuelling the excitement and keeping everyone on their toes. Collaborating with Evolve, we'll craft a list of questions tailored to your audience, ensuring a memorable and enjoyable experience for all.</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-pilates" role="tabpanel" aria-labelledby="loc-pilates-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-9.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-8.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-7.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>              
                </div>
              </div>
              <div class="tab-pane fade" id="loc-arts" role="tabpanel" aria-labelledby="loc-arts-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team-building/active-3.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Interactive Quiz</h5>
                        <p class="card-text">Experience an interactive online quiz that brings your audience closer to the topics in a fun and engaging manner. Whether it's general knowledge, industry-focused, or a mix of both, this quiz will captivate participants. Scores are calculated based on accuracy and time, adding an exciting competitive edge. With a running score counter, participants can track their performance in real-time, fuelling the excitement and keeping everyone on their toes. Collaborating with Evolve, we'll craft a list of questions tailored to your audience, ensuring a memorable and enjoyable experience for all.</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-swimming" role="tabpanel" aria-labelledby="loc-swimming-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-2.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>
                        <div class="find-your-tab">                      
                          <div class="btn-find">Swimming</div>                      
                        </div>               
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-biomechanics" role="tabpanel" aria-labelledby="loc-biomechanics-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-reformer" role="tabpanel" aria-labelledby="loc-reformer-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-stretch-flow" role="tabpanel" aria-labelledby="loc-stretch-flow-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-mixed-gym" role="tabpanel" aria-labelledby="loc-mixed-gym-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/team/Checker.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="loc-ladies-gym" role="tabpanel" aria-labelledby="loc-ladies-gym-tab">
                <div class="row mb-64">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-3.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Dynamik Gym</h5>
                        <p class="card-text">The Pearl Qatar</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-8.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Mandarin Oriental</h5>
                        <p class="card-text">Msheireb</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Reformer Pilates</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                  
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img-box">
                      <img src="<?php echo e(URL::asset('dist/images/location/location-9.png')); ?>" class="img-fluid" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Sharq Village & Spa</h5>
                        <p class="card-text">Ras Bu Abboud</p>
                        <div class="find-your-tab">
                          <div class="btn-find">Fitness Training</div>
                          <div class="btn-find">Pilates</div>
                          <div class="btn-find">Martial Arts</div>
                          <div class="btn-find">Biomechanics</div>
                          <div class="btn-find">Stretch & Flow</div>
                          <div class="btn-find">Mixed Gym</div>
                          <div class="btn-find find">Ladies Only Gym</div>
                        </div>                 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>              
          </div>
        </div>
      </div>
    </section>

    <section class="evole-map wow slideInLeft" data-wow-delay="00ms" data-wow-duration="2s">
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3607.5341528710696!2d51.53249607538467!3d25.286251777653693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOffice%201%2C%202nd%20Floor%2CAlfardan%20Centre%2C%20Grand%20Hamad%20Street%2CP.%20O.%20Box%2039428%2C%20Doha%2C%20Qatar!5e0!3m2!1sen!2sin!4v1727694756771!5m2!1sen!2sin" width="100%" height="635" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\html\our-locations.blade.php ENDPATH**/ ?>