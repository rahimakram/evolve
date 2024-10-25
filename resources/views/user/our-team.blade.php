@extends('user.layouts.master')

@section('title')
    Home
@endsection

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
                                <li class="breadcrumb-item"><a href="#">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Our Team</h1>
                        <p>To complete our mission of giving you the highest standard of training, we select the right
                            people. Our team is our family. We hire humans, not just employees. We look at the core values
                            of the person, not just their practical skillset.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- {{ $trainers }} --}}


    <section id="our-team-gallery" class="gallery ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">

            <div class="mb-64">
                <div class="mxw-800 text-center m-auto">
                    <h2>Meet Our Team</h2>
                    <p>Team Evolve is your wellness team and with a range of trainers qualified in all types of fitness and
                        also sports training, our team will deliver for you at a convenient partner facility or at your
                        home. Want to lose weight, learn to swim or need some rehab? With trainers from Europe, Asia, Africa
                        and the Middle East you can find the right match.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav id="filter-team" class="filter-gallery">
                        <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="teal-all-tab" data-bs-toggle="tab"
                                data-bs-target="#teal-all" type="button" role="tab" aria-controls="teal-all"
                                aria-selected="true">View All</button>
                            @foreach ($specializations as $specialization)
                                <button class="nav-link" id="{{ Str::slug($specialization->specialization_name) }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ Str::slug($specialization->specialization_name) }}" type="button"
                                    role="tab" aria-controls="{{ Str::slug($specialization->specialization_name) }}"
                                    aria-selected="false">{{ $specialization->specialization_name }}</button>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="teal-all" role="tabpanel"
                            aria-labelledby="teal-all-tab">
                            <div class="row mb-64">
                                @forelse ($trainers as $trainer)
                                    {{-- {{ jsonToCommaSeparated($trainer->classes) }} --}}
                                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="400ms"
                                        data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn" onclick="trainer_info_modal({{ $trainer->u_id }})">
                                            <div class="card-img-box text-center">
                                                <img src="{{ URL::asset('storage/' . $trainer->avatar) }}" class="img-fluid"
                                                    alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">{{ $trainer->name }}</h5>
                                                <p class="card-text">
                                                    @if (!empty($trainer->specialization_names))
                                                        {{ implode(', ', $trainer->specialization_names->toArray()) }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="400ms"
                                        data-wow-duration="2s">
                                        <!-- Button trigger modal -->
                                        <div class="card btn">
                                            <div class="card-img-box text-center">
                                                <img src="{{ URL::asset('dist/images/team/team-1.png') }}" class="img-fluid"
                                                    alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Adeem</h5>
                                                <p class="card-text">Personal Trainer & Brazilian Jiu-Jitsu Coach | Group
                                                    Fitness Instructor</p>
                                            </div>
                                        </div>

                                    </div>
                                @endforelse
                            </div>
                        </div>

                        <!-- Specialization Tabs Content -->
                        @foreach ($specializations as $specialization)
                            <div class="tab-pane fade" id="{{ Str::slug($specialization->specialization_name) }}"
                                role="tabpanel"
                                aria-labelledby="{{ Str::slug($specialization->specialization_name) }}-tab">
                                <div class="row mb-64">
                                    @foreach ($trainers as $trainer)
                                        @if (in_array($specialization->specialization_name, $trainer->specialization_names->toArray()))
                                            <div class="col-lg-2 col-md-4" data-wow-delay="100ms" data-wow-duration="0.5s">
                                                <div class="card btn" onclick="trainer_info_modal({{ $trainer->u_id }})">
                                                    <div class="card-img-box text-center">
                                                        <img src="{{ URL::asset('storage/' . $trainer->avatar) }}"
                                                            class="img-fluid" alt="{{ $trainer->name }}">
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">{{ $trainer->name }}</h5>
                                                        <p class="card-text">
                                                            {{ implode(', ', $trainer->specialization_names->toArray()) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
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
                        <p>Give us a call, and let’s discuss how we can create an inspiring and motivating experience that
                            will propel your team forward for the rest of the year.</p>
                        <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img
                                    src="{{ URL::asset('dist/images/fitness-classes/Right.png') }}" class="img-fluid"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
