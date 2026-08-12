@extends('layouts.app')

@section('title', 'International Partner & Offices | Skilledge Engineering')

@section('meta_description', 'Skilledge Engineering — international partner offices in Sharjah, UAE (Pacific Solution International FZE) and Yaolong Hardware Technology China CNC. Global sourcing, export/import, and direct-import manufacturing partnerships.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'International Partner & Offices', 'crumb' => 'International Partner & Offices'])
@endsection

@section('content')

<!-- Intro Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Global Presence</h5>
                    <h1 class="mb-0">International Partner &amp; Offices</h1>
                </div>
                <p class="mb-4">Alongside its operations in Pakistan, Skilledge Engineering maintains an international partner and office network that broadens direct-import sourcing for CNC-machined components, castings, and precision hardware through a partner office in Sharjah, United Arab Emirates, and a manufacturing partner based in China. These relationships are intended to shorten lead times and widen access to specialized parts and raw materials that are not always readily available through local supply channels, complementing rather than replacing our in-house production capacity across the Islamabad, Rawat and Gujranwala sites.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>International Trading &amp; Sourcing Platform</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Broader Direct-Import Sourcing</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Shorter Lead Times</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Complements In-House Production</h5>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/manufacturing/4-clean.jpeg') }}" style="object-fit: cover;" alt="Components sourced through Skilledge Engineering's international partner offices">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro End -->

<!-- Sharjah UAE Office Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-primary text-uppercase">Our International Existence</h5>
                    <h1 class="mb-0">Pacific Solution International FZE — Sharjah, UAE</h1>
                </div>
                <p class="mb-3">Skilledge Engineering extends its engineering and industrial capabilities beyond Pakistan through its international presence in the United Arab Emirates with Pacific Solution International FZE (PSI Electrical &amp; Electromechanical).</p>
                <p class="mb-4">Strategically based in Hamriyah Free Zone, Sharjah, PSI provides an international platform for global sourcing, export and import, cross-border trade, and the supply of electrical, electronic, mechanical, electromechanical, and industrial solutions.</p>

                <div class="section-title section-title-sm position-relative pb-3 mb-3">
                    <h3 class="mb-0">Global Reach</h3>
                </div>
                <p class="mb-3">Our international operations enable us to connect clients and business partners with global markets, international manufacturers, suppliers, and technology providers. Through our UAE presence, we facilitate international sourcing and trade requirements across the Middle East, Asia, Africa, Europe, North America, and other international markets, subject to project and supply requirements.</p>
                <p class="mb-4">This international network complements Skilledge Engineering’s capabilities in precision machining, custom fabrication, engineering solutions, industrial equipment, and specialized technical supply, enabling us to offer clients a broader and more reliable supply chain.</p>

                <div class="section-title section-title-sm position-relative pb-3 mb-3">
                    <h3 class="mb-0">Connecting Local Expertise With Global Opportunity</h3>
                </div>
                <p class="mb-3">Our international presence is built around a simple objective: to connect engineering requirements with dependable global resources.</p>
                <p class="mb-3">From identifying specialized products and reliable manufacturers to coordinating international sourcing and supply, we work to provide technically appropriate, commercially competitive, and dependable solutions.</p>
                <p class="mb-4">By combining Pakistan-based engineering and industrial expertise with our UAE-based international platform, Skilledge Engineering is positioned to support clients seeking both local engineering capability and access to international markets.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <i class="fa fa-map-marker-alt text-primary me-3 mt-1"></i>
                            <div><h6 class="mb-1">Address</h6><p class="small mb-0">P2, Hamriyah Business Center, Hamriyah Free Zone, Sharjah, UAE</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <i class="fa fa-envelope text-primary me-3 mt-1"></i>
                            <div><h6 class="mb-1">Email</h6><p class="small mb-0">info@psiuae.info</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <i class="fa fa-globe text-primary me-3 mt-1"></i>
                            <div><h6 class="mb-1">Web</h6><p class="small mb-0">www.psiuae.info</p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <i class="fa fa-phone-alt text-primary me-3 mt-1"></i>
                            <div><h6 class="mb-1">Tel</h6><p class="small mb-0">+971 50 385 4053 &nbsp;|&nbsp; +971 56 896 0474</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="gallery-item">
                            <img src="{{ asset('img/20.jpeg') }}" alt="Pacific Solution International FZE — Sharjah, UAE office">
                        </div>
                    </div>
                    @foreach([
                        ['img' => '06.jpeg', 'cap' => 'International Operations'],
                        ['img' => '07.jpeg', 'cap' => 'Global Sourcing Network'],
                        ['img' => '08.jpeg', 'cap' => 'Cross-Border Trade'],
                        ['img' => '09.jpeg', 'cap' => 'Industrial Solutions'],
                    ] as $shot)
                    <div class="col-6">
                        <div class="gallery-item">
                            <img src="{{ asset('img/international/' . $shot['img']) }}" alt="Skilledge Engineering - {{ $shot['cap'] }}">
                            <span class="gallery-caption">{{ $shot['cap'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sharjah UAE Office End -->

<!-- UAE Operations Gallery Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">International Operations</h5>
            <h1 class="mb-0">UAE Office Facilities &amp; Operations</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Through our UAE-based international platform, Skilledge Engineering facilitates global sourcing, export and import, cross-border trade, and industrial solutions across the Middle East, Asia, Africa, Europe and North America.</p>
        <div class="row g-4">
            @foreach([
                ['img' => '10.jpeg', 'cap' => 'International Operations'],
                ['img' => '11.jpeg', 'cap' => 'Global Sourcing Network'],
                ['img' => '12.jpeg', 'cap' => 'Industrial Solutions'],
                ['img' => '13.jpeg', 'cap' => 'Export &amp; Import'],
                ['img' => '14.jpeg', 'cap' => 'Cross-Border Trade'],
                ['img' => '15.jpeg', 'cap' => 'International Supply Chain'],
                ['img' => '16.jpeg', 'cap' => 'Specialized Technical Supply'],
                ['img' => '17.jpeg', 'cap' => 'Global Markets Reach'],
                ['img' => '18.jpeg', 'cap' => 'Partner Operations'],
                ['img' => '19.jpeg', 'cap' => 'Sourcing Capabilities'],
                ['img' => '20.jpeg', 'cap' => 'UAE Office Operations'],
                ['img' => '21.jpeg', 'cap' => 'International Trade Platform'],
                ['img' => '22.jpeg', 'cap' => 'Industrial Equipment Supply'],
                ['img' => '23.jpeg', 'cap' => 'Global Opportunities'],
                ['img' => '24.jpeg', 'cap' => 'International Facilities'],
                ['img' => '25.jpeg', 'cap' => 'Specialized Industrial Supply'],
                ['img' => '26.jpeg', 'cap' => 'Global Connectivity'],
                ['img' => '27.jpeg', 'cap' => 'Reliable Supply Chains'],
            ] as $shot)
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="gallery-item">
                    <img src="{{ asset('img/international/' . $shot['img']) }}" alt="Skilledge Engineering - {{ $shot['cap'] }} - Sharjah UAE office">
                    <span class="gallery-caption">{{ $shot['cap'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- UAE Operations Gallery End -->

<!-- China Partner Office Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 850px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Manufacturing Partner</h5>
            <h1 class="mb-0">Yaolong Hardware Technology China CNC — Industrial Manufacturing Company</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 900px;">As part of its strategy to broaden direct-import sourcing for CNC-machined components, castings, and precision hardware, Skilledge Engineering has established a working relationship with Yaolong Hardware Technology China CNC, a manufacturing partner based in China. This relationship is intended to shorten lead times and widen access to specialized parts and raw materials that are not always readily available through local supply channels, complementing rather than replacing our in-house production capacity across the Islamabad, Rawat and Gujranwala sites.</p>
        <p class="text-center mb-5 mx-auto" style="max-width: 900px;">Our partner, Yaolong Hardware Technology China CNC, operates as an industrial manufacturing company with a production base covering CNC machining, die casting, precision casting, sheet metal fabrication and stamping, injection molding, and in-house mold design and tooling development. They also offer OEM contract processing for clients who require finished or semi-finished components manufactured to specification, supported by an established import and export trade operation that allows for direct international shipment of ordered goods.</p>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-cogs text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">CNC Machining</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-fire text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Die Casting &amp; Precision Casting</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-scissors text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Sheet Metal Fabrication &amp; Stamping</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-tint text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Injection Molding</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-drafting-compass text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">In-House Mold Design &amp; Tooling Development</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-industry text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">OEM Contract Processing</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-globe text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Import &amp; Export Trade Operation</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-shipping-fast text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Direct International Shipment</h6>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-8 wow zoomIn" data-wow-delay="0.9s">
                <div class="bg-white rounded shadow-sm p-4 d-flex align-items-center justify-content-center">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-3">
                        <h6 class="mb-1 text-muted">Partner Contact</h6>
                        <h5 class="mb-0">+86 136 5151 7595</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- China Partner Office End -->

<!-- How The Partnership Works Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">How The Partnership Works</h5>
            <h1 class="mb-0">An End-To-End Sourcing &amp; Procurement Pipeline</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Skilledge Engineering identifies component or material requirements that are more efficiently produced overseas, places orders through its partner offices, and manages import logistics, quality verification, and integration of the received parts into our own projects and product lines.</p>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">01</div>
                    <i class="fa fa-search text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Requirement Identification</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">02</div>
                    <i class="fa fa-clipboard-list text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Order Placement Through Partner</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">03</div>
                    <i class="fa fa-shipping-fast text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Import Logistics &amp; Quality Verification</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="process-item bg-light rounded text-center p-4 h-100">
                    <div class="process-no text-primary fw-bold mb-2">04</div>
                    <i class="fa fa-link text-primary mb-3" style="font-size: 2rem;"></i>
                    <h6 class="mb-0">Integration Into Projects &amp; Product Lines</h6>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <p class="mb-3">We are planning to extend our partnerships to joint ventures, shared tooling investment, or co-branded manufacturing.</p>
        </div>
    </div>
</div>
<!-- How The Partnership Works End -->

<!-- Sourcing Considerations Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Sourcing Considerations</h5>
            <h1 class="mb-0">Practical Factors Our Procurement Process Is Built To Manage</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Working with international partners and offices also brings practical considerations that our procurement process is built to manage.</p>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-clock text-white"></i>
                    </div>
                    <h6 class="mb-2">Longer Transit Times</h6>
                    <p class="small mb-0">Longer transit times than local sourcing, managed within realistic delivery schedules.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-language text-white"></i>
                    </div>
                    <h6 class="mb-2">Clear Technical Specifications</h6>
                    <p class="small mb-0">Clear technical specifications required to avoid translation or interpretation errors.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-file-invoice-dollar text-white"></i>
                    </div>
                    <h6 class="mb-2">Customs &amp; Import Duty Handling</h6>
                    <p class="small mb-0">Customs and import duty handling on every shipment is managed end-to-end.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-handshake text-white"></i>
                    </div>
                    <h6 class="mb-2">Realistic Quotation-Stage Planning</h6>
                    <p class="small mb-0">Where a client's timeline is sensitive, accounted for at the quotation stage so delivery expectations remain realistic.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sourcing Considerations End -->

<!-- Product Categories Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Product Categories Sourced</h5>
            <h1 class="mb-0">Components Aligned With, And Reinforcing, Our Product Catalogue</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Typical product categories sourced through these channels include precision steel tubing and pipe stock, forged and raw metal blanks, precision-machined hinges, brass connector pins and fittings, and a range of machined bushings and fasteners — categories that align closely with, and reinforce, the product catalogue described elsewhere in this profile.</p>
        <div class="row g-3 justify-content-center">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100"><i class="fa fa-check text-primary me-2"></i>Precision Steel Tubing &amp; Pipe Stock</div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.15s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100"><i class="fa fa-check text-primary me-2"></i>Forged &amp; Raw Metal Blanks</div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100"><i class="fa fa-check text-primary me-2"></i>Precision-Machined Hinges</div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.25s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100"><i class="fa fa-check text-primary me-2"></i>Brass Connector Pins &amp; Fittings</div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="institution-badge bg-light rounded text-center p-3 h-100"><i class="fa fa-check text-primary me-2"></i>Machined Bushings &amp; Fasteners</div>
            </div>
        </div>
        <p class="text-center mt-5 mb-0 text-muted">Over time, we expect this list to expand as specific project requirements identify further categories worth sourcing internationally rather than producing in-house.</p>
    </div>
</div>
<!-- Product Categories End -->

<!-- Component Gallery Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Manufactured Components</h5>
            <h1 class="mb-0">OEM-Manufactured Components &amp; Samples</h1>
        </div>
        <div class="row g-4">
            @foreach([
                ['img' => '1-clean.jpeg',  'cap' => 'GPS T-Box / Telemetry Unit'],
                ['img' => '2-clean.jpeg',  'cap' => 'High-Current Component (60 A)'],
                ['img' => '3-clean.jpeg',  'cap' => 'Injection-Molded Component (PA66/PA9)'],
                ['img' => '5-clean.jpeg',  'cap' => 'Precision Hardware Sample'],
                ['img' => 'A1-clean.jpg',  'cap' => 'OEM-Manufactured Component'],
                ['img' => 'A2-clean.jpg',  'cap' => 'Machined Component Sample'],
                ['img' => 'A3-clean.jpg',  'cap' => 'Sourced Component Sample'],
                ['img' => 'A4-clean.jpg',  'cap' => 'OEM Component Sample'],
            ] as $shot)
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="gallery-item">
                    <img src="{{ asset('img/manufacturing/' . $shot['img']) }}" alt="Skilledge Engineering - {{ $shot['cap'] }}">
                    <span class="gallery-caption">{{ $shot['cap'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Component Gallery End -->

<!-- Future Direction Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .92), rgba(9, 30, 62, .92)), url({{ asset('img/5.jpeg') }}) center center; background-size: cover;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-uppercase" style="color:#06A3DA;">Future Direction</h5>
            <h1 class="mb-0 text-white">Formalizing Our International Partnerships Further</h1>
        </div>
        <p class="text-center mb-5 mx-auto text-white-50" style="max-width: 850px;">Looking ahead, Skilledge Engineering intends to formalize these relationships further with agreed pricing tiers, lead-time commitments, and a defined quality-acceptance process. This is consistent with the broader direct-import supply chain goals described in this profile's Future Vision section, and reflects our general approach of building trusted, long-term supplier relationships rather than one-off transactional sourcing.</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-dollar-sign text-white mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Agreed Pricing Tiers</h5>
                    <p class="mb-0 text-white-50">Formalized commercial terms for predictable, competitive costing across sourcing categories.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-clock text-white mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Lead-Time Commitments</h5>
                    <p class="mb-0 text-white-50">Defined delivery commitments that keep project timelines realistic and dependable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="quality-item rounded p-4 h-100">
                    <i class="fa fa-clipboard-check text-white mb-3" style="font-size: 2rem; color:#06A3DA;"></i>
                    <h5 class="text-white mb-2">Defined Quality-Acceptance Process</h5>
                    <p class="mb-0 text-white-50">A documented quality-acceptance framework applied to every imported component.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5">Request A Quote</a>
        </div>
    </div>
</div>
<!-- Future Direction End -->

@endsection