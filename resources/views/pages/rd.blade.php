@extends('layouts.app')

@section('title', 'Research & Development | Skilledge Engineering')

@section('meta_description', 'Skilledge Engineering R&D — industrial research, technology development, 3D CAD/CAM modeling, reverse engineering, rapid prototyping, and custom RC aircraft & UAV airframe fabrication for research and flight demonstration.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'R&D', 'crumb' => 'Research & Development'])
@endsection

@section('content')

<!-- R&D Intro Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Research &amp; Development</h5>
                    <h1 class="mb-0">Engineering Innovation, Technology Development &amp; Indigenous Solutions</h1>
                </div>
                <p class="mb-4">Our leadership brings more than two decades of experience in engineering, industrial research, technology development, and technical assistance to industry within public sector R&amp;D organizations of Pakistan. This experience has contributed to engineering innovation, product development, quality assurance, indigenous technology initiatives, and industrial capacity building.</p>
                <p class="mb-4">Skilledge Engineering converts complex engineering schematics into high-precision, physical components and turnkey systems. Every sample component and assembly produced across our Islamabad, Rawat, and Gujranwala facilities undergoes rigorous quality testing to ensure absolute compliance with global industrial metrics.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>3D CAD/CAM Modeling</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Reverse Engineering Design</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Rapid Prototyping</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Rigorous Quality Assurance</h5>
                    </div>
                </div>
                <a href="{{ route('services') }}#portfolio" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">View Engineering Deliverables</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/9.jpeg') }}" style="object-fit: cover;" alt="Skilledge Engineering R&D">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- R&D Intro End -->

<!-- Design & Prototyping Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Engineering &amp; Design Core</h5>
            <h1 class="mb-0">From Conceptual Design to Rapid Prototype</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-cubes text-white"></i>
                    </div>
                    <h5 class="mb-2">3D CAD/CAM Modeling</h5>
                    <p class="mb-0">Our primary design engineering group at headquarters conducts advanced 3D CAD/CAM modeling using SolidWorks, Creo, and Autodesk Inventor — producing precise digital definitions for every manufactured component.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-sync-alt text-white"></i>
                    </div>
                    <h5 class="mb-2">Reverse Engineering Design</h5>
                    <p class="mb-0">Localized reverse engineering of obsolete mechanical assemblies and hard-to-find components — rebuilding exact technical drawings and manufacturing paths for parts no longer available in the market.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-flask text-white"></i>
                    </div>
                    <h5 class="mb-2">Mechanical Strain &amp; Stress Analysis</h5>
                    <p class="mb-0">Microscopic tolerance control and mechanical strain analysis applied during design — supporting structural steel load calculations and heavy equipment foundation deployment overseen by our engineering cadres.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-rocket text-white"></i>
                    </div>
                    <h5 class="mb-2">Rapid Prototyping</h5>
                    <p class="mb-0">Our dedicated, in-house CNC workshop and fabrication floor is equipped for rapid prototyping — converting new designs into physical parts quickly, then moving directly into serial production runs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-clipboard-check text-white"></i>
                    </div>
                    <h5 class="mb-2">Quality Assurance Oversight</h5>
                    <p class="mb-0">Rigorous Quality Assurance (QA) oversight, operating independently from Quality Control (QC), with closed-loop path tracking from raw ingot testing to finalized, audited aerospace-tolerance components.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-lightbulb text-white"></i>
                    </div>
                    <h5 class="mb-2">Indigenous Technology Initiatives</h5>
                    <p class="mb-0">A track record of product development and indigenous technology initiatives within public sector R&amp;D organizations, combined with engineering practice and entrepreneurial heritage.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Design & Prototyping End -->

<!-- UAV Showcase Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-primary text-uppercase">Research Projects</h5>
                    <h1 class="mb-0">Custom RC Aircraft &amp; UAV Airframe Fabrication</h1>
                </div>
                <p class="mb-4">Custom-fabricated fixed-wing RC aircraft and UAV airframes built for research, prototyping and flight-demonstration purposes — showcasing our lightweight composite fabrication, precision assembly and field-testing capability.</p>
                <div class="row g-4">
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded p-4 h-100">
                            <span class="text-primary fw-bold">SE-RC-1000</span>
                            <h6 class="mt-2 mb-1">Assembled Fixed-Wing Airframe</h6>
                            <p class="small mb-0">Field-assembled fixed-wing RC airframe with foam-composite fuselage, canopy glazing and bolt-on wing joint for rapid deployment.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-light rounded p-4 h-100">
                            <span class="text-primary fw-bold">SE-RC-1001</span>
                            <h6 class="mt-2 mb-1">Tail &amp; Vertical Stabilizer Assembly</h6>
                            <p class="small mb-0">Full-length vertical stabilizer with elevator servo linkage, tricycle landing gear and reinforced fuselage spine.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-light rounded p-4 h-100">
                            <span class="text-primary fw-bold">SE-RC-1002</span>
                            <h6 class="mt-2 mb-1">Flight-Readiness Field Demonstration</h6>
                            <p class="small mb-0">Engineering team presenting the completed airframe with RC transmitter at an outdoor flight-test and demonstration event.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-light rounded p-4 h-100">
                            <span class="text-primary fw-bold">SE-RC-1003</span>
                            <h6 class="mt-2 mb-1">Airframe, Propulsion &amp; RC Systems Layout</h6>
                            <p class="small mb-0">Top-down layout of the assembled wing and fuselage with propellers, LiPo battery pack and RC transmitter staged for flight.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/22.jpeg') }}" style="height: 480px; object-fit: cover;" alt="Custom RC aircraft & UAV airframe fabrication">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- UAV Showcase End -->

<!-- Testing & Verification Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .92), rgba(9, 30, 62, .92)), url({{ asset('img/18.jpeg') }}) center center; background-size: cover;">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-uppercase" style="color:#06A3DA;">Testing &amp; Verification</h5>
                    <h1 class="mb-0 text-white">Every Deliverable Is Audited Before Dispatch</h1>
                </div>
                <p class="text-white-50 mb-4">From a single machined part to a complete turnkey system, our engineering workflow closes with rigorous quality checks. Field-level Quality Control (QC) inspection labs verify dimensional metrics before items are packed at our Gujranwala facility.</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="quality-item rounded p-3 h-100">
                            <h6 class="text-white mb-1"><i class="fa fa-check-circle me-2" style="color:#06A3DA;"></i>Closed-Loop QA Path Tracking</h6>
                            <p class="small mb-0 text-white-50">From raw ingot testing to finalized components.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="quality-item rounded p-3 h-100">
                            <h6 class="text-white mb-1"><i class="fa fa-check-circle me-2" style="color:#06A3DA;"></i>Microscopic Tolerance Control</h6>
                            <p class="small mb-0 text-white-50">Aerospace-tolerance finishes verified on the shop floor.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="quality-item rounded p-3 h-100">
                            <h6 class="text-white mb-1"><i class="fa fa-check-circle me-2" style="color:#06A3DA;"></i>System-Level Stress Testing</h6>
                            <p class="small mb-0 text-white-50">Board-level diagnostics and integration testing.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="quality-item rounded p-3 h-100">
                            <h6 class="text-white mb-1"><i class="fa fa-check-circle me-2" style="color:#06A3DA;"></i>Field Testing</h6>
                            <p class="small mb-0 text-white-50">Flight demonstration and site-level commissioning.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/10.jpeg') }}" style="height: 420px; object-fit: cover;" alt="Skilledge Engineering quality testing">
            </div>
        </div>
    </div>
</div>
<!-- Testing & Verification End -->

<!-- CTA Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="bg-primary rounded p-5 wow zoomIn" data-wow-delay="0.3s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-2">Have A Component To Reverse Engineer Or Prototype?</h2>
                    <p class="text-white mb-0">From 3D CAD/CAM modeling to rapid prototyping and serial production, our engineering team is ready to collaborate from concept to completion.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-dark py-3 px-5">Discuss Your Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

@endsection
