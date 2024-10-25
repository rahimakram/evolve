@extends('user.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <section class="single-payment ptb-128">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mxw-800 m-auto">
                        <div class="text-center mb-64">
                            <h1>Secure Your Spot</h1>
                            <p class="mb-64">You're almost there! Complete your booking by providing your details and
                                payment information. You'll receive a confirmation email with your booking details and any
                                additional information you need for your class.</p>
                            {{-- <h6>Slow Flow <span class="px-3">•</span>Mondays, 6:30 PM - 7:30 PM<span class="px-3">•</span>Steigenberger Hotel Doha<span class="px-3">•</span>Instructor: John</h6> --}}
                            <h6>{{ $timeline->title }} <span
                                    class="px-3">•</span>{{ \Carbon\Carbon::parse($timeline->date)->format('l') }},
                                {{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }} -
                                {{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}<span
                                    class="px-3">•</span>{{ $timeline->location_name }}<span
                                    class="px-3">•</span>Instructor:
                                {{ $timeline->instructor_name }}</h6>
                        </div>


                        <form action="{{ route('monthly.payment.process', $timeline->id) }}" id="monthlyPaymentForm"
                            method="POST">
                            @csrf
                            <div class="booking-details mb-64">
                                <h4 class="mb-32">1. Booking Details</h4>

                                <div class="log-group-box">
                                    <div class="log-group mb-32 w-100">
                                        <div class="log-label">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                                placeholder="Enter your full name">
                                        </div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="log-group-box">
                                    <div class="log-group mb-32 w-50">
                                        <div class="log-label">
                                            <label for="email">Email Address</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                                placeholder="you@company.com">
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="log-group mb-32 w-50">
                                        <div class="log-label">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                                placeholder="00000000">
                                        </div>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <!-- optional -->
                                    </div>
                                </div>

                                <div class="log-group-box">
                                    <div class="mb-16"><label for="choose-one-monday">Choose one of the available
                                            {{ \Carbon\Carbon::parse($timeline->date)->format('l') }}s
                                            in {{ \Carbon\Carbon::parse($timeline->date)->format('F Y') }} to attend the
                                            class:</label></div>
                                </div>

                                <div class="log-group-box">
                                    @foreach ($timeline->future_dates as $date)
                                        <label class="class-option mb-16 w-50">
                                            <input type="radio" name="class_date" id="class_date"
                                                value="{{ \Carbon\Carbon::parse($date)->format('F d,Y') }}"
                                                {{ old('class_date') == \Carbon\Carbon::parse($date)->format('F d,Y') ? 'checked' : '' }} />
                                            <div class="class-label">
                                                <span class="date">{{ \Carbon\Carbon::parse($date)->format('F d, Y') }}
                                                    ({{ \Carbon\Carbon::parse($date)->format('l') }})
                                                </span>
                                                <span
                                                    class="time">{{ \Carbon\Carbon::parse($timeline->start_time)->format('g:i A') }}
                                                    -
                                                    {{ \Carbon\Carbon::parse($timeline->end_time)->format('g:i A') }}</span>
                                            </div>
                                            @error('class_date')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </label>
                                    @endforeach
                                </div>

                                <div class="log-group-box">
                                    <div class="log-group mb-32 w-100">
                                        <div class="log-label">
                                            <label for="Attendees">Number of Attendees</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="number" name="Attendees" id="Attendees"
                                                value="{{ old('Attendees') ? old('Attendees') : 1 }}" placeholder="1"
                                                min="1">
                                        </div>
                                        @error('Attendees')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <h6 class="total-title text-black">TOTAL</h6>
                                <div class="qar-50 d-flex align-items-baseline">
                                    <input type="hidden" name="totalAmount"
                                        value="{{ old('totalAmount') ? old('totalAmount') : $timeline->monthly_pass_price }}"
                                        id="totalAmount">
                                    <h5 class="text-black">QAR</h5>
                                    <h3 class="text-black" id="totalAmountDisplay">{{ $timeline->monthly_pass_price }}</h3>
                                </div>
                                @error('totalAmount')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- 2. Payment Information -->
                            <div class="payment-information">
                                <h4 class="mb-32">2. Payment Information</h4>

                                <div class="log-group-box">
                                    <div class="log-group mb-32 w-50">
                                        <div class="log-label">
                                            <label for="name_card">Name on Card</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="text" name="name_card" id="name_card"
                                                value="{{ old('name_card') }}" placeholder="Your Name">
                                        </div>
                                        @error('name_card')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="log-group-box mb-64">
                                    <div class="log-group w-50">
                                        <div class="log-label">
                                            <label for="card_number">Card Number</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="text" name="card_number" id="card_number"
                                                value="{{ old('card_number') }}" placeholder="0000 0000 0000 0000">
                                        </div>
                                        @error('card_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="log-group w-25">
                                        <div class="log-label">
                                            <label for="card_expiry_date">Card Expiry Date</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="date" name="card_expiry_date" id="card_expiry_date"
                                                value="{{ old('card_expiry_date') }}" placeholder="00/00/0000">
                                        </div>
                                        @error('card_expiry_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="log-group w-25">
                                        <div class="log-label">
                                            <label for="cvv">CVV</label>
                                        </div>
                                        <div class="log-input">
                                            <input type="number" name="cvv" id="cvv"
                                                value="{{ old('cvv') }}" placeholder="000">
                                        </div>
                                        @error('cvv')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="log-group-box mb-64">
                                    <div class="log-group d-flex">
                                        <input type="checkbox" id="read-carefully" name="read_carefully" value="1"
                                            {{ old('read_carefully') ? 'checked' : '' }}>
                                        <!-- Button trigger modal -->
                                        <label for="read-carefully">I have read and understood the <span
                                                class="color-primary cursr-pointer" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop-902">Terms & Conditions</span></label>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop-902" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdrop-902Label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered mxw-800 text-center">
                                                <div class="modal-content ptb-48-64">
                                                    <div class="text-end">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="loc-model-body text-start">
                                                        <h4>Terms & Conditions for Slow Flow Classes</h4>
                                                        <ul class="terms-ul">
                                                            <li>
                                                                <h6>All purchased classes are non-refundable and
                                                                    non-transferable (cannot be shared).</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Valid only for Slow Flow classes and cannot be used for
                                                                    other services or workshops.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Valid only at the venue selected.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Reservations for classes must be made in advance
                                                                    directly with host venue.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>For Slow Flow Monthly Passes:</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Activation is upon attendance to the first Slow Flow
                                                                    class.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Validity is for 30 days after activation.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>The 30-day validity period cannot be extended.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Participants should consult with a physician before
                                                                    starting any new fitness program.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Evolve Wellness and the host venue is not liable for any
                                                                    injuries sustained during a class.</h6>
                                                            </li>
                                                            <li>
                                                                <h6>You agree to abide by the guidelines set by the Slow
                                                                    Flow instructor and host venue.</h6>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('read_carefully')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-schedule">Complete Payment</button>

                                <a href="#" class="btn btn-schedule two ms-4">Cancel and Return</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#Attendees').on('input', function() {
                var attendeeValue = parseInt($(this).val()) ||
                    1; // Get attendee value or default to 1 if empty
                var costPerAttendee = {{ $timeline->monthly_pass_price }};

                // Calculate the total amount
                var totalAmount = attendeeValue * costPerAttendee;

                // Update the total amount in the HTML
                $('#totalAmountDisplay').text(totalAmount);
                $('#totalAmount').val(totalAmount);
            });

            $('#monthlyPaymentForm').on('submit', function(e) {
                // Check if the checkbox is checked
                if (!$('#read-carefully').is(':checked')) {
                    e.preventDefault(); // Prevent form submission
                    // alert(
                    //     "Please check the 'I have read and understood the Terms & Conditions' box before submitting."
                    // );
                    toastr.error(
                        "Please check the 'I have read and understood the Terms & Conditions' box before submitting."
                    );
                }
            });
        });
    </script>
@endsection
