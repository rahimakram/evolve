

<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>

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
                              <li class="breadcrumb-item"><a href="#">About</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Careers</h1>
                        <p>Evolve Wellness is your partner in wellness & employee engagement. We design and execute tailored wellness programs for individuals and organisations, specialising in corporate wellness, team building, wellness workshops, event management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="career-boxx ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">        
        <div class="row">
          <div class="col-12">            
            <div class="mxw-800 text-center m-auto">
              <div class="mb-64">
                <h2>Join Our Team at Evolve</h2>
                <p>At Evolve, we are committed to building an energetic, diverse, and innovative team, valuing our differences and seeing strength in community diversity and representation. If you’re passionate about helping people become the best versions of themselves, you’ve come to the right place.<br><br>
                  Explore career opportunities in Wellness Services, Events, and Corporate Training, and join us in shaping a healthier future.</p>
              </div>

              <div class="career-card-box mb-64">
                <div class="career-card wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="2s">
                  <img src="<?php echo e(URL::asset('dist/images/career/Icon-1.png')); ?>" class="img-fluid career-icon" alt="...">
                  <div class="career-card-body pt-32">
                    <h5 class="career-card-title">Flexible Work Arrangements</h5>
                    <h6 class="card-text">Choose from part-time or freelance contracts that align with your lifestyle and goals.</h6>                    
                  </div>
                </div>
                <div class="career-card wow fadeInRight" data-wow-delay="400ms" data-wow-duration="2s">
                  <img src="<?php echo e(URL::asset('dist/images/career/Icon-2.png')); ?>" class="img-fluid career-icon" alt="...">
                  <div class="career-card-body pt-32">
                    <h5 class="career-card-title">Sponsorship Opportunities</h5>
                    <h6 class="card-text">We offer support and sponsorship for your professional development and certifications.</h6>                    
                  </div>
                </div>
              </div>
              <div class="career-card-box">
                <div class="career-card wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2s">
                  <img src="<?php echo e(URL::asset('dist/images/career/Icon-3.png')); ?>" class="img-fluid career-icon" alt="...">
                  <div class="career-card-body pt-32">
                    <h5 class="career-card-title">Access to Premium Venues</h5>
                    <h6 class="card-text">Work with top-tier fitness and wellness venues that elevate your professional experience.</h6>                    
                  </div>
                </div>
                <div class="career-card wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2s">
                  <img src="<?php echo e(URL::asset('dist/images/career/Icon-4.png')); ?>" class="img-fluid career-icon" alt="...">
                  <div class="career-card-body pt-32">
                    <h5 class="career-card-title">Partnerships & Collaborations</h5>
                    <h6 class="card-text">Expand your career through our vibrant network and collaborative opportunities.</h6>                    
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </section>


    <section class="ready-to-evolve ptb-64 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
            <div class="ready-to-evolve-content p64">
              <h3>Ready to Evolve?</h3>
              <p>Reach out to us to learn more about our services, schedule a consultation, or inquire about our corporate wellness programs.</p>
              <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img src="<?php echo e(URL::asset('dist/images/fitness-classes/Right.png')); ?>" class="img-fluid" alt=""></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\html\careers.blade.php ENDPATH**/ ?>