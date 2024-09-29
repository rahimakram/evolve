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
                              <li class="breadcrumb-item"><a href="#">About</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>                        
                    </div>
                    <div class="mxw-800">
                        <h1>Our Team</h1>
                        <h6>To complete our mission of giving you the highest standard of training, we select the right people. Our team is our family. We hire humans, not just employees. We look at the core values of the person, not just their practical skillset.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery ptb-128">
      <div class="container">

        <div class="mb-64">
          <div class="mxw-800 text-center m-auto">
            <h2>Meet Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a mattis elit. Nunc vel lectus libero. Sed quis sem ac sem imperdiet rutrum. Phasellus vel pulvinar tortor, ac scelerisque.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <nav id="filter-team" class="filter-gallery">
              <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                <button class="nav-link active" id="teal-all-tab" data-bs-toggle="tab" data-bs-target="#teal-all" type="button" role="tab" aria-controls="teal-all" aria-selected="true">View All</button>
                <button class="nav-link" id="personal-trainers-tab" data-bs-toggle="tab" data-bs-target="#personal-trainers" type="button" role="tab" aria-controls="personal-trainers" aria-selected="false">Personal Trainers</button>
                <button class="nav-link" id="yoga-tab" data-bs-toggle="tab" data-bs-target="#yoga" type="button" role="tab" aria-controls="yoga" aria-selected="false">Yoga</button>
                <button class="nav-link" id="arts-tab" data-bs-toggle="tab" data-bs-target="#arts" type="button" role="tab" aria-controls="arts" aria-selected="false">Martial Arts</button>
                <button class="nav-link" id="dance-tab" data-bs-toggle="tab" data-bs-target="#dance" type="button" role="tab" aria-controls="dance" aria-selected="false">Dance</button>
                <button class="nav-link" id="pilates-tab" data-bs-toggle="tab" data-bs-target="#pilates" type="button" role="tab" aria-controls="pilates" aria-selected="false">Pilates</button>
                <button class="nav-link" id="rehab-tab" data-bs-toggle="tab" data-bs-target="#rehab" type="button" role="tab" aria-controls="rehab" aria-selected="false">Rehab</button>
                <button class="nav-link" id="nutrition-tab" data-bs-toggle="tab" data-bs-target="#nutrition" type="button" role="tab" aria-controls="nutrition" aria-selected="false">Nutrition</button>
                <button class="nav-link" id="natal-tab" data-bs-toggle="tab" data-bs-target="#natal" type="button" role="tab" aria-controls="natal" aria-selected="false">Natal</button>
                <button class="nav-link" id="aquatics-tab" data-bs-toggle="tab" data-bs-target="#aquatics" type="button" role="tab" aria-controls="aquatics" aria-selected="false">Aquatics</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
    
              <div class="tab-pane fade show active" id="teal-all" role="tabpanel" aria-labelledby="teal-all-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <div class="card btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-701">
                      <img src="{{ URL::asset('dist/images/team/team-1.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Adeem</h5>
                        <p class="card-text">Personal Trainer & Brazilian Jiu-Jitsu Coach | Group Fitness Instructor</p>                
                      </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal model-team-img-pop fade" id="staticBackdrop-701" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop-701Label" aria-hidden="true">
                      <div class="modal-dialog mxw-800 text-center">
                        <img src="{{ URL::asset('dist/images/team/team-1-pop.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-2.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Anastasiia</h5>
                        <p class="card-text">Personal Trainer | Group Fitness Trainer | Pilates</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Anjali</h5>
                        <p class="card-text">Yoga Instructor | Group Fitness Instructor</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-5.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-6.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-8.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-9.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-10.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-11.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-12.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="personal-trainers" role="tabpanel" aria-labelledby="personal-trainers-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-1.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-2.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-5.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-6.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-8.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>              
                </div>
              </div>
              <div class="tab-pane fade" id="yoga" role="tabpanel" aria-labelledby="yoga-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-1.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-2.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-5.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-6.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="arts" role="tabpanel" aria-labelledby="arts-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-1.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-2.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>              
                </div>
              </div>
              <div class="tab-pane fade" id="dance" role="tabpanel" aria-labelledby="dance-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-5.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>             
                </div>
              </div>
              <div class="tab-pane fade" id="pilates" role="tabpanel" aria-labelledby="pilates-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-6.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-8.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-4.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>             
                </div>
              </div>
              <div class="tab-pane fade" id="rehab" role="tabpanel" aria-labelledby="rehab-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-8.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-9.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nutrition" role="tabpanel" aria-labelledby="nutrition-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-10.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-11.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-12.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="natal" role="tabpanel" aria-labelledby="natal-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-2.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-9.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="aquatics" role="tabpanel" aria-labelledby="aquatics-tab">
                <div class="row mb-64">
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-7.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-10.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                      <img src="{{ URL::asset('dist/images/team/team-3.png') }}" class="img-fluid" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title">Firstname Lastname</h5>
                        <p class="card-text">Specializations</p>                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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