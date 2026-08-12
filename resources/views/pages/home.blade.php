@extends('layouts.app')

@section('title', 'Skilledge Engineering | Precision Machining, Fabrication & Technical Supply')

@section('meta_description', 'Skilledge Engineering — Islamabad-based precision machining, custom fabrication, and supply of electrical, electronic, mechanical and electromechanical machinery, equipment, parts and tools. A sister organization of Techno Trade International since 1998.')

@section('nav-header')
<!-- Header Carousel Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('img/16.jpeg') }}" alt="Skilledge Engineering">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 950px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Designing | Manufacturing | Precision | Fabrication</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Spare Parts, Industrial Tools, Machinery &amp; Equipment</h1>
                    <p class="lead text-white mb-4 animated slideInLeft d-none d-md-block">Electrical, Electronics, Mechanical &amp; Electromechanical Integrated Solutions with a local &amp; international supply network.</p>
                    <a href="{{ route('services') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Explore Services</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('img/12.jpeg') }}" alt="Skilledge Engineering">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 950px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">A Sister Organization of Techno Trade International</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Precision Machining, Custom Fabrication &amp; Engineering Solutions</h1>
                    <p class="lead text-white mb-4 animated slideInLeft d-none d-md-block">Combining in-house manufacturing capabilities with a reliable international sourcing network, delivering solutions that meet international standards.</p>
                    <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">About Us</a>
                    <a href="{{ route('rd') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Our R&amp;D</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Header Carousel End -->
@endsection

@section('content')

<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-industry text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Years Engineering Legacy</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">25</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Professional Engineers</h5>
                        <h1 class="mb-0" data-toggle="counter-up">15</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-tools text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Skilled Operators &amp; Artisans</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">20</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-cubes text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Core Engineering Disciplines</h5>
                        <h1 class="mb-0" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Precision Machining, Custom Fabrication &amp; Technical Supply</h1>
                </div>
                <p class="mb-4">Skilledge Engineering is an Islamabad-based supplier and service provider specializing in machining, fabrication, and the supply of electrical, electronic, and mechanical machinery, equipment, parts, and tools. We are the sister organization of Techno Trade International, a family business serving government departments, defense organizations, and private industry across Pakistan since 1998.</p>
                <blockquote class="blockquote bg-light rounded p-4 mb-4 border-start border-primary border-4">
                    <p class="mb-0 fst-italic">"We collaborate with clients from concept to completion — machining a custom component, fabricating a steel structure, or sourcing hard-to-find parts. Our promise: accurate work, honest pricing, delivery you can rely on."</p>
                </blockquote>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>In-House CNC Machining Workshop</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Local &amp; International Supply Network</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>FBR-Registered Active Taxpayer</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Serving Since 1998</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">051-4449822 | 0346-9612030</h4>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Learn More About Us</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/Skilledge%201.jpeg') }}" style="object-fit: cover;" alt="Skilledge Engineering">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features / Why Choose Us Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Skilledge Engineering</h5>
            <h1 class="mb-0">An Integrated Engineering Ecosystem From Design to Deployment</h1>
        </div>

        <!-- Wide Animated Images (Carousel) -->
        <div id="ecosystem-carousel" class="carousel slide carousel-fade mb-5 wow zoomIn" data-bs-ride="carousel" data-wow-delay="0.2s">
            <div class="carousel-inner rounded shadow-sm" style="max-height: 450px;">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('new images/13.jpeg') }}" style="object-fit: cover; height: 450px;" alt="Engineering Ecosystem">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('new images/15.jpeg') }}" style="object-fit: cover; height: 450px;" alt="Engineering Capabilities">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('new images/9.jpeg') }}" style="object-fit: cover; height: 450px;" alt="Industrial Solutions">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('new images/5.jpeg') }}" style="object-fit: cover; height: 450px;" alt="Turnkey Execution">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#ecosystem-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ecosystem-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5 nav nav-pills" id="left-tabs" role="tablist">
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="0.2s">
                        <a class="nav-link active bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-1" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cogs text-white"></i>
                            </div>
                            <h4 class="text-dark">In-House Machining Infrastructure &amp; Precision Control</h4>
                            <p class="mb-0 text-body">A fully equipped in-house CNC and conventional machining workshop delivers faster turnarounds, tight-tolerance custom execution, and rigid quality control directly on the shop floor.</p>
                        </a>
                    </div>
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="0.5s">
                        <a class="nav-link bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-2" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <h4 class="text-dark">Business Governance &amp; Institutional Accountability</h4>
                            <p class="mb-0 text-body">Backed by the market reputation and commercial integrity built by Techno Trade International since 1998, we guarantee long-term corporate stability.</p>
                        </a>
                    </div>
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="0.8s">
                        <a class="nav-link bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-3" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-boxes text-white"></i>
                            </div>
                            <h4 class="text-dark">Robust Supply Chain &amp; Punctual Execution</h4>
                            <p class="mb-0 text-body">Meticulous workshop scheduling paired with entrenched local and global logistics channels keeps every project strictly on schedule.</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100 tab-content rounded shadow-sm overflow-hidden" id="center-tab-images">
                    <div class="tab-pane fade show active h-100" id="tab-img-1" role="tabpanel">
                        <img class="w-100 h-100" src="{{ asset('new images/11.jpeg') }}" style="object-fit: cover;" alt="In-House Machining">
                    </div>
                    <div class="tab-pane fade h-100" id="tab-img-2" role="tabpanel">
                        <img class="w-100 h-100" src="{{ asset('new images/3.jpeg') }}" style="object-fit: cover;" alt="Business Governance">
                    </div>
                    <div class="tab-pane fade h-100" id="tab-img-3" role="tabpanel">
                        <img class="w-100 h-100" src="{{ asset('new images/18.jpeg') }}" style="object-fit: cover;" alt="Robust Supply Chain">
                    </div>
                    <div class="tab-pane fade h-100" id="tab-img-4" role="tabpanel">
                        <img class="w-100 h-100" src="{{ asset('new images/17.jpeg') }}" style="object-fit: cover;" alt="Cross-Disciplinary Expertise">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="row g-5 nav nav-pills" id="right-tabs" role="tablist">
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="0.4s">
                        <a class="nav-link bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-4" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4 class="text-dark">Cross-Disciplinary Engineering Expertise</h4>
                            <p class="mb-0 text-body">Mechanical, electrical, electronic and industrial automation engineers work under one roof, managing complex multi-faceted projects from concept to deployment.</p>
                        </a>
                    </div>
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="0.7s">
                        <a class="nav-link bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-2" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-dollar-sign text-white"></i>
                            </div>
                            <h4 class="text-dark">Strategic Sourcing &amp; Cost-Effective Pricing</h4>
                            <p class="mb-0 text-body">Direct, verified partnerships with leading domestic and international manufacturers remove intermediary brokers and pass procurement savings on to clients.</p>
                        </a>
                    </div>
                    <div class="col-12 wow zoomIn nav-item" data-wow-delay="1.0s">
                        <a class="nav-link bg-transparent text-start p-0 m-0 custom-ecosystem-tab" data-bs-toggle="pill" href="#tab-img-1" role="tab" style="cursor: pointer;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-clipboard-check text-white"></i>
                            </div>
                            <h4 class="text-dark">Turnkey Solutions From Design to Commissioning</h4>
                            <p class="mb-0 text-body">Design, fabrication, supply, installation, testing, calibration and commissioning of electrical, mechanical, electronic and electromechanical equipment.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features / Why Choose Us End -->

<!-- Services Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Complete Engineering Solutions Across Eight Core Disciplines</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-cogs text-white"></i>
                    </div>
                    <h4 class="mb-3">Precision CNC Machining</h4>
                    <p class="m-0">In-house multi-axis CNC turning, milling and precision tooling — from raw metallurgical stock to finished, audited aerospace-tolerance components.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#disciplines"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-industry text-white"></i>
                    </div>
                    <h4 class="mb-3">Fabrication &amp; Heavy Manufacturing</h4>
                    <p class="m-0">Structural steel engineering, certified welding, forming and surface treatment transforming raw plates into custom enclosures and load-bearing frames.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#disciplines"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-bolt text-white"></i>
                    </div>
                    <h4 class="mb-3">Electrical Engineering &amp; Supply</h4>
                    <p class="m-0">LV/MV electrical systems, switchgear, power distribution, MCCs, transformers and industrial plant cabling, earthing and lighting infrastructure.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#disciplines"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-microchip text-white"></i>
                    </div>
                    <h4 class="mb-3">Electronics &amp; Industrial Automation</h4>
                    <p class="m-0">Turnkey PLC, HMI and SCADA integration, VFD implementation, Industrial IoT frameworks, control console design and board-level diagnostics.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#disciplines"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-tachometer-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Instrumentation, Calibration &amp; Measurements</h4>
                    <p class="m-0">Zero-tolerance sensing, industrial digital measurement tools, calibration and testing instruments referenced to ISO/IEC 17025, ISO 9001 and other standards.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#disciplines"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-tools text-white"></i>
                    </div>
                    <h4 class="mb-3">Machinery, Spare Parts &amp; Technical Supply</h4>
                    <p class="m-0">Industrial machinery, precision spare parts, sensors, switchgear, test instruments and solar &amp; renewable energy solutions through a verified global network.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}#supply"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us For Quote</h3>
                    <p class="text-white mb-3">From a single machined part to a full electrical installation — accurate work, honest pricing, delivery you can rely on.</p>
                    <h2 class="text-white mb-0">051-4449822</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Sectors We Serve Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Sectors We Serve</h5>
            <h1 class="mb-0">One Turnkey Partner Across Six Foundational Sectors</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-landmark text-white"></i>
                    </div>
                    <h4 class="mb-2">Government &amp; Defense</h4>
                    <p class="mb-0">High-precision components, localized reverse engineering of obsolete mechanical assemblies, structural repairs, and dedicated equipment sourcing through verified channels.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-oil-can text-white"></i>
                    </div>
                    <h4 class="mb-2">Oil &amp; Gas</h4>
                    <p class="mb-0">Custom-machined manifold blocks, process instrumentation hardware, high-tensile flanges, heavy-duty couplings and direct-sourcing pipelines for critical valves and fittings.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-bolt text-white"></i>
                    </div>
                    <h4 class="mb-2">Power &amp; Energy</h4>
                    <p class="mb-0">Heavy industrial switchgear panels, control panels, structural transformer components, busbar configurations and high-performance terminal boxes for grid operators and IPPs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-building text-white"></i>
                    </div>
                    <h4 class="mb-2">Construction &amp; Infrastructure</h4>
                    <p class="mb-0">Pre-engineered structural steel frameworks, industrial cable trays, heavy-duty storage racks, foundational anchor assemblies and custom-fabricated site machinery.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-industry text-white"></i>
                    </div>
                    <h4 class="mb-2">Manufacturing &amp; Heavy Industry</h4>
                    <p class="mb-0">Prototyping and serial manufacturing of custom machine parts, spare components, mechanical gearboxes and complete industrial automation retrofitting solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-satellite-dish text-white"></i>
                    </div>
                    <h4 class="mb-2">Telecom &amp; IT</h4>
                    <p class="mb-0">Climate-controlled outdoor telecom enclosures, computerized server rack frames, automated control consoles and specialized technical hardware distribution networks.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sectors We Serve End -->

<!-- Engineering Workflow Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Process</h5>
            <h1 class="mb-0">A Disciplined, End-to-End Engineering Workflow</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 800px;">Every project — from a single machined part to a full electrical installation — meets specification, schedule, and budget.</p>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">01</div>
                    <i class="fa fa-comments text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Inquiry &amp; Requirement Analysis</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">02</div>
                    <i class="fa fa-pencil-ruler text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Technical Design &amp; BOQ</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">03</div>
                    <i class="fa fa-cogs text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Sourcing, Machining &amp; Fabrication</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">04</div>
                    <i class="fa fa-clipboard-check text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Quality Check &amp; Testing</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">05</div>
                    <i class="fa fa-truck text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Delivery &amp; Installation</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">06</div>
                    <i class="fa fa-headset text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">After-Sales Support</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Engineering Workflow End -->

<!-- Quality & Standards Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .9), rgba(9, 30, 62, .9)), url({{ asset('img/20.jpeg') }}) center center; background-size: cover;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-uppercase" style="color:#06A3DA;">Quality, Safety &amp; Standards</h5>
            <h1 class="mb-0 text-white">Compliance Is a Non-Negotiable Metric</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-user-graduate text-white mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">PEC-Registered Engineers</h5>
                    <p class="mb-0 text-white-50">Active professional licensing with the Pakistan Engineering Council, backed by Washington Accord accredited engineering qualifications.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-file-invoice-dollar mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">FBR-Registered &amp; Active Taxpayer</h5>
                    <p class="mb-0 text-white-50">A fully compliant, verified corporate entity listed on the Active Taxpayers List (ATL) for income tax and sales tax frameworks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-ruler-combined mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Standards-Based Engineering Codes</h5>
                    <p class="mb-0 text-white-50">Electrical designs, fabrication drawings and piping layouts executed in strict alignment with recognized international codes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-robot mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Vendor-Approved Automation Integration</h5>
                    <p class="mb-0 text-white-50">PLC programming and SCADA telemetry installations executed to match the official deployment blueprints of major international controls vendors.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-hard-hat mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Safety-First Operational Culture</h5>
                    <p class="mb-0 text-white-50">A zero-accident workplace mindset across our headquarters, Rawat factory and Gujranwala production floor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-graduation-cap mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Certified Technical Training</h5>
                    <p class="mb-0 text-white-50">All technical operators, CNC machinists and assembly artisans undergo structured, verifiable technical training and competency assessments.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quality & Standards End -->

<!-- CTA Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="bg-primary rounded p-5 wow zoomIn" data-wow-delay="0.3s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-2">Ready To Start Your Next Machining, Fabrication or Technical Supply Requirement?</h2>
                    <p class="text-white mb-0 mb-lg-0">Get an accurate, honest quotation from our engineering team. We reply promptly and deliver on schedule.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-dark py-3 px-5 me-2 mb-2 mb-lg-0">Request A Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

@endsection
