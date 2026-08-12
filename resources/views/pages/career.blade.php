@extends('layouts.app')

@section('title', 'Capacity Building & Career | Skilledge Engineering')

@section('meta_description', 'Skilledge Engineering workforce development — graduate engineering internship program, technical trainee and apprenticeship program, and academic partnerships across Pakistan.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'Capacity Building & Career', 'crumb' => 'Career'])
@endsection

@section('content')

<!-- Intro Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Workforce Development</h5>
                    <h1 class="mb-0">Driving Industrial Capacity Building Across Pakistan</h1>
                </div>
                <p class="mb-4">Skilledge Engineering actively drives industrial capacity building across Pakistan through a structured, multi-tiered workforce development system. By combining high-level academic theory with direct shop-floor execution, we cultivate elite engineering talent and technical artisans who uphold our core values of technical integrity and precision.</p>
                <p class="mb-4">Our talent acquisition pipeline operates in strict coordination with top-tier engineering universities, federal vocational institutes, and regional technical colleges to source disciplined personnel across all vital industrial engineering domains.</p>
                <h4 class="mb-3">Who We Source From</h4>
                <p class="mb-4">We draw high-performing candidates from rigorous Bachelors of Science (BSc/BS), Bachelors of Engineering (BE), and Diploma of Associate Engineer (DAE) programs.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Graduate Internships (BSc / BS / BE)</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Technical Trainees (DAE / Vocational)</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fast-Track To Full-Time Employment</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sites: Islamabad · Rawat · Gujranwala</h5>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Enquire About Opportunities</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/13.jpeg') }}" style="object-fit: cover;" alt="Skilledge Engineering workforce development">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro End -->

<!-- Programs Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Two Development Streams</h5>
            <h1 class="mb-0">Comprehensive Operational Coverage Across All Sites</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm h-100 overflow-hidden">
                    <div class="bg-primary p-4">
                        <h4 class="text-white mb-0"><i class="fa fa-graduation-cap me-2"></i>Graduate Engineering Internship Program</h4>
                    </div>
                    <div class="p-4">
                        <p class="small mb-4">Designed for advanced engineering minds, this stream embeds university graduates directly within our design, project management, and scheduling teams to work on live industrial accounts.</p>
                        <div class="mb-3">
                            <h6 class="text-primary mb-1">Mechanical &amp; Design Engineering</h6>
                            <p class="small mb-2">Training in 3D CAD/CAM modeling, reverse engineering, microscopic tolerance control, and mechanical strain analysis.</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-primary mb-1">Electrical &amp; Electronics Engineering</h6>
                            <p class="small mb-2">Hands-on exposure to industrial power distribution layouts, electrical panel engineering, and component sourcing validation.</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-primary mb-1">Mechatronics &amp; Automation Engineering</h6>
                            <p class="small mb-2">Practical integration of PLC/SCADA programming, automated process control systems, and digital instrumentation systems.</p>
                        </div>
                        <div class="mb-0">
                            <h6 class="text-primary mb-1">Civil &amp; Structural Engineering</h6>
                            <p class="small mb-0">Real-world deployment focusing on plant-floor layouts, structural steel load calculations, and heavy equipment foundation deployment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm h-100 overflow-hidden">
                    <div class="bg-primary p-4">
                        <h4 class="text-white mb-0"><i class="fa fa-tools me-2"></i>Technical Trainee &amp; Apprenticeship Program</h4>
                    </div>
                    <div class="p-4">
                        <p class="small mb-4">Tailored for highly skilled technical hands, this stream focuses heavily on physical production metrics, machine configuration, and strict workshop floor safety.</p>
                        <div class="mb-3">
                            <h6 class="text-primary mb-1">Precision Machining &amp; Tooling</h6>
                            <p class="small mb-2">Trainees operate multi-axis CNC machinery, turning centers, and milling equipment, maintaining strict documentation metrics.</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-primary mb-1">Industrial Fabrication &amp; Welding</h6>
                            <p class="small mb-2">Hands-on mastery of heavy structural steel assembly, custom components, and pressure vessel fabrication to global engineering codes.</p>
                        </div>
                        <div class="mb-0">
                            <h6 class="text-primary mb-1">Plant Maintenance &amp; Calibration</h6>
                            <p class="small mb-0">Operational training in systematic preventive maintenance, machine tool alignment, and electrical infrastructure troubleshooting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Programs End -->

<!-- Academic Partners Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Academic Partners</h5>
            <h1 class="mb-0">Formal Sourcing Network of Premier Technical Institutions</h1>
        </div>
        <div class="row g-3 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.05s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">National University of Technology (NUTECH)</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">International Islamic University, Islamabad (IIUI)</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.15s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">University of Engineering &amp; Technology (UET), Taxila</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">Air University &amp; HITEC University</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.25s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">National Skills University (NSU)</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">Construction Technology Training Institute (CTTI)</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.35s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">Government Colleges of Technology (GCT Taxila / GCT Swabi)</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100">NAVTTC-Affiliated Technical Institutes</div>
            </div>
        </div>
    </div>
</div>
<!-- Academic Partners End -->

<!-- Career Pathway Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Career Pathway</h5>
            <h1 class="mb-0">From Trainee to Full-Time Team Member</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">01</div>
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-user-plus text-white"></i>
                    </div>
                    <h5 class="mb-2">Selection</h5>
                    <p class="mb-0">Candidates are sourced from partner universities, federal vocational institutes, and regional technical colleges across BSc/BS, BE, and DAE programs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">02</div>
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-chart-line text-white"></i>
                    </div>
                    <h5 class="mb-2">Structured Evaluation</h5>
                    <p class="mb-0">Every intern and trainee is evaluated through a strict performance appraisal matrix supervised directly by our Plant Managers and Quality Assurance departments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">03</div>
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-rocket text-white"></i>
                    </div>
                    <h5 class="mb-2">Fast-Track To Full-Time Employment</h5>
                    <p class="mb-0">High-performing individuals who maintain clean safety records and demonstrate exact technical competence are directly fast-tracked into full-time employment within Skilledge Engineering.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <p class="mb-3">Our long-term public and private sector projects are powered by a reliable, battle-tested technical workforce developed through this system.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5">Contact Us About Current Openings</a>
        </div>
    </div>
</div>
<!-- Career Pathway End -->

@endsection
