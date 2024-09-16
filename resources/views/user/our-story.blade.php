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
                              <li class="breadcrumb-item"><a href="#">About</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Our Story</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Our Story</h1>
                        <h6>Evolve Wellness is your partner in wellness & employee engagement. We design and execute tailored wellness programs for individuals and organisations, specialising in corporate wellness, team building, wellness workshops, event management.</h6>
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
              <h2>We bring a total lifestyle approach to everything we do.</h2>
              <p>Evolve is a next-generation wellness company that incorporates modern day conceptions and ideologies based around health and wellbeing. Our team of experts will take pride in improving your quality of life or company wellness culture.<br><br>
                Through our top-notch team we deliver specialised training services ranging from fitness and nutrition to exercise rehabilitation and mindfulness. Your wellness development will be facilitated by people that want to understand you in order to deliver training and solutions that will empower you.<br><br>
                We have a solid base of talent in house with access to a network of strong business partners providing diversity in our offering and depth and experience in related areas of our core services. This diversity means whatever service we deliver for you, it will be an enjoyable experience and you get value for money and more than you expect.<br><br>
                Being equally committed to developing each and every client we encounter, from companies to you the individual, we deliver a seamless service from one-to-one personal training sessions and group classes to food and fitness related entertainment at events.<br><br>
                For maximum wellness Evolve's ideology is based on a 'total lifestyle' approach focusing on the mind, body and soul in order to keep you focused on what's important in life. We believe that wellness is the foundation of thought and to be truly constructive in life you must first arm yourself with inner strength.
                Ultimately, we look to lead our clients through an evolution in Mind, Body and Soul. We hope you will join us on this glorious journey.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    @endsection

@section('script')

@endsection