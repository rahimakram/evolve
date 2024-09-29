

<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <!-- BANNER -->
    <section class="banner ptb-128">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">About</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Contact Us</h1>
                        <h6>Please don't hesitate to reach out to us with any questions, comments, or concerns. Our team is here to assist you and will respond promptly to your message. You can contact us via the form below or directly through email. We look forward to hearing from you!</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-boxx ptb-128">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4">
            <div class="cont-card">
              <img src="<?php echo e(URL::asset('dist/images/contact/mail.png')); ?>" class="img-fluid mb-16" alt="...">
              <div class="cont-card-body">
                <h5>Email</h5>
                <h6>Our friendly team is here to help.</h6>
                <p>info@evolvemindbodysoul.com</p>               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cont-card">
              <img src="<?php echo e(URL::asset('dist/images/contact/building-office.png')); ?>" class="img-fluid mb-16" alt="...">
              <div class="cont-card-body">
                <h5>Office</h5>
                <h6>Come say hello at our office HQ.</h6>
                <p>Office 1, 2nd Floor (Workinton),Alfardan Centre, Grand Hamad Street,P. O. Box 39428, Doha, Qatar</p>               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cont-card">
              <img src="<?php echo e(URL::asset('dist/images/contact/phone.png')); ?>" class="img-fluid mb-16" alt="...">
              <div class="cont-card-body">
                <h5>WhatsApp / Phone</h5>
                <h6>Sun-Thu from 9am to 5pm.</h6>
                <p>(+974) 5040 3234</p>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact-form ptb-128">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Send a Message</h2>
            <p>Whether you’re interested in our fitness services or a company event, we’re here to help you find the right program to support your need. Tell us about you and we’ll be in touch.</p>
          </div>
          <div class="col-md-8">
            <form action="">
              <div class="log-group-box">
                <div class="log-group mb-32 w-50">
                  <div class="log-label"><label for="name">Name</label></div>
                  <div class="log-input"><input type="text" placeholder="e.g. Ahmad Ali"></div>
                </div>
                <div class="log-group mb-32 w-50">
                  <div class="log-label"><label for="organization">Organization</label></div>                  
                  <div class="log-input"><input type="text" placeholder="Enter your organization name"></div><!-- optional -->
                </div>
              </div>
              <div class="log-group-box">
                <div class="log-group mb-32 w-50">
                  <div class="log-label"><label for="email">Email Address</label></div>
                  <div class="log-input"><input type="email" placeholder="yourname@example.com"></div>
                </div>
                <div class="log-group mb-32 w-50">
                  <div class="log-label"><label for="phone-number">Phone Number</label></div>                  
                  <div class="log-input"><input type="tel" placeholder="00000000"></div><!-- optional -->
                </div>
              </div>
              <div class="log-group-box">
                <div class="log-group w-100">
                  <div class="log-label"><label for="help">How can we help?</label></div>
                  <div class="log-input"><textarea name="text-area" id="text-area" placeholder="Tell us a little bit about your inquiry."></textarea></div>
                </div>
              </div>
              <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img src="<?php echo e(URL::asset('dist/images/fitness-classes/Right.png')); ?>" class="img-fluid" alt=""></span></a>
            </form>
          </div>
        </div>
      </div>
    </section>


    <section class="ready-to-evolve ptb-64">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
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
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\contact-us.blade.php ENDPATH**/ ?>