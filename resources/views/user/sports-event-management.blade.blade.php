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
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">For Companies</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Sports Event Management</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Sports Event Management</h1>
                        <p>We offer a turnkey solution to sports event management. From concept design, planning, delivery and event execution our team includes experience in all areas to ensure that your event is not only attractive and relevant to its target audience but also leaves a lasting memory for both those that attend and for the unfortunate ones that miss out.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PARA-SECTION -->
    <section class="our-fitness ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="mxw-800 text-center m-auto">
                <h2>Elevate Your Sports Event with Evolve</h2>
                <p>Our experience in this space is broad and has been gained through delivering a first of its kind Martial Arts Exhibition event, large scale National Sports Day events. Our work in Sports Management has ignited passion in our team to create an immersive experience for all that attend. With a track record of successful event delivery, partnerships and media outcomes, we have demonstrated our ability to deliver results that exceed expectations.</p>
            </div>
            </div>
          </div>            
        </div>
    </section>


    <!-- ABOUT -->
    <section class="tournament ptb-64 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
          <div class="row align-items-center bg-white">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                <div class="p64">
                    <h3>Msheireb Padel Tournament</h3>
                    <p>Evolve in association with Msheireb Properties the leading real estate developer in Qatar, known for its flagship project, Msheireb Downtown Doha. Msheireb properties new installation of an outdoor padel court in the courtyard of Msheireb museums was a grand occasion and the best way to highlight the new court was to organize a 16-team tournament across 5 days.<br><br>
                        The Evolve Team delivered a competitive and exciting tournament for a select number of teams comprised of teams from all different nationalities in a thrilling padel tournament to be awarded the grand prize and awarded the title of tournament champions.<br><br>
                        Our sponsors Qatar Living broadcasted the event through their media channels and provided some amazing footage of the tournament highlights, the final was an exciting match lasting almost 2 hours where the champions were awarded a cheque from senior level executives from Msheireb Properties.</p>
                </div>                
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
                <div class="videos-box p64 ps-md-0">
                  {{-- <video autoplay="" loop="" controls="" 
                  poster="{{ URL::asset('dist/images/sports-management/Video1.png') }}">
                  <source type="video/mp4" src="{{ URL::asset('dist/images/sports-management/dummy-video.mp4') }}">             
                  </video> --}}
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/kYylPCciec0?si=PLn0E-4rIw2H5H3B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>                
            </div>
          </div>

          <div class="row align-items-center mt-64 bg-white">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                <div class="p64">
                    <h3>Muay Thai Roadshow 2016</h3>
                    <p>Evolve in association with the Ministry of Foreign Affairs of Thailand and the Royal Thai Embassy in Qatar and Grand Hyatt Doha brought the sport of Muay Thai to Doha in 2016. Leading Muay Thai fighters and Coaches came to Doha for a unique event open to the public for free.<br><br>
                      The Evolve Martial Arts Team along with the delegation from Thailand delivered workshops and live fight exhibitions as well as a seminar on the background into the sport and the cultural ceremonies that surround it.<br><br>
                      The event took place in the Ballroom of the Grand Hyatt Doha on Saturday 20th August and was well attend by representatives from Qatar Olympic Committee attended with a host of Ambassadors at the invitation of H.E. Soonthorn Chaiyindeepum, ambassador of Thailand to Qatar. Hosting the largest public event for Muay Thai in Doha’s history, the martial arts workshop conducted as part of the event included close to 100 participants with over 15 coaches.</p>
                </div>                
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
              <div class="videos-box p64 ps-md-0">
                {{-- <video autoplay="" loop="" controls="" 
                poster="{{ URL::asset('dist/images/sports-management/Video1.png') }}">
                <source type="video/mp4" src="{{ URL::asset('dist/images/sports-management/dummy-video.mp4') }}">             
                </video> --}}
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jRDpsUxAl_w?si=IQBLFUJ8XJLFM3eM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div> 
            </div>
          </div>

          <div class="row align-items-center mt-64 bg-white">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                <div class="p64">
                    <h3>Qatar National Sports Day</h3>
                    <p>Are you aiming to host a sports day that goes above and beyond expectations? Let Evolve Wellness take the lead in creating an unforgettable experience for your participants!<br><br>
                      From initial planning to flawless execution, we specialize in organizing and delivering sports day activations that are packed with thrilling activities, engaging entertainment, and much more.<br><br>
                      Our team is dedicated to ensuring that every aspect of your sports day is tailored to your needs and leaves a lasting impression on your attendees.</p>
                </div>                
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
              <div class="videos-box p64 ps-md-0">
                {{-- <video autoplay="" loop="" controls="" 
                poster="{{ URL::asset('dist/images/sports-management/Video1.png') }}">
                <source type="video/mp4" src="{{ URL::asset('dist/images/sports-management/dummy-video.mp4') }}">             
                </video> --}}
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2BJf-j222kM?si=KlHxAqA0UUpl4R4j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <div class="row align-items-center mt-64 bg-white">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                <div class="p64">
                    <h3>Family Day Events</h3>
                    <p>Creating a fun-filled environment where families can connect, laugh and make unforgettable memories is something we love to do for our clients. Designing vibrant and engaging activities that caters for a variety of age groups is our main objective. Our understanding of how to incorporate local culture and taste allows us to craft unique and exciting activities, from thrilling games and captivating entertainment to wellness areas and cozy relaxation spots.</p>
                </div>                
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
                <div class="videos-box p64 ps-md-0">
                    <img src="{{ URL::asset('dist/images/sports-management/image-1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
          </div>
        </div>
    </section>


    <section class="quote ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mxw-800 text-center m-auto">
              <div class="quote-img"><img src="{{ URL::asset('dist/images/sports-management/Quote.png') }}" class="img-fluid" alt=""></div>
              <h4>Our team had the pleasure of working with Evolve, and the impact was beyond incredible!</h4>
              <h5>Ahmad Ali</h5>
              <h6>AQatar Company</h6>
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
              <h6>Give us a call, and let’s discuss how we can create an inspiring and motivating experience that will propel your team forward for the rest of the year.</h6>
              <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img src="{{ URL::asset('dist/images/fitness-classes/Right.png') }}" class="img-fluid" alt=""></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

@section('script')

@endsection