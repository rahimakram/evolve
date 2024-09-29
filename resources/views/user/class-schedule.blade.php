@extends('user.layouts.master')

@section('title') Home @endsection

@section('content')
    <!-- BANNER -->
    <section class="banner ptb-128">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Class Schedule</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Class Schedule</h1>
                        <h6>Please don't hesitate to reach out to us with any questions, comments, or concerns. Our team is here to assist you and will respond promptly to your message. You can contact us via the form below or directly through email. We look forward to hearing from you!</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-story ptb-128">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mxw-800 text-center m-auto">
              <h2>July 2024 Class Schedule</h2>
              <p>Check out our timetable to discover the perfect classes to fit your schedule and fitness goals.Last updated: July 8, 2024</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="schedule pb-128">
      <div class="container">
        <!-- TIME -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3"></div>
          <div class="col-md-3">9 AM - 10 AM</div>
          <div class="col-md-3">6 PM - 7 PM</div>
          <div class="col-md-3">6:30 PM - 7:30 PM</div>
        </div>
        <!-- SUNDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">SUNDAY</div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
        </div>
        <!-- MONDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">MONDAY</div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <!-- Button trigger modal -->
            <div class="schedule-box btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-201">
              <div class="schedule-title">Slow Flow (Lola)</div>
              <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>Kempinski Marsa Malaz</div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop-201" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-201Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="schedule-pop-box p64 pt-88">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="text-black text-start">Slow Flow</h2>
                    <div class="customer-box text-start">
                      
                      <div class="customer-info-box">
                        <div class="cus-info">                        
                          <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>Steigenberger Hotel Doha<span class="px-2">.</span><span class="color-primary pe-2">View map</span><span><img src="{{ URL::asset('dist/images/arrow-top.png') }}" class="img-fluid" alt=""></span></div>
                          <p class="ptb-32">Join us on Wednesday from 6:30 to 7:30 pm for Slow Flow at Steigenberger Hotel Doha by Marwa. This rejuvenating session is designed to harmonize mind, body, and spirit through gentle poses, mindful breathing, and relaxation techniques. Whether you're a beginner or seasoned practitioner, discover inner peace and holistic wellness in a serene setting. Come experience the transformative power of Slow Flow with us.</p>
                          <div class="text-black py-3">Day: Tuesday</div>
                          <div class="text-black">Time: 6:30 PM - 7:30 PM (1 hour)</div>
                          <div class="payments-types">
                            <div class="single-pay">
                              <h6>Single Class</h6>
                              <div class="d-flex align-items-baseline">
                                <h5 class="text-black">QAR</h5>
                                <h3 class="text-black">50</h3>
                                <div class="qar-50-btn"></div>
                              </div>
                              <a href="single-class-payment.html" class="btn btn-schedule">Book single class</a>
                            </div>
                            <div class="single-pay">
                              <h6>Single Class</h6>
                              <div class="d-flex align-items-baseline">
                                <h5 class="text-black">QAR</h5>
                                <h3 class="text-black">50</h3>
                              </div>
                              <a href="monthly-pass-payment.html" class="btn btn-schedule">Purchase monthly pass</a>
                            </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="cus-profile">
                          <div class="text-black mb-3">Instructor(S)</div>
                          <div class="d-flex align-items-center">
                            <div class="instructor"><img src="{{ URL::asset('dist/images/marwa.png') }}" class="img-fluid" alt=""></div>
                            <div class="instructor-name text-black">Marwa</div>
                          </div>
                        </div>
                    </div>                
                    </div>
                  </div>                  
                </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>            
        </div>                            
        <!-- TUESDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">TUESDAY</div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">
              <div class="schedule-title">Aerobics (Derrick)</div>
              <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>Steigenberger Hotel Doha</div>
            </div>
          </div>
        </div>
        <!-- WEDNESDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">WEDNESDAY</div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">
              <div class="schedule-title">Slow Flow (Marwa)</div>
              <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>Steigenberger Hotel Doha</div>
            </div>
          </div>
        </div>
        <!-- THURSDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">THURSDAY</div>
          <div class="col-md-3">
            <div class="schedule-box"></div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
        </div>
        <!-- FRIDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">FRIDAY</div>
          <div class="col-md-3">
            <div class="schedule-box">
              <div class="schedule-title">Slow Flow (Ayesha)</div>
              <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>The Bentley Luxury Hotel and Suites</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
        </div>
        <!-- SATURDAY -->
        <div class="row align-items-center text-center mb-32">
          <div class="col-md-3">SATURDAY</div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">
              <div class="schedule-title">Slow Flow (Ayesha)</div>
              <div class="schedule-sub-title"><span><img src="{{ URL::asset('dist/images/location-marker.png') }}" class="img-fluid" alt=""></span>The Bentley Luxury Hotel and Suites</div>              
            </div>
          </div>
          <div class="col-md-3">
            <div class="schedule-box">              
            </div>
          </div>
        </div>
      </div>
    </section>


    
    @endsection

@section('script')

@endsection