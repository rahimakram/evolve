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
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Join a Class</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Join a Class</h1>
                        <p>From high-intensity interval training to calming slow flow sessions, we offer a diverse range of
                            group classes throughout the week to keep you motivated and engaged. Our expert instructors lead
                            each session with enthusiasm and expertise, ensuring you get the most out of every workout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="class-schedule ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="mb-64">
                <div class="mxw-800 text-center m-auto">
                    <h2>Class Schedule - {{ $currentMonthName }} {{ $currentYear }}</h2>
                    <p>Last updated: {{ \Carbon\Carbon::parse($lastUpdatedDate)->format('F j, Y') }}</p>
                </div>
            </div>

            <div class="row wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                <div class="col-12">
                    <nav id="filter-schedule" class="filter-gallery">
                        <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="schedule-all-tab" data-bs-toggle="tab"
                                data-bs-target="#schedule-all" type="button" role="tab" aria-controls="schedule-all"
                                aria-selected="true">View All</button>
                            @foreach ($day_names as $day)
                                <button class="nav-link" id="{{ $day }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{ $day }}" type="button" role="tab"
                                    aria-controls="{{ $day }}" aria-selected="false">{{ $day }}</button>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="schedule-all" role="tabpanel"
                            aria-labelledby="schedule-all-tab">
                            @foreach ($grouped_timelines as $day => $day_timelines)
                                <div class="row mb-64">
                                    <div class="days-title mb-32">{{ $day }}</div>
                                    @foreach ($day_timelines as $timeline)
                                        {{-- {{ $timeline }} --}}
                                        <div class="col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2s">
                                            <div class="days-box p-32">
                                                <div class="days-time mb-32">
                                                    <div class="d-flex justify-content-between mb-16">
                                                        <div class="days-pic-text">
                                                            {{-- <h5>6:30 PM - 7:30 PM</h5> --}}
                                                            <h5>{{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}
                                                            </h5>
                                                            <h3>{{ $timeline->title }}</h3>
                                                            <h6>{{ $timeline->location_name }} <span
                                                                    class="px-2">•</span>
                                                                @php
                                                                    $mapLink = '';
                                                                    if (
                                                                        !preg_match(
                                                                            '/^https?:\/\//i',
                                                                            $timeline->map_link,
                                                                        )
                                                                    ) {
                                                                        // If not, prepend http://
                                                                        $mapLink = 'http://' . $timeline->map_link;
                                                                    }
                                                                @endphp
                                                                <span class="color-primary">View map</span><span><a
                                                                        href="{{ $mapLink }}"><img
                                                                            src="{{ URL::asset('dist/images/arrow-top.png') }}"
                                                                            class="img-fluid ms-2"
                                                                            alt=""></a></span>
                                                            </h6>
                                                            <h6>Instructor: {{ $timeline->instructor_name }} <span
                                                                    class="px-2">•</span> <span class="color-primary">View
                                                                    profile</span><span><a href="#"><img
                                                                            src="{{ URL::asset('dist/images/arrow-top.png') }}"
                                                                            class="img-fluid ms-2"
                                                                            alt=""></a></span>
                                                            </h6>
                                                        </div>
                                                        <div class="days-pic">
                                                            <img src="{{ URL::asset('storage/' . $timeline->instructor_image) }}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <p>{{ strip_tags($timeline->description) }}</p>
                                                </div>

                                                <div class="days-dates">
                                                    <div class="dates-available">DATES AVAILABLE:</div>
                                                    <div class="dates-available-days">
                                                        <div class="d-a-day">July 1</div>
                                                        <div class="d-a-day">July 8</div>
                                                        <div class="d-a-day">July 15</div>
                                                        <div class="d-a-day">July 22</div>
                                                        <div class="d-a-day">July 29</div>
                                                    </div>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <a href="#" class="btn btn-schedule btn-join-class"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop-801"
                                                    data-title="{{ $timeline->title }}"
                                                    data-address="{{ $timeline->location_name }}"
                                                    data-day="{{ $timeline->day_name }}"
                                                    data-start-time="{{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }}"
                                                    data-end-time="{{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}"
                                                    data-instructor-name="{{ $timeline->instructor_name }}"
                                                    data-timeline-id="{{ $timeline->id }}">Join
                                                    Class</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        @foreach ($grouped_timelines as $day => $day_timelines)
                            <div class="tab-pane fade" id="{{ $day }}" role="tabpanel"
                                aria-labelledby="{{ $day }}-tab">
                                <div class="row d-flex">
                                    <div class="days-title mb-32">{{ $day }}</div>
                                    @foreach ($day_timelines as $timeline)
                                        @if ($day == $timeline->day_name)
                                            <div class="col-md-6">
                                                <div class="days-box p-32">
                                                    <div class="days-time mb-32">
                                                        <div class="d-flex justify-content-between mb-16">
                                                            <div class="days-pic-text">
                                                                <h5>{{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }}
                                                                    -
                                                                    {{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}
                                                                </h5>
                                                                <h3>{{ $timeline->title }}</h3>
                                                                <h6>{{ $timeline->location_name }} <span
                                                                        class="px-2">•</span>
                                                                    @php
                                                                        $mapLink = '';
                                                                        if (
                                                                            !preg_match(
                                                                                '/^https?:\/\//i',
                                                                                $timeline->map_link,
                                                                            )
                                                                        ) {
                                                                            // If not, prepend http://
                                                                            $mapLink = 'http://' . $timeline->map_link;
                                                                        }
                                                                    @endphp
                                                                    <span class="color-primary">View map</span><span><a
                                                                            href="{{ $mapLink }}"><img
                                                                                src="{{ URL::asset('dist/images/arrow-top.png') }}"
                                                                                class="img-fluid ms-2"
                                                                                alt=""></a></span>
                                                                </h6>
                                                                <h6>Instructor: {{ $timeline->instructor_name }} <span
                                                                        class="px-2">•</span> <span
                                                                        class="color-primary">View profile</span><span><a
                                                                            href="#"><img
                                                                                src="{{ URL::asset('dist/images/arrow-top.png') }}"
                                                                                class="img-fluid ms-2"
                                                                                alt=""></a></span>
                                                                </h6>
                                                            </div>
                                                            <div class="days-pic">
                                                                <img src="{{ URL::asset('storage/' . $timeline->instructor_image) }}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <p>{{ strip_tags($timeline->description) }}</p>
                                                    </div>

                                                    <div class="days-dates">
                                                        <div class="dates-available">DATES AVAILABLE:</div>
                                                        <div class="dates-available-days">
                                                            <div class="d-a-day">July 1</div>
                                                            <div class="d-a-day">July 8</div>
                                                            <div class="d-a-day">July 15</div>
                                                            <div class="d-a-day">July 22</div>
                                                            <div class="d-a-day">July 29</div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="btn btn-schedule btn-join-class"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop-801"
                                                        data-title="{{ $timeline->title }}"
                                                        data-address="{{ $timeline->location_name }}"
                                                        data-day="{{ $timeline->day_name }}"
                                                        data-start-time="{{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }}"
                                                        data-end-time="{{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}"
                                                        data-instructor-name="{{ $timeline->instructor_name }}"
                                                        data-timeline-id="{{ $timeline->id }}">Join
                                                        Class</a>
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-801" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop-801Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mxw-800 text-center">
            <div class="modal-content ptb-48-64">
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="loc-model-body">
                    <h4>Choose Payment Option</h4>
                    <div class="mb-48" id="timelineDetails">
                        {{-- <h6>Slow Flow <span class="px-3">•</span>Mondays, 6:30 PM -
                            7:30 PM<span class="px-3">•</span>Steigenberger Hotel
                            Doha<span class="px-3">•</span>Instructor: John</h6> --}}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center">
                                <h5>Single Pass</h5>
                                <p>Enjoy one Slow Flow class with this single-use pass,
                                    perfect for a focused and relaxing session.</p>
                                <div class="d-flex align-items-end justify-content-center">
                                    <div class="sp">
                                        <h6>QAR</h6>
                                    </div>
                                    <div class="sp">
                                        <h2>50</h2>
                                    </div>
                                    <div class="sp">
                                        <h6>.00</h6>
                                    </div>
                                </div>
                                <a href="#" id="singlePassLink" class="btn btn-schedule">Buy Single Pass <span
                                        class="ps-3"><img src="{{ URL::asset('dist/images/Right-white.png') }}"
                                            class="img-fluid" alt=""></span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <h5>Monthly Pass</h5>
                                <p>Unlimited access to Slow Flow classes for a month,
                                    ideal for maintaining a consistent practice.</p>
                                <div class="d-flex align-items-end justify-content-center">
                                    <div class="sp">
                                        <h6>QAR</h6>
                                    </div>
                                    <div class="sp">
                                        <h2>149</h2>
                                    </div>
                                    <div class="sp">
                                        <h6>.00</h6>
                                    </div>
                                </div>
                                <a href="#" id="monthlyPassLink" class="btn btn-schedule">Buy Monthly Pass <span
                                        class="ps-3"><img src="{{ URL::asset('dist/images/Right-white.png') }}"
                                            class="img-fluid" alt=""></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // When a trainer card is clicked
            // $('.btn-join-class').on('click', function() {
            $('#nav-tabContent').on('click', '.btn-join-class', function() {
                console.log("clicked");
                // return false;
                var title = $(this).data('title');
                var day = $(this).data('day');
                var start_time = $(this).data('start-time');
                var end_time = $(this).data('end-time');
                var address = $(this).data('address');
                var instructor_name = $(this).data('instructor-name');
                var timeline_id = $(this).data('timeline-id');

                $('#timelineDetails').html(
                    '<h6>' + title + '<span class="px-3">•</span>' + day + ', ' +
                    start_time + ' ' + '-' + ' ' + end_time + '<span class="px-3">•</span>' + address +
                    '<span class="px-3">•</span>Instructor: ' + instructor_name + '</h6>'
                );

                // Update the anchor href with the dynamic route
                var singlePassUrl = "{{ route('single.pass.payment', ':id') }}";
                singlePassUrl = singlePassUrl.replace(':id', timeline_id);
                $('#singlePassLink').attr('href', singlePassUrl); // Set the new URL in the anchor tag

                var monthlyPassUrl = "{{ route('monthly.pass.payment', ':id') }}";
                monthlyPassUrl = monthlyPassUrl.replace(':id', timeline_id);
                $('#monthlyPassLink').attr('href', monthlyPassUrl); // Set the new URL in the anchor tag
            });
        });
    </script>
@endsection
