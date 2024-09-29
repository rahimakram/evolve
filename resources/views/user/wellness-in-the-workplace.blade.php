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
                              <li class="breadcrumb-item active" aria-current="page">Wellness in the Workplace</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Wellness in the Workplace</h1>
                        <h6>The ultimate hub for all your organization’s wellness needs. We provide comprehensive resources and support for your employees’ health and wellbeing journeys.</h6>
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
                  <h3>Why is employee health and well-being important?</h3>
                  <p>Your employees spend up to 40+ hours a week at work, that can have huge impacts on their mental physical health. With the reduction of stress and the improvement of focus at work, comes increased productivity and fewer absences.<br><br>
                    Corporate wellbeing is important for many reasons. By improving your employee’s well being, you are having an effect on their quality of life which in turn will make for a more positive and productive workforce and result in greater success for your corporation.</p>
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
        
        <div class="mb-64">
          <div class="mxw-800 text-center m-auto">
            <h2>Transform Your Workplace with Evolve</h2>
            <p>Our offerings encourage employees to set achievable goals so they can experience success and the rewards that come with that success resulting in an increase in productivity for your organization and a better working environment. Part of our mission is to contribute to Qatar’s 2030 vision under the pillar of human development.</p>
          </div>
        </div>
       
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-1.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Workplace Nutrition</h5>
                <p class="card-text">Discover the power of workplace nutrition in our transformative workshop. Learn practical tips for a healthier diet to boost energy, focus, and mood. Our experts will debunk myths and provide personalized guidance. Explore how nutrition can reduce stress and anxiety. Leave with a personalized nutrition plan to unlock your full potential at work!</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-2.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Desk Exercise Workshop</h5>
                <p class="card-text">Join our Desk Exercises workshop to enhance your well-being and productivity at work. Combat the negative effects of prolonged sitting with simple exercises that can be done at your desk. Our certified fitness instructor will guide you through stretches, strength exercises, and relaxation techniques. Discover the benefits of desk exercises, including improved focus, mood, and reduced risk of health issues. Leave with a personalized desk exercise plan to incorporate into your daily routine. Take the first step towards a healthier work life with our Desk Exercises workshop!</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-3.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ergonomics & Posture Awareness</h5>
                <p class="card-text">Enhance your workplace comfort and productivity with our Ergonomics & Posture Awareness workshop. Learn how to optimize your workspace to prevent discomfort and injuries. Our expert will provide practical tips for maintaining good posture and ergonomic principles for your desk setup. Discover how proper ergonomics can reduce strain, improve focus, and boost overall well-being. Leave with a personalized plan to create a more ergonomic workspace. Don't miss this opportunity to improve your health and productivity at work!</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-64">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-4.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Body Active Biomechanics</h5>
                <p class="card-text">Unleash your body's potential with our Body Active Biomechanics workshop. Learn how to move efficiently and prevent injuries in the workplace. Our expert will teach you biomechanical principles to improve your movements and reduce strain. Discover how proper body mechanics can enhance your overall well-being and productivity. Leave with practical strategies to incorporate body active techniques into your daily routine.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-5.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Healthy Body, Healthy Mind</h5>
                <p class="card-text">Attend our Healthy Body, Healthy Mind workshop to uncover the vital relationship between physical health and mental well-being. Learn exercises and strategies to improve both areas, including the influence of good posture and ergonomics on mental clarity. Explore the advantages of a balanced lifestyle for heightened productivity and overall happiness. Depart with a refreshed sense of well-being and a customized wellness plan. Prioritize your health and unleash your full potential.</p>                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-6.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Face Yoga Masterclass</h5>
                <p class="card-text">Experience the rejuvenating power of Face Yoga in this exclusive masterclass! Developed in Japan over a decade ago, Face Yoga is a natural anti-aging practice that tones and tightens your facial muscles. Discover how this practice can reduce wrinkles, create a more symmetrical face, decrease stress, and boost confidence. Our step-by-step program will guide you through natural exercises to sculpt and firm your face, helping to slow down the signs of aging. Join us and unlock the secrets to a firmer, more youthful-looking face.</p>                
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
              <img src="{{ URL::asset('dist/images/wellness/wellness-12.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Breast Cancer Prevention</h5>
                <p class="card-text">Enhance your understanding of nutrition and breast cancer in our special workshop with the Qatar Cancer Society. Explore the role of nutrition in prevention and management. Learn about foods for breast health and practical tips for your diet. Empower yourself with knowledge and tools for better dietary choices. Prioritize your well-being and learn how nutrition impacts breast cancer prevention and management.</p>                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ URL::asset('dist/images/wellness/wellness-13.png') }}" class="img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diabetes Awareness and Risk Reduction</h5>
                <p class="card-text">Discover the importance of nutrition in reducing diabetes risks at Evolve's workshop for World Diabetes Day. Empower your team with the knowledge and tools for informed dietary choices. The workshop includes a presentation on nutrition and diabetes, interactive Q&A, a calorie calculation game, and discussions. Facilitated by Rachel, a UK-trained expert in Pharmacy, Personal Training, and Clinical Nutrition, and Professor Malik, a leading diabetes expert. Prioritize your employees' health with this invaluable workshop.</p>                
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