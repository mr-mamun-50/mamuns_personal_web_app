<div class="row">
    {{-- Web development --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#web_dev"
                role="button" aria-expanded="false" aria-controls="web_dev">

                <span class="skill-title"><i class="fa-solid fa-globe fa-lg me-1 text-primary"></i> Full-Stack
                    Web Development</span>
                <a class="btn btn-outline-primary btn-floating"><i class="fa-solid fa-angle-down fa-2xl mt-3"></i></a>
            </div>

            <div class="collapse mt-3 row" id="web_dev">
                <hr>
                <p class="mt-2 mb-0">Front-End</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'web_dev' && $skill->type == 'front_end')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <p class="mt-3 mb-0">Back-End</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'web_dev' && $skill->type == 'back_end')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <p class="mt-3 mb-0">Database</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'web_dev' && $skill->type == 'database')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- Mobile app development --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#mobile_dev"
                role="button" aria-expanded="false" aria-controls="mobile_dev">

                <span class="skill-title"><i class="fas fa-mobile-alt fa-lg me-2 text-secondary"></i> Mobile App
                    Development</span>
                <a class="btn btn-outline-primary btn-floating"> <i class="fa-solid fa-angle-down fa-2xl mt-3"></i></a>
            </div>

            <div class="collapse mt-3 row" id="mobile_dev">
                <hr>
                <p class="mt-2 mb-0">Front-End</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'mobile_dev' && $skill->type == 'front_end')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <p class="mt-3 mb-0">Back-End</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'mobile_dev' && $skill->type == 'back_end')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <p class="mt-3 mb-0">Database</p>
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'mobile_dev' && $skill->type == 'database')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- Programming languages --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#programming_languages" role="button" aria-expanded="false"
                aria-controls="programming_languages">

                <span class="skill-title"><i class="fas fa-brain fa-lg me-1 text-info"></i> Programming
                    Languages</span>
                <a class="btn btn-outline-primary btn-floating"><i class="fa-solid fa-angle-down fa-2xl mt-3"></i></a>
            </div>

            <div class="collapse mt-3 row" id="programming_languages">
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'programming_languages')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- Graphic design --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#graphic_design" role="button" aria-expanded="false" aria-controls="graphic_design">

                <span class="skill-title"><i class="fas fa-crop fa-lg me-1 text-warning"></i>
                    Graphic Design</span>
                <a class="btn btn-outline-primary btn-floating"><i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                </a>
            </div>

            <div class="collapse mt-3 row" id="graphic_design">
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'graphic_design')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                        alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- office softwares --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#office_softwares" role="button" aria-expanded="false" aria-controls="office_softwares">

                <span class="skill-title"><i class="fas fa-file-alt fa-lg me-1 text-success"></i> Office
                    Softwares</span>
                <a class="btn btn-outline-primary btn-floating"><i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                </a>
            </div>

            <div class="collapse mt-3 row" id="office_softwares">
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'office_softwares')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                        alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{-- other skills --}}
    <div class="col-lg-6">
        <div class="card card-body mt-3">

            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#other_skills" role="button" aria-expanded="false" aria-controls="other_skills">

                <span class="skill-title"><i class="fas fa-fire fa-lg me-1 text-danger"></i> Other
                    Skills</span>
                <a class="btn btn-outline-primary btn-floating"><i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                </a>
            </div>

            <div class="collapse mt-3 row" id="other_skills">
                <hr>
                @foreach ($skills as $skill)
                    @if ($skill->category == 'other_skills')
                        <div class="col-lg-6 col-md-4  my-2">
                            <div class="card skill-card card-body py-3">

                                <div class="d-flex align-items-center">
                                    <img class="skill-logo"
                                        src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                        alt="...">
                                    <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
