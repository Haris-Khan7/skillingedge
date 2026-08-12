@extends('layouts.app')

@section('title', 'About Us | Skilledge Engineering')

@section('meta_description', 'About Skilledge Engineering — an Islamabad-based precision machining, fabrication and technical supply company and sister organization of Techno Trade International, serving Pakistan since 1998.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'About Us', 'crumb' => 'About Us'])
@endsection

@section('content')

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Company Overview</h5>
                    <h1 class="mb-0">An Islamabad-Based Supplier &amp; Service Provider</h1>
                </div>
                <p class="mb-4">Skilledge Engineering is an Islamabad-based supplier and service provider specializing in machining, fabrication, and the supply of electrical, electronic, and mechanical machinery, equipment, parts, and tools.</p>
                <blockquote class="blockquote bg-light rounded p-4 mb-4 border-start border-primary border-4">
                    <p class="mb-0 fst-italic">"We collaborate with clients from concept to completion — machining a custom component, fabricating a steel structure, or sourcing hard-to-find parts. Our promise: accurate work, honest pricing, delivery you can rely on."</p>
                </blockquote>
                <h4 class="mb-3">Our Legacy</h4>
                <p class="mb-4">We are the sister organization of Techno Trade International, a family business serving government departments, defense organizations, and private industry across Pakistan since 1998 — giving our team decades of combined field experience, an established supplier network, and a deep understanding of institutional technical standards.</p>
                <h4 class="mb-3">Statutory Information</h4>
                <p class="mb-4">Skilledge Engineering is formally registered with the Federal Board of Revenue (FBR) as an active income-tax filer under the principal activity of General Order Suppliers / Other Service Activities, RTO Islamabad.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Established 2020</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Legacy Since 1998</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Base: Islamabad, Pakistan</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Local &amp; International Supply</h5>
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
                <a href="{{ route('services') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Explore Our Services</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/7.jpeg') }}" style="object-fit: cover;" alt="Skilledge Engineering">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- At a Glance Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">At a Glance</h5>
            <h1 class="mb-0">Company Profile Snapshot</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-calendar-check text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Established</h6>
                    <p class="mb-0">Operating since 2020 — formally registered with the FBR in January 2026</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-history text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Legacy</h6>
                    <p class="mb-0">Family business heritage dating to 1998</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Base</h6>
                    <p class="mb-0">Islamabad, Pakistan</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-building text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Operating Sites</h6>
                    <p class="mb-0">HQ Islamabad · RWP Factory · Gujranwala Production Facility</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-tools text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Scope</h6>
                    <p class="mb-0">Machining · Fabrication · Electrical &amp; Electronic Supply</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-globe text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Supply Reach</h6>
                    <p class="mb-0">Local and international sourcing and delivery</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-handshake text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Sister Concern</h6>
                    <p class="mb-0">Techno Trade International</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="fa fa-file-contract text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Statutory</h6>
                    <p class="mb-0">FBR-Registered · Income Tax – Active · RTO Islamabad</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-bordered bg-white rounded shadow-sm mb-0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Registration Detail</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="fw-bold">Registration Date</td><td>14 January 2026</td></tr>
                            <tr><td class="fw-bold">NTN / Registration No.</td><td>1350448685446</td></tr>
                            <tr><td class="fw-bold">STRN</td><td>I363351-3</td></tr>
                            <tr><td class="fw-bold">Registration Status</td><td>Income Tax – Active</td></tr>
                            <tr><td class="fw-bold">Jurisdiction</td><td>RTO Islamabad</td></tr>
                            <tr><td class="fw-bold">Principal Activity</td><td>General Order Suppliers / Other Service Activities</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- At a Glance End -->

<!-- Vision, Mission & Core Values Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Vision, Mission, Scope &amp; Core Values</h5>
            <h1 class="mb-0">What Drives Skilledge Engineering</h1>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary rounded p-4 h-100 text-white">
                    <i class="fa fa-eye mb-3" style="font-size: 2rem;"></i>
                    <h4 class="text-white mb-2">Our Vision</h4>
                    <p class="mb-0">To establish Skilledge Engineering as the premier, definitive benchmark in Pakistan for high-precision machining, custom fabrication, and specialized technical supply — expanding upon our multi-decade industrial legacy and transforming historic reliability into modern engineering excellence that shapes the nation's industrial future.</p>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-light rounded p-4 h-100">
                    <i class="fa fa-bullseye text-primary mb-3" style="font-size: 2rem;"></i>
                    <h4 class="mb-2">Our Mission</h4>
                    <p class="mb-0">To engineer operational peace of mind for our clients by delivering meticulously accurate, strictly punctual, and economically viable machining, fabrication, and supply solutions — through an elite engineering workforce, unyielding safety protocols, and continuous corporate evolution that raises industry standards.</p>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light rounded p-4 h-100">
                    <i class="fa fa-expand-arrows-alt text-primary mb-3" style="font-size: 2rem;"></i>
                    <h4 class="mb-2">Our Scope</h4>
                    <p class="mb-0">The provision of complete engineering solutions, including the design, fabrication, supply, installation, testing, calibration, and commissioning of all associated electrical, mechanical, electronic, and electromechanical equipment, machinery, and spare parts.</p>
                </div>
            </div>
        </div>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Core Values</h5>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="text-center bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-handshake text-white"></i>
                    </div>
                    <h5 class="mb-2">Corporate Integrity &amp; Transparent Counsel</h5>
                    <p class="mb-0">Absolute pricing clarity and objective, honest technical consultation, prioritizing long-term client trust above immediate profit margins.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="text-center bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-ruler text-white"></i>
                    </div>
                    <h5 class="mb-2">Absolute Engineering Precision</h5>
                    <p class="mb-0">Flawless accuracy across every dimension — from microscopic machining tolerances to computerized designs and regulatory compliance documentation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="text-center bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h5 class="mb-2">Enduring Strategic Partnerships</h5>
                    <p class="mb-0">Clients are lifelong institutional allies, supported by resource infrastructure designed for their multi-year operational lifecycles.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="text-center bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-sync-alt text-white"></i>
                    </div>
                    <h5 class="mb-2">Continuous Institutional Advancement</h5>
                    <p class="mb-0">Fixed annual investments into workforce engineering certifications, state-of-the-art tooling, and modern automated processes to guarantee market leadership.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vision, Mission & Core Values End -->

<!-- Company Strengths Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Company Strengths</h5>
            <h1 class="mb-0">Institutional-Grade Engineering Resources</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 800px;">Skilledge Engineering backs its strategic promises with tangible operational resources, a specialized technical workforce, and a multi-decade market footprint.</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-history text-white"></i>
                        </div>
                        <h4 class="mb-0"><span class="text-primary">25+</span> Years</h4>
                    </div>
                    <h6 class="text-primary mb-2">Engineering Legacy</h6>
                    <p class="mb-0">Continuous market presence and verified corporate relationships established since 1998 under Techno Trade International.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h4 class="mb-0"><span class="text-primary">15+</span> Engineers</h4>
                    </div>
                    <h6 class="text-primary mb-2">Professional Cross-Disciplinary Engineers</h6>
                    <p class="mb-0">A highly qualified engineering cadre spanning electrical, mechanical, civil, automation, electronics, and CAD/CAM design disciplines.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-tools text-white"></i>
                        </div>
                        <h4 class="mb-0"><span class="text-primary">20+</span> Operators</h4>
                    </div>
                    <h6 class="text-primary mb-2">Skilled Technical Operators &amp; Artisans</h6>
                    <p class="mb-0">A dedicated floor team including certified CNC programmers, precision machinists, industrial welders, and field technicians.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4 class="mb-0"><span class="text-primary">6</span> Disciplines</h4>
                    </div>
                    <h6 class="text-primary mb-2">Core Engineering Disciplines Covered</h6>
                    <p class="mb-0">Turnkey expertise ranging from heavy microscopic machining and structural fabrication to instrumentation and automation systems.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-industry text-white"></i>
                        </div>
                        <h4 class="mb-0"><span class="text-primary">1</span> Workshop</h4>
                    </div>
                    <h6 class="text-primary mb-2">Dedicated CNC Workshop &amp; Fabrication Floor</h6>
                    <p class="mb-0">A private, in-house manufacturing facility equipped for rapid prototyping, serial production, and rigorous quality testing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary rounded shadow-sm p-4 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="text-white mb-3">Capability Snapshot</h4>
                    <p class="text-white mb-0">Backing strategic promises with operational resources, a specialized technical workforce, and a multi-decade market footprint.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company Strengths End -->

<!-- Plant & Infrastructure Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Plant, Machinery &amp; Infrastructure</h5>
            <h1 class="mb-0">An Integrated, Decentralized Operating Footprint</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 800px;">An integrated manufacturing and logistics footprint decentralized across three strategic geographic nodes in Pakistan, enabling simultaneous execution of high-volume serial production, high-tolerance CNC custom machining, and heavy structural fabrication.</p>
        <div class="row g-4">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-light rounded overflow-hidden h-100">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" style="height: 260px; object-fit: cover;" src="{{ asset('img/Skilledge.jpeg') }}" alt="Corporate Headquarters Islamabad">
                    </div>
                    <div class="p-4">
                        <h4 class="text-primary mb-2">Corporate Headquarters (Islamabad)</h4>
                        <p class="mb-2">The strategic nerve center consolidating macro-governance, commercial frameworks, and advanced engineering design capabilities.</p>
                        <ul class="mb-0 small">
                            <li>Executive leadership, business development, tenders, finance, legal, HR &amp; enterprise IT</li>
                            <li>Primary design engineering group — 3D CAD/CAM modeling, reverse engineering &amp; QA</li>
                            <li>Global logistics pipelines established since 1998</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-light rounded overflow-hidden h-100">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" style="height: 260px; object-fit: cover;" src="{{ asset('img/17.jpeg') }}" alt="Central Factory Plant Rawat">
                    </div>
                    <div class="p-4">
                        <h4 class="text-primary mb-2">Central Factory Plant (Rawat)</h4>
                        <p class="mb-2">Optimized for physical execution — heavy machining assets, structural tooling machinery, and centralized material staging yards.</p>
                        <ul class="mb-0 small">
                            <li>Heavy plant manufacturing, raw material storage &amp; capital equipment warehousing</li>
                            <li>Dedicated, high-precision in-house CNC workshop</li>
                            <li>Centralized HSE department — LOTO protocols &amp; site risk assessments</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light rounded overflow-hidden h-100">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" style="height: 260px; object-fit: cover;" src="{{ asset('img/5.jpeg') }}" alt="Production Facility Gujranwala">
                    </div>
                    <div class="p-4">
                        <h4 class="text-primary mb-2">Production Facility (Gujranwala)</h4>
                        <p class="mb-2">Strategically situated in one of Pakistan's key manufacturing corridors — engineered for high-volume component production and assembly validation.</p>
                        <ul class="mb-0 small">
                            <li>Dedicated production floors &amp; localized supply chain coordination</li>
                            <li>Field-level Quality Control (QC) inspection labs</li>
                            <li>Multi-site project management &amp; regional distribution logistics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Plant & Infrastructure End -->

<!-- Future Vision Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .92), rgba(9, 30, 62, .92)), url({{ asset('img/11.jpeg') }}) center center; background-size: cover;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-uppercase" style="color:#06A3DA;">Future Vision</h5>
            <h1 class="mb-0 text-white">Scaling Toward a Broader, Integrated Engineering Asset</h1>
        </div>
        <p class="text-center mb-5 mx-auto text-white-50" style="max-width: 800px;">Our forward-looking strategy focuses on expanding industrial autonomy, strengthening international procurement resilience, and deepening public-sector partnerships.</p>
        <div class="row g-4">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="quality-item rounded p-4 h-100">
                    <h5 class="text-white mb-2">Capital Expansion of In-House Manufacturing Infrastructure</h5>
                    <p class="mb-0 text-white-50">Procuring multi-axis CNC machining centers, automated vertical milling systems, and precision industrial laser cutting tools — processing higher volumes with strict, microscopic quality control.</p>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="quality-item rounded p-4 h-100">
                    <h5 class="text-white mb-2">Strengthening the Direct-Import Supply Chain</h5>
                    <p class="mb-0 text-white-50">Direct procurement agreements with certified OEMs in industrial automation, power distribution, and precision instrumentation — cutting costs and guaranteeing genuine components with full factory warranties.</p>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="quality-item rounded p-4 h-100">
                    <h5 class="text-white mb-2">Expanding Government &amp; Defense Sector Enlistment</h5>
                    <p class="mb-0 text-white-50">Registering as an approved technical vendor with additional defense production units, state utilities, and federal infrastructure authorities to participate in complex national projects.</p>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="quality-item rounded p-4 h-100">
                    <h5 class="text-white mb-2">Sustaining Competitive, Dependable Growth</h5>
                    <p class="mb-0 text-white-50">Prioritizing long-term corporate health over short-term sales spikes — upgrading team training, safety protocols, and workshop schedules so clients receive the same transparent pricing and reliable delivery.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Future Vision End -->

@endsection
