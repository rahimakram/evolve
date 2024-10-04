@extends('user.layouts.master')

@section('title') Home @endsection

@section('content')



    <!-- BANNER -->
    <section class="banner ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Fitness Training</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Fitness Training</h1>
                        <p>Now it's your time to move. Personal training tailored to you. Whatever your personal fitness goals, our fitness experts will help you get there.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="tournament ptb-64">
      <div class="container">
        <div class="row align-items-center bg-white">
          <div class="col-md-6">
              <div class="p64 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                  <h3>What is Fitness Training?</h3>
                  <p>Fitness training is a specialized service where individuals work closely with a certified trainer to achieve their fitness goals through personalized exercise programs and dedicated guidance. Unlike group fitness classes, personal training offers a one-on-one approach that is tailored to your specific needs, preferences, and fitness level.</p>
              </div>                
          </div>
          <div class="col-md-6 pe-md-0">
              <div class="videos-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
                  <img src="{{ URL::asset('dist/images/fitness-training/ft-image.png') }}" class="img-fluid" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ptb-128">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mxw-800 text-center m-auto wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
              <h2>Our Fitness Training Services</h2>
              <p>Our training entirely focused on you and creating long-lasting change. No quick fixes, no unrealistic promises and we simply refuse to compromise on quality. We work with you to create a bespoke solution to see you reach your goals. Fitness isn’t just about achieving a six-pack, it’s about how you move, feel, think and breathe. Choose from 1:1 personal training or small group private training sessions with your family or friends at our partner locations or the privacy of your home.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="fitness-training-gallery" class="gallery wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">
        <div class="type-of-ftns-title text-center">Types of Fitness Training</div>
        <div class="ptb-64">
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Aerobics</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-2.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Aqua Aerobics</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-3.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Body Building</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-4.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Body Toning</h5>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-5.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Circuit Training</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-6.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Dance</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-7.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Flexibility</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-8.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Functional Fitness</h5>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/training-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>                  
                </div>
              </div>
            </div>
          </div>
        </div>                 
      </div>
    </section>

    <section id="fitness-training-gallery2" class="gallery wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">
        <div class="type-of-ftns-title text-center">Fitness Training Locations</div>
        <div class="ptb-64">
          <div class="row mb-32">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-1.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Banyan Tree Doha</h5>
                  <p>Msheireb</p>                 
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-2.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Dynamik Gym</h5>
                  <p>The Pearl Qatar</p>                 
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-3.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Mandarin Oriental</h5>
                  <p>Msheireb</p>                 
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-4.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Sharq Village & Spa</h5>
                  <p>Ras Bu Abboud</p>                 
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-2.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p>Msheireb</p>                 
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-3.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p>Msheireb</p>                 
                </div>
              </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <div class="card">
                <div class="card-img-box">
                <img src="{{ URL::asset('dist/images/fitness-training/t-loc-7.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Park Hyatt Doha</h5>
                  <p>Msheireb</p>                 
                </div>
              </div>
            </div>            
          </div>
        </div>                 
      </div>
    </section>


    <section class="ready-to-evolve ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="ready-to-evolve-content mxw-800 p64 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
              <h3>Ready to Plan Your Next Event?</h3>
              <p>Give us a call, and let’s discuss how we can create an inspiring and motivating experience that will propel your team forward for the rest of the year.</p>
              <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img src="{{ URL::asset('dist/images/fitness-classes/Right.png') }}" class="img-fluid" alt=""></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('script')

@endsection