<!-- Shared Modal -->
<div class="modal model-team-img-pop fade" id="trainerDetailModal" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="trainerDetailModal" aria-hidden="true">
    <div class="modal-dialog mxw-800 text-center">
        <div class="modal-content ptb-48-64">
            <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="loc-model-body">
                <div class="team-pop1 mb-32">
                    {{-- @php
                        print_r($trainer);
                    @endphp --}}
                    <div class="t-pop-img">
                        <img id="trainer-avatar" src="{{ URL::asset('storage/' . $trainer->avatar) }}" class="img-fluid"
                            alt="">
                    </div>
                    {{--  --}}
                    {{-- <h4>Adeem <span><img src="./dist/images/team/pk-icon.png" class="img-fluid"
                                    alt=""></span></h4> --}}
                    {{--  --}}
                    <div class="t-pop-content">
                        <h4 id="trainer-name">{{ $trainer->name }}<span><img
                                    src="{{ URL::asset('dist/images/flags/' . $trainer->country_flag) }}"
                                    style="width: 25px" class="img-fluid trainer-nation-flag mb-3 ms-3"
                                    alt=""></span></h4>
                        <h6 class="">
                            <span id="trainer-experience">{{ jsonToCommaSeparated($trainer->experience) }}</span>
                            <span class="px-3">•</span>
                            <span id="trainer-languages">{{ jsonToCommaSeparated($trainer->languages) }}</span>
                        </h6>
                        <div id="trainer-specializations" class="find-your-tab">
                            @forelse ($trainer->specialization_names->toArray() as $specialization_name)
                                <div class="btn-find">{{ $specialization_name }} </div>
                            @empty
                                <div class="btn-find">No Specialization </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="team-pop2">
                    <!-- Special Focus Areas -->
                    <div class="team-pop-area p-32">
                        <h6 class="mb-16">SPECIAL FOCUS AREAS</h6>
                        <ul class="ps-32" id="trainer-focus-areas">
                            @php
                                $focus_areas = json_decode($trainer->special_focus_area, true);
                            @endphp
                            @forelse ($focus_areas as $item)
                                <li>
                                    <h6>{{ $item }}</h6>
                                </li>
                            @empty
                                <li>
                                    <h6>No Focus Areas</h6>
                                </li>
                            @endforelse
                    </div>
                    <div class="team-pop-area p-32">
                        <h6 class="mb-16">CLASSES</h6>
                        <ul class="ps-32" id="trainer-classes">
                            @php
                                $classes = json_decode($trainer->classes, true);
                            @endphp
                            @forelse ($classes as $class)
                                <li>
                                    <h6>{{ $class }}</h6>
                                </li>
                            @empty
                                <li>
                                    <h6>No Classes</h6>
                                </li>
                            @endforelse
                        </ul>
                    </div>

                    <div class="team-pop-area p-32">
                        <h6 class="mb-16">CERTIFICATIONS</h6>
                        <ul class="ps-32" id="trainer-certifications">
                            @php
                                $certifications = json_decode($trainer->certifications, true);
                            @endphp
                            @forelse ($certifications as $item)
                                <li>
                                    <h6>{{ $item }}</h6>
                                </li>
                            @empty
                                <li>
                                    <h6>No Certifications</h6>
                                </li>
                            @endforelse

                        </ul>
                    </div>

                    <div class="team-pop-area p-32">
                        <h6 class="mb-16">EDUCATION</h6>
                        @php
                            $educations = json_decode($trainer->education, true);
                        @endphp
                        <ul class="ps-32" id="trainer-education">
                            @forelse ($educations as $item)
                                <li>
                                    <h6>{{ $item }}</h6>
                                </li>
                            @empty
                                <li>
                                    <h6>No Education</h6>
                                </li>
                            @endforelse

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
