@extends('layouts.app')

@section('title', 'Products & Services | Skilledge Engineering')

@section('meta_description', 'Skilledge Engineering — eight core engineering disciplines, a comprehensive product and supply range, and engineering consultancy services including CNC machining, fabrication, electrical, electronics, automation, instrumentation and calibration.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'Products & Services', 'crumb' => 'Products & Services'])
@endsection

@section('content')

<!-- Disciplines Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="disciplines">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Core Engineering Disciplines</h5>
            <h1 class="mb-0">Eight Foundational Engineering Functions, Delivered In-House</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Our multi-disciplinary technical scope spans eight foundational engineering functions, delivered by an elite in-house technical workforce and supported by a verified global supplier network — guaranteeing institutional-grade execution across Pakistan's industrial landscape.</p>
        <div class="row g-4">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-bolt text-white"></i>
                        </div>
                        <h4 class="mb-0">1. Electrical Engineering</h4>
                    </div>
                    <p class="text-muted">Design, configuration, procurement, and deployment of low-voltage (LV) and medium-voltage (MV) electrical systems for high-stakes industrial and public-sector infrastructure.</p>
                    <ul class="small mb-0">
                        <li>Power distribution networks and heavy switchgear design</li>
                        <li>Motor Control Centers (MCC) and advanced industrial motor starters</li>
                        <li>Heavy-duty plant cabling, earthing, and deep grounding systems</li>
                        <li>Industrial-grade floodlighting and facility illumination networks</li>
                        <li>Power transformers and high-precision current-transformer supply</li>
                        <li>Rigorous site-level electrical testing and engineering commissioning</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-microchip text-white"></i>
                        </div>
                        <h4 class="mb-0">2. Electronics Engineering</h4>
                    </div>
                    <p class="text-muted">Strategic international sourcing, component evaluation, and hardware integration of industrial-grade electronics and electronic control interfaces.</p>
                    <ul class="small mb-0">
                        <li>Sourcing of specialized electronic components and high-reliability connectors</li>
                        <li>Precision low-noise control panel and electrical junction panel assembly</li>
                        <li>Advanced overcurrent circuit protection devices and isolation hardware</li>
                        <li>High-efficiency Switched-Mode Power Supply (SMPS) integration</li>
                        <li>Servo drives, digital actuators, and microscopic motion control hardware</li>
                        <li>Comprehensive board-level diagnostics and system-level stress testing</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-robot text-white"></i>
                        </div>
                        <h4 class="mb-0">3. Industrial Automation</h4>
                    </div>
                    <p class="text-muted">Turnkey PLC, HMI, and SCADA architectural design and integration for process monitoring, discrete manufacturing control, and Industrial IoT (IIoT) frameworks.</p>
                    <ul class="small mb-0">
                        <li>Multi-brand PLC / HMI / SCADA programming and plant-wide architecture integration</li>
                        <li>Industrial network protocol deployment (Ethernet/IP, Profibus, Modbus RTU/TCP)</li>
                        <li>Automated control console design, panel layout, and physical fabrication</li>
                        <li>Variable Frequency Drive (VFD) implementation and multi-motor automation loops</li>
                        <li>Remote data telemetry, cloud monitoring, and Industrial IoT infrastructure</li>
                        <li>Vendor-approved multi-system synchronization and field-bus optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-tachometer-alt text-white"></i>
                        </div>
                        <h4 class="mb-0">4. Instrumentation and Control</h4>
                    </div>
                    <p class="text-muted">Deploying zero-tolerance precision sensing, industrial digital measurement tools, and closed-loop process control hardware for volatile production environments.</p>
                    <ul class="small mb-0">
                        <li>High-accuracy pressure, temperature, and industrial fluid-flow instrumentation</li>
                        <li>Non-contact level measurement utilizing advanced radar and ultrasonic arrays</li>
                        <li>Automated control valves, pneumatic actuators, and electronic solenoid valves</li>
                        <li>NIST-traceable calibration instruments and reference laboratory tools</li>
                        <li>Industrial ambient gas profiling and toxic leak detection systems</li>
                        <li>Digital multi-meters, data logging modules, and analytical recorders</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-cog text-white"></i>
                        </div>
                        <h4 class="mb-0">5. Mechanical Engineering</h4>
                    </div>
                    <p class="text-muted">Advanced computer-aided engineering, operational stress design, and the technical supply of mechanical power-transmission and fluid-handling machinery.</p>
                    <ul class="small mb-0">
                        <li>Custom industrial fixtures, heavy assembly jigs, and manufacturing tooling design</li>
                        <li>Power transmission optimization: high-load bearings, gears, and structural couplings</li>
                        <li>High-pressure hydraulic power units and pneumatic control components</li>
                        <li>Industrial fluid pump assemblies and heavy-duty air compressor supply</li>
                        <li>Advanced CAD/CAM engineering utilizing SolidWorks, Creo, and Autodesk Inventor</li>
                        <li>Comprehensive structural stress planning and mill manufacturing documentation</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm h-100">
                    <div class="overflow-hidden rounded-top">
                        <img class="card-cover" src="{{ asset('img/2.jpeg') }}" alt="In-house CNC and grinding machinery at Skilledge Engineering">
                    </div>
                    <div class="p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-cogs text-white"></i>
                        </div>
                        <h4 class="mb-0">6. CNC Machining</h4>
                    </div>
                    <p class="text-muted">In-house multi-axis computer numerical control turning, milling, and precision tooling — from raw metallurgical stock to finished, audited aerospace-tolerance components.</p>
                    <ul class="small mb-0">
                        <li>High-speed CNC vertical milling and precision CNC lathe turning operations</li>
                        <li>Rigid machining adherence to engineering blueprint drawings and GD&amp;T metrics</li>
                        <li>Rapid prototype development and full-scale serial manufacturing runs</li>
                        <li>Custom mechanical part production: heavy shafts, splines, flanges, and high-pressure fittings</li>
                        <li>Raw material inventory management: mild steel (MS) and stainless steel (SS) sourcing</li>
                        <li>Closed-loop quality assurance path tracking from raw ingot testing to finalized components</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-ruler text-white"></i>
                        </div>
                        <h4 class="mb-0">7. Calibration &amp; Measurements</h4>
                    </div>
                    <p class="text-muted">We provide comprehensive calibration, testing, and measurement instruments for industrial, laboratory, electrical, electronic, mechanical, and process-control systems.</p>
                    <div class="row small mb-2">
                        <div class="col-md-6">
                            <ul class="mb-2">
                                <li><strong>Electrical &amp; Electronic:</strong> Multimeters, insulation/earth testers, power analyzers, oscilloscopes, signal generators, frequency counters, LCR meters, and electronic test equipment.</li>
                                <li><strong>RF &amp; High-Frequency:</strong> Spectrum analyzers, RF generators, frequency measurement and related RF test systems.</li>
                                <li><strong>Dimensional &amp; Mechanical:</strong> Vernier calipers, micrometers, dial gauges, height gauges, torque wrenches, pressure gauges, and precision tools.</li>
                                <li><strong>Temperature &amp; Thermal:</strong> Thermocouples, RTDs, thermometers, data loggers, temperature controllers, ovens, furnaces, and thermal chambers.</li>
                                <li><strong>Pressure, Vacuum &amp; Flow:</strong> Pressure/vacuum gauges, transmitters, calibrators, dead-weight testers, flow meters, rotameters, and level instruments.</li>
                                <li><strong>Process Instrumentation:</strong> Sensors, transmitters, controllers, indicators, switches, actuators, control valves, PLC/SCADA, and industrial measurement systems.</li>
                                <li><strong>Mass, Force &amp; Torque:</strong> Balances, load cells, force gauges, dynamometers, torque meters, and related equipment.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="mb-2">
                                <li><strong>Time, Frequency &amp; Speed:</strong> Frequency meters, tachometers, RPM meters, timers, counters, and stroboscopes.</li>
                                <li><strong>Optical &amp; Laboratory:</strong> Lux meters, light meters, laboratory testing and measurement equipment.</li>
                                <li><strong>On-Site Services:</strong> Field calibration, testing, verification, troubleshooting, preventive maintenance, and commissioning at client facilities.</li>
                                <li><strong>Instrumentation Engineering:</strong> Selection, installation, integration, testing, commissioning, and maintenance of industrial instrumentation and control systems.</li>
                                <li><strong>Documentation &amp; Traceability:</strong> Calibration certificates, test reports, equipment history, traceability records, and calibration schedules.</li>
                                <li><strong>Standards &amp; Traceability:</strong> Services are performed with reference to applicable ISO/IEC 17025, ISO 9001, IEC, ASTM, ASME, and other relevant national/international standards, subject to the applicable scope and availability of reference standards.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-industry text-white"></i>
                        </div>
                        <h4 class="mb-0">8. Fabrication &amp; Heavy Manufacturing</h4>
                    </div>
                    <p class="text-muted">Structural steel engineering, forming, welding, and surface treatment services transforming raw plates into custom enclosures and industrial load-bearing frames.</p>
                    <ul class="small mb-0">
                        <li>Heavy structural steel frames, overhead modular racks, and custom terminal enclosures</li>
                        <li>Secure storage solutions: heavy almirahs, technical tool cabinets, and notice boards</li>
                        <li>Certified structural welding, manual assembly, and macro finishing works</li>
                        <li>Bulk structural steel supply: MS/SS piping, heavy plates, solid round bars, and sheets</li>
                        <li>Custom electrical enclosure skinning, automated punch work, and specialized panels</li>
                        <li>Industrial surface treatment: sandblasting, anti-corrosive powder coating, and zinc plating</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Disciplines End -->

<!-- Supply Range Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="supply" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Product &amp; Supply Range</h5>
            <h1 class="mb-0">An Exhaustive Industrial Product Range Since 1998</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">We leverage an expansive, decades-long local and international sourcing network established since 1998 to deliver a comprehensive range of industrial machinery, specialized components, and renewable energy infrastructure — every product conforming to rigorous international standards.</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm h-100">
                    <div class="overflow-hidden rounded-top">
                        <img class="card-cover" src="{{ asset('img/4.jpeg') }}" alt="Industrial machinery supplied by Skilledge Engineering">
                    </div>
                    <div class="p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-industry text-white"></i>
                        </div>
                        <h5 class="mb-0">1. Industrial Machinery &amp; Equipment</h5>
                    </div>
                    <p class="small text-muted">Procurement and deployment of turnkey industrial, analytical laboratory, and facility-floor machinery engineered for optimal operational throughput.</p>
                    <ul class="small mb-0">
                        <li>Sourcing of multi-axis CNC machines and custom machining center assets.</li>
                        <li>Heavy-duty screw air compressors and industrial centrifugal/positive-displacement pumps.</li>
                        <li>NIST-traceable analytical laboratory equipment and specialized environmental testing systems.</li>
                        <li>Material handling assets, overhead cranes, automated hoists, and customized transport skids.</li>
                        <li>Industrial HVAC equipment, heavy-duty backup generators, and enterprise-grade UPS infrastructure.</li>
                        <li>Facility safety systems, specialized timing units, and automated process control hardware.</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm h-100">
                    <div class="overflow-hidden rounded-top">
                        <img class="card-cover" src="{{ asset('img/6.jpeg') }}" alt="Precision industrial spare parts from Skilledge Engineering">
                    </div>
                    <div class="p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-cogs text-white"></i>
                        </div>
                        <h5 class="mb-0">2. Precision Industrial Spare Parts</h5>
                    </div>
                    <p class="small text-muted">Rapid provisioning of genuine OEM and verified cross-referenced spare components to eliminate plant downtime and support multi-year machinery lifecycles.</p>
                    <ul class="small mb-0">
                        <li>High-load mechanical bearings, bushings, precision gears, and tooth sprockets.</li>
                        <li>Industrial drive chains, transmission belts, custom shafts, and structural couplings.</li>
                        <li>Replacement electric motor spares, internal valve trim, and fluid sealing components.</li>
                        <li>Discrete board-level electronic spares and heavy-duty switchgear replacement parts.</li>
                        <li>High-current electrical connectors, heavy terminal blocks, and specialized fasteners.</li>
                        <li>Industrial sealing gaskets, O-rings, mechanical seals, and machine shop tooling spares.</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-microchip text-white"></i>
                        </div>
                        <h5 class="mb-0">3. Advanced Sensors &amp; Transmitters Catalog</h5>
                    </div>
                    <p class="small text-muted">Industrial-grade telemetry and solid-state sensing architectures designed for accurate process monitoring and direct PLC/SCADA loop integration.</p>
                    <ul class="small mb-0">
                        <li>Solid-state inductive, capacitive, and photoelectric proximity sensors for production lines.</li>
                        <li>Non-contact ultrasonic sensors and high-accuracy strain-gauge load cells.</li>
                        <li>Heavy-duty RTD, thermocouple temperature sensors, and ambient relative humidity transmitters.</li>
                        <li>Toxic/combustible gas detection sensors, seismic vibration sensors, and telemetry hardware.</li>
                        <li>Hall-effect current sensors, digital voltage monitoring sensors, and hydrostatic level transmitters.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-bolt text-white"></i>
                        </div>
                        <h5 class="mb-0">4. Switchgear &amp; Power Distribution Infrastructure</h5>
                    </div>
                    <p class="small text-muted">Low-voltage (LV) and medium-voltage (MV) heavy electrical distribution hardware, overcurrent safety mechanisms, and motor protection equipment.</p>
                    <ul class="small mb-0">
                        <li>Molded Case Circuit Breakers (MCCB) and high-capacity Air Circuit Breakers (ACB).</li>
                        <li>Miniature Circuit Breakers (MCB) and Residual Current Circuit Breakers (RCCB/RCD).</li>
                        <li>Heavy-duty magnetic contactors, control relays, and digital overload protection units.</li>
                        <li>Variable Frequency Drives (VFDs) and electronic soft starters for heavy motor loops.</li>
                        <li>Step-down power transformers, current transformers (CT), and potential transformers (PT).</li>
                        <li>Industrial-grade cable glands, heavy copper compression lugs, and solid electrolytic busbars.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-tachometer-alt text-white"></i>
                        </div>
                        <h5 class="mb-0">5. Test &amp; Measuring Instruments</h5>
                    </div>
                    <p class="small text-muted">Calibration-grade diagnostic instrumentation engineered for flawless field execution, regulatory compliance audits, and laboratory verification.</p>
                    <ul class="small mb-0">
                        <li>Bourdon tube pressure gauges, digital vacuum gauges, and inline fluid flow meters.</li>
                        <li>Digital multi-meters, True-RMS clamp meters, and high-voltage insulation/Megger testers.</li>
                        <li>Point-source gas leak detectors, digital data loggers, and environmental monitoring tools.</li>
                        <li>High-resolution rotary encoders, laboratory inspection kits, and reference calibration standards.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                            <i class="fa fa-solar-panel text-white"></i>
                        </div>
                        <h5 class="mb-0">6. Solar &amp; Renewable Energy Solutions</h5>
                    </div>
                    <p class="small text-muted">Sustainable, high-availability clean energy architectures engineered for commercial and industrial (C&amp;I) facilities.</p>
                    <ul class="small mb-0">
                        <li>Tier-1 photovoltaic solar panels coupled with heavy-duty aerodynamic mounting structures.</li>
                        <li>Industrial lithium-ion/deep-cycle battery energy storage systems (BESS) and backup UPS lines.</li>
                        <li>Pure sine-wave solar inverters, smart MPPT charge controllers, and automated transfer switches.</li>
                        <li>Turnkey grid-tie, off-grid, and multi-source hybrid power management systems.</li>
                        <li>Facility-wide energy-efficient industrial lighting retrofits and structural illumination overhauls.</li>
                        <li>Real-time cloud-integrated energy monitoring systems, smart metering, and load-profiling hardware.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Supply Range End -->

<!-- Consultancy Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="consultancy">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Engineering Consultancy &amp; Technical Services</h5>
            <h1 class="mb-0">An Objective Technical Partner From Concept to Deployment</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">We serve as an objective technical partner for public sector authorities, defense organizations, and enterprise industrial entities — translating complex operational challenges into deployment-ready technical blueprints while maximizing cost-effectiveness and reducing engineering risk.</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-drafting-compass text-white"></i>
                    </div>
                    <h5 class="mb-2">Technical Design &amp; BOQ Preparation</h5>
                    <p class="mb-0">Detailed engineering blueprints, precise technical specification files, and comprehensive Bills of Quantities (BOQs) for large-scale institutional tenders and industrial capital projects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-search-location text-white"></i>
                    </div>
                    <h5 class="mb-2">Feasibility &amp; Site Assessment</h5>
                    <p class="mb-0">Detailed physical evaluations at client facilities to determine exact deployment parameters across mechanical, electrical, and automated workflows.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-tasks text-white"></i>
                    </div>
                    <h5 class="mb-2">Project Coordination &amp; Commissioning</h5>
                    <p class="mb-0">End-to-end oversight across the entire execution spectrum — bridging the gap between initial procurement, physical installation, and safe system start-up.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-wrench text-white"></i>
                    </div>
                    <h5 class="mb-2">Asset Maintenance &amp; After-Sales Support</h5>
                    <p class="mb-0">Protection against unexpected production shutdowns through structured service level agreements (SLAs), preventative maintenance protocols, and fast troubleshooting support.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-shipping-fast text-white"></i>
                    </div>
                    <h5 class="mb-2">Technical Procurement &amp; Sourcing Validation</h5>
                    <p class="mb-0">High-security, technical supply pipelines built on the trusted manufacturer networks established since 1998 — eliminating gray-market equipment risks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-light rounded p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-chalkboard-teacher text-white"></i>
                    </div>
                    <h5 class="mb-2">Workforce Training &amp; Technical Facilitation</h5>
                    <p class="mb-0">Handing over operational autonomy to client teams through structured, hands-on training modules and workplace skills facilitation programs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Consultancy End -->

<!-- Portfolio Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="portfolio" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Product Portfolio &amp; Engineering Deliverables</h5>
            <h1 class="mb-0">From Engineering Schematics to High-Precision Physical Components</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Skilledge Engineering converts complex engineering schematics into high-precision, physical components and turnkey systems. Every sample component and assembly produced across our Islamabad, Rawat, and Gujranwala facilities undergoes rigorous quality testing to ensure absolute compliance with global industrial metrics.</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">01</span>
                    <h5 class="mt-2 mb-2">CNC Machined Structural Plates &amp; Brackets</h5>
                    <p class="small">Precision-milled mounting plates, angle brackets and base plates machined from aluminum and steel billet to tight tolerances, with accurate hole patterns for direct assembly integration.</p>
                    <small class="text-muted">SE-MP-100 · SE-FB-101 · SE-AB-102 · SE-CP-103 · SE-BP-104 · SE-YB-105 · SE-CP-106 · SE-MB-107 · SE-SB-108 · SE-SP-109</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">02</span>
                    <h5 class="mt-2 mb-2">Precision Shafts, Spindles &amp; Pins</h5>
                    <p class="small">Turned and ground shafts, stepped pins and tapered spindles manufactured to close diametrical tolerances for rotating and load-bearing applications.</p>
                    <small class="text-muted">SE-SH-200 · SE-SP-201</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">03</span>
                    <h5 class="mt-2 mb-2">Precision Spacers, Standoffs &amp; Small Turned Components</h5>
                    <p class="small">High-volume batches of small precision-turned spacers, washers and standoff pins, held to tight length and bore tolerances for repeatable assembly fit.</p>
                    <small class="text-muted">SE-SP-210 · SE-ST-211</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">04</span>
                    <h5 class="mt-2 mb-2">Gears &amp; Rotary Machined Assemblies</h5>
                    <p class="small">Spur gears, keyed shaft assemblies and rotary components machined and cut in-house for drive-train and motion-transfer applications.</p>
                    <small class="text-muted">SE-GR-300 · SE-GR-301</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">05</span>
                    <h5 class="mt-2 mb-2">Hydraulic &amp; Pneumatic Fittings</h5>
                    <p class="small">Turned metal hose barb fittings, drilled tube components and manifold blocks manufactured for fluid and pneumatic line connections.</p>
                    <small class="text-muted">SE-HF-400 · SE-DT-401</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">06</span>
                    <h5 class="mt-2 mb-2">Turned Bronze &amp; Brass Bushings</h5>
                    <p class="small">Free-machining bronze and brass turned components including flanged bushings and threaded bearing housings for wear-resistant, low-friction applications.</p>
                    <small class="text-muted">SE-BR-500 · SE-BR-501</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">07</span>
                    <h5 class="mt-2 mb-2">Machined Rings &amp; Structural Assemblies</h5>
                    <p class="small">Large-diameter precision-turned rings and structural rotating components, drilled and finished for assembly into rotating equipment.</p>
                    <small class="text-muted">SE-RG-600 · SE-RG-601 · SE-AU-602</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">08</span>
                    <h5 class="mt-2 mb-2">High-Volume CNC Turned Production</h5>
                    <p class="small">Batch and bulk CNC turning capability for repeat-order components, produced to consistent dimensional accuracy across full production runs.</p>
                    <small class="text-muted">SE-BT-700 · SE-BT-701 · SE-BT-702</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">09</span>
                    <h5 class="mt-2 mb-2">Electrical Panels &amp; Control Equipment</h5>
                    <p class="small">Custom-built electrical control panels, distribution boards and enclosures housing switchgear, indicators and control devices.</p>
                    <small class="text-muted">SE-EP-800 to SE-EP-809</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1.0s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <span class="text-primary fw-bold">10</span>
                    <h5 class="mt-2 mb-2">Welding &amp; Fabrication — Custom Projects</h5>
                    <p class="small">Custom-fabricated scale models built for lab, training and educational demonstration purposes — showcasing sheet-metal fabrication, welding and finishing capability.</p>
                    <small class="text-muted">SE-WF-900 · SE-WF-901 · SE-WF-902 · SE-WF-903</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1.1s">
                <div class="bg-primary rounded shadow-sm p-4 h-100 text-white">
                    <span class="fw-bold">11</span>
                    <h5 class="text-white mt-2 mb-2">Custom RC Aircraft &amp; UAV Airframe Fabrication</h5>
                    <p class="mb-2">Custom-fabricated fixed-wing RC aircraft and UAV airframes built for research, prototyping and flight-demonstration purposes — lightweight composite fabrication, precision assembly and field-testing capability.</p>
                    <small class="text-white-50">SE-RC-1000 · SE-RC-1001 · SE-RC-1002 · SE-RC-1003</small>
                    <a href="{{ route('rd') }}" class="btn btn-light btn-sm mt-3">View Our R&amp;D Capability</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

<!-- Facility Gallery Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Inside Our Facilities</h5>
            <h1 class="mb-0">Production Capability, Captured on Our Own Floor</h1>
        </div>
        <p class="text-center mb-5 mx-auto text-muted" style="max-width: 850px;">A look inside the machining, fabrication and testing operations that power Skilledge Engineering's Islamabad, Rawat and Gujranwala facilities.</p>
        <div class="row g-4">
            @foreach([
                ['img' => '8.jpeg',  'cap' => 'Precision machining operations'],
                ['img' => '14.jpeg', 'cap' => 'In-house CNC turning and milling'],
                ['img' => '15.jpeg', 'cap' => 'Heavy fabrication and forming'],
                ['img' => '19.jpeg', 'cap' => 'Assembly and finishing works'],
                ['img' => '21.jpeg', 'cap' => 'Quality measurement and inspection'],
                ['img' => '23.jpeg', 'cap' => 'Production floor view'],
            ] as $shot)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="gallery-item">
                    <img src="{{ asset('img/' . $shot['img']) }}" alt="Skilledge Engineering - {{ $shot['cap'] }}">
                    <span class="gallery-caption">{{ $shot['cap'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Facility Gallery End -->

<!-- CTA Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="bg-primary rounded p-5 wow zoomIn" data-wow-delay="0.3s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-2">Need A Specific Component, Machine Or Hard-To-Find Part?</h2>
                    <p class="text-white mb-0">Talk to our engineers about design, fabrication, supply, installation and commissioning — accurate work, honest pricing, delivery you can rely on.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-dark py-3 px-5">Request A Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

@endsection
