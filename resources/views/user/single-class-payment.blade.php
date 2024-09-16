@extends('user.layouts.master')

@section('title') Home @endsection

@section('content')


    <section class="single-payment ptb-128">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mxw-800 m-auto">
              <div class="text-center">
                <h2>Single Class Payment</h2>
                <p class="mb-64">Lorem ipsum dolor sit amet.</p>
              </div>

              <div class="customer-box">
                <h2 class="text-black">Slow Flow</h2>
                <div class="customer-info-box">
                  <div class="cus-info">
                    <div class="schedule-sub-title"><span><img src="./dist/images/location-marker.png" class="img-fluid" alt=""></span>Steigenberger Hotel Doha<span class="px-2">.</span><span class="color-primary pe-2">View map</span><span><img src="./dist/images/arrow-top.png" class="img-fluid" alt=""></span></div>
                    <div class="text-black py-3">Day: Tuesday</div>
                    <div class="text-black">Time: 6:30 PM - 7:30 PM (1 hour)</div>
                  </div>
                  <div class="cus-profile">
                    <div class="text-black mb-3">Instructor(S)</div>
                    <div class="d-flex align-items-center">
                      <div class="instructor"><img src="./dist/images/marwa.png" class="img-fluid" alt=""></div>
                      <div class="instructor-name text-black">Marwa</div>
                    </div>
                  </div>
                </div>                
              </div>

              <form action="">
                <div class="log-group-box">
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="name">Name</label></div>
                    <div class="log-input"><input type="text" placeholder="Your Name"></div>
                  </div>
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="email">Email Address</label></div>
                    <div class="log-input"><input type="email" placeholder="you@company.com"></div>
                  </div>
                </div>
                <div class="log-group-box">
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="phone-number">Phone Number</label></div>                  
                    <div class="log-input"><input type="tel" placeholder="00000000"></div><!-- optional -->                 
                  </div>
                  <div class="log-group mb-32 w-50">                    
                  </div>
                </div>
                <div class="log-group-box">
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="select-date">Select date</label></div>
                    <div class="log-input"><input type="date" placeholder="00/00/0000"></div>
                  </div>
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="Attendees">Attendees</label></div>
                    <div class="log-input"><input type="number" placeholder="1"></div>
                  </div>
                </div>
                <h6 class="total-title text-black">TOTAL</h6>
                <div class="qar-50 d-flex align-items-baseline">
                  <h5 class="text-black">QAR</h5>
                  <h3 class="text-black">50</h3>
                </div>
                <div class="log-group-box">
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="name-card">Name on Card</label></div>
                    <div class="log-input"><input type="text" placeholder="Your Name"></div>
                  </div>
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="card-number">Card Number</label></div>
                    <div class="log-input"><input type="text" placeholder="0000 0000 0000 0000"></div>
                  </div>
                </div>
                <div class="log-group-box">
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="card-expiry-date">Card Expiry Date</label></div>
                    <div class="log-input"><input type="date" placeholder="00/00/0000"></div>
                  </div>
                  <div class="log-group mb-32 w-50">
                    <div class="log-label"><label for="cvv">CVV</label></div>
                    <div class="log-input"><input type="number" placeholder="000"></div>
                  </div>
                </div>
                <div class="log-group-box">
                  <div class="log-group d-flex">
                    <input type="checkbox" id="read-carefully" name="read-carefully" value="Bike">
                    <label for="read-carefully">I have read and understood the <span class="color-primary">Terms & Conditions</span></label>
                  </div>                  
                </div>
                <a href="#" class="btn btn-schedule">Pay Now</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    @endsection

@section('script')

@endsection