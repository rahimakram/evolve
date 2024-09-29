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
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">For Companies</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Environmental Social Governance (ESG)</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Environmental Social Governance (ESG)</h1>
                        <h6>Evolve is committed to supporting Qatar's environmental, social, and corporate governance (ESG) development by offering a range of workshops designed to help companies meet their objectives.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="tournament ptb-64">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
              <div class="p64">
                  <h3>Why is ESG important?</h3>
                  <p>At Evolve, we understand that Environmental, Social, and Governance (ESG) considerations are vital for corporate sustainability and growth.<br><br>
                    By prioritizing ESG, companies in Qatar can align with global sustainability goals, attract responsible investors, and strengthen stakeholder relationships. Our events and workshops delve into the significance of ESG, offering practical insights and strategies to integrate these principles effectively into business practices.</p>
              </div>                
          </div>
          <div class="col-md-6">
              <div class="videos-box">
                  <img src="{{ URL::asset('dist/images/key-skills/key-bg.png') }}" class="img-fluid" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>


    <section class="gallery ptb-128">
      <div class="container">
        <div class="row mb-64">
          <div class="col-12">
            <div class="mxw-800 text-center m-auto">
              <h2>Empowering ESG: Evolve for Impact</h2>
              <p>By providing thought leadership, practical strategies, and actionable insights, Evolve empowers organizations to foster a culture of responsibility, inclusion, and sustainability, contributing positively to both society and the environment while achieving their business goals.</p>
            </div>
          </div>
        </div>        
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-1.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Make 2024 Your Comeback Year</h5>
                <p class="card-text">Join us for a transformative two-hour workshop designed to help you live a more purposeful, inspiring, and meaningful life in 2024! Discover strategies for overcoming challenges, staying focused, and living up to your highest potential. This workshop will provide thought-provoking ideas, timeless wisdom, and inspiring personal stories to motivate you to live your most expansive and meaningful life.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-2.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">The Power of Perception - Diversity & Inclusion Workshop</h5>
                <p class="card-text">Experience a transformative workshop honouring the legacy of Dr. Martin Luther King Jr. Explore strategies for effectively integrating diversity and inclusion into your organizational culture and language, aligning with ESG objectives. Gain the confidence to discuss and apply these concepts, fostering a more inclusive environment for all.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-3.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">International Women’s Day - The Women of Impact Workshop</h5>
                <p class="card-text">Celebrate International Women's Day with a workshop dedicated to empowering women to tap into their full potential and achieve amazing things at every stage of life. Join us as we explore the power of a growth mindset and embark on a journey of self-discovery, focusing on overcoming challenges and embracing the unique strengths of women. Step into your greatness and unleash your full potential with us!</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-4.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-5.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-6.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-7.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-8.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-9.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-1.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-2.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-3.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/ESG/esg-4.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Our leadership development course is designed to equip individuals with the essential skills and knowledge needed to excel in leadership roles. Through interactive sessions and practical exercises, participants will learn effective communication, decision-making, and team-building techniques. This course is ideal for aspiring leaders looking to enhance their capabilities and advance their careers.</p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="quote ptb-128">
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


    <section class="ready-to-evolve ptb-128">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="ready-to-evolve-content mxw-800 p64">
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