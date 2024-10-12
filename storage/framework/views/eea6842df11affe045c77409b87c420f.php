

<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <section class="single-payment ptb-128">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mxw-800 m-auto">
              <div class="text-center mb-64">
                <h1>Secure Your Spot</h1>
                <p class="mb-64">You're almost there! Complete your booking by providing your details and payment information. You'll receive a confirmation email with your booking details and any additional information you need for your class.</p>
                <h6>Slow Flow <span class="px-3">•</span>Mondays, 6:30 PM - 7:30 PM<span class="px-3">•</span>Steigenberger Hotel Doha<span class="px-3">•</span>Instructor: John</h6>
              </div>
              

              <form action="" id="book-and-pay">
                <div class="booking-details mb-64">                  
                  <h4 class="mb-32">1. Booking Details</h4>

                  <div class="log-group-box">
                    <div class="log-group mb-32 w-100">
                      <div class="log-label"><label for="name">Name</label></div>
                      <div class="log-input"><input type="text" placeholder="Enter your full name"></div>
                    </div>                  
                  </div>
                  <div class="log-group-box">                  
                    <div class="log-group mb-32 w-50">
                      <div class="log-label"><label for="email">Email Address</label></div>
                      <div class="log-input"><input type="email" placeholder="you@company.com"></div>
                    </div>
                    <div class="log-group mb-32 w-50">
                      <div class="log-label"><label for="phone-number">Phone Number</label></div>                  
                      <div class="log-input"><input type="tel" placeholder="00000000"></div><!-- optional -->                 
                    </div>
                  </div>
                  
                  <div class="log-group-box">
                    <div class="mb-16"><label for="choose-one-monday">Choose one of the available Mondays in July 2024 to attend the class:</label></div>
                  </div>

                  <div class="log-group-box">                  
                    <label class="class-option mb-16 w-50">
                      <input type="radio" name="class-date" value="july-1" />
                      <div class="class-label">
                          <span class="date">July 1, 2024 (Monday)</span>
                          <span class="time">6:30 PM - 7:30 PM</span>
                      </div>
                    </label>
      
                    <label class="class-option mb-16 w-50">
                        <input type="radio" name="class-date" value="july-8" />
                        <div class="class-label">
                            <span class="date">July 8, 2024 (Monday)</span>
                            <span class="time">6:30 PM - 7:30 PM</span>
                        </div>
                    </label>
                  </div>
                  <div class="log-group-box">
                    <label class="class-option mb-16 w-50">
                        <input type="radio" name="class-date" value="july-15" />
                        <div class="class-label">
                            <span class="date">July 15, 2024 (Monday)</span>
                            <span class="time">6:30 PM - 7:30 PM</span>
                        </div>
                    </label>
      
                    <label class="class-option mb-16 w-50">
                        <input type="radio" name="class-date" value="july-22" />
                        <div class="class-label">
                            <span class="date">July 22, 2024 (Monday)</span>
                            <span class="time">6:30 PM - 7:30 PM</span>
                        </div>
                    </label>
                  </div>
                  <div class="log-group-box">
                    <label class="class-option mb-16 w-50">
                        <input type="radio" name="class-date" value="july-29" />
                        <div class="class-label">
                            <span class="date">July 29, 2024 (Monday)</span>
                            <span class="time">6:30 PM - 7:30 PM</span>
                        </div>
                    </label>
                    <label class="mb-16 w-50">                      
                    </label>
                  </div>




                  <div class="log-group-box">                  
                    <div class="log-group mb-32 w-100">
                      <div class="log-label"><label for="Attendees">Number of Attendees</label></div>
                      <div class="log-input"><input type="number" placeholder="1"></div>
                    </div>
                  </div>
  
                  <h6 class="total-title text-black">TOTAL</h6>
                  <div class="qar-50 d-flex align-items-baseline">
                    <h5 class="text-black">QAR</h5>
                    <h3 class="text-black">50</h3>
                  </div>                                                                    
                </div>

                <!-- 2. Payment Information -->
                <div class="payment-information">
                  <h4 class="mb-32">2. Payment Information</h4>
                                  
                  <div class="log-group-box">
                    <div class="log-group mb-32 w-50">
                      <div class="log-label"><label for="name-card">Name on Card</label></div>
                      <div class="log-input"><input type="text" placeholder="Your Name"></div>
                    </div>                    
                  </div>
                  <div class="log-group-box mb-64">
                    <div class="log-group w-50">
                      <div class="log-label"><label for="card-number">Card Number</label></div>
                      <div class="log-input"><input type="text" placeholder="0000 0000 0000 0000"></div>
                    </div>
                    <div class="log-group w-25">
                      <div class="log-label"><label for="card-expiry-date">Card Expiry Date</label></div>
                      <div class="log-input"><input type="date" placeholder="00/00/0000"></div>
                    </div>
                    <div class="log-group w-25">
                      <div class="log-label"><label for="cvv">CVV</label></div>
                      <div class="log-input"><input type="number" placeholder="000"></div>
                    </div>
                  </div>
                  <div class="log-group-box mb-64">
                    <div class="log-group d-flex">
                      <input type="checkbox" id="read-carefully" name="read-carefully" value="Bike">
                      <!-- Button trigger modal -->
                      <label for="read-carefully">I have read and understood the <span class="color-primary cursr-pointer" data-bs-toggle="modal" data-bs-target="#staticBackdrop-901">Terms & Conditions</span></label>
                      <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-901" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-901Label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered mxw-800 text-center">
                        <div class="modal-content ptb-48-64">
                          <div class="text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="loc-model-body text-start">
                            <h4>Terms & Conditions for Slow Flow Classes</h4>
                            <ul class="terms-ul">
                              <li><h6>All purchased classes are non-refundable and non-transferable (cannot be shared).</h6></li>
                              <li><h6>Valid only for Slow Flow classes and cannot be used for other services or workshops.</h6></li>
                              <li><h6>Valid only at the venue selected.</h6></li>
                              <li><h6>Reservations for classes must be made in advance directly with host venue.</h6></li>
                              <li><h6>For Slow Flow Monthly Passes:</h6></li>
                              <li><h6>Activation is upon attendance to the first Slow Flow class.</h6></li>
                              <li><h6>Validity is for 30 days after activation.</h6></li>
                              <li><h6>The 30-day validity period cannot be extended.</h6></li>
                              <li><h6>Participants should consult with a physician before starting any new fitness program.</h6></li>
                              <li><h6>Evolve Wellness and the host venue is not liable for any injuries sustained during a class.</h6></li>
                              <li><h6>You agree to abide by the guidelines set by the Slow Flow instructor and host venue.</h6></li>
                            </ul>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>                  
                  </div>
                  
                  
                  <a href="#" class="btn btn-schedule">Complete Payment</a>
                
                  <a href="#" class="btn btn-schedule two ms-4">Cancel and Return</a>
                </div>
              </form>              
                                                
              
            </div>
          </div>
        </div>
      </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\single-pass-payment.blade.php ENDPATH**/ ?>