@extends('layouts.app')

@section('title', 'Our Team | Skilledge Engineering')

@section('meta_description', 'Meet the leadership and organization of Skilledge Engineering — a structured corporate governance framework with executive, functional, departmental and site operations tiers across Islamabad, Rawat and Gujranwala.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'Our Team', 'crumb' => 'Our Team'])
@endsection

@section('content')

@php
$positions = [
    ['name' => 'Muhammad Yasir Khan', 'position' => 'Chief Executive Officer (CEO)', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Electronics Engineering, 18-year professional experience'],
    ['name' => 'Engr. Arif Malik', 'position' => 'General Manager (Technical)', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Mechanical Engineering, NUST — 18 years’ experience in Manufacturing'],
    ['name' => 'Engr. Mian Hussain', 'position' => 'General Manager (Materials)', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Design and Manufacturing Engineering, NUST , BS Material Engineering, GIK  — 5+ years experience'],
    ['name' => 'Engr. Hanzala Noman', 'position' => 'Business Developer / Electrical Site Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Electrical Engineering — 5+ years experience'],
    ['name' => 'Engr. Awais Rasul', 'position' => 'Design Engineer Civil', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Civil Engineering — 5+ years experience'],
    ['name' => 'Muhammad Asif', 'position' => 'Production Manager', 'office' => 'Gujranwala', 'qualification' => 'DAE Mechanical, PBTE Gujranwala — 20+ years experience'],
    ['name' => 'Engr. Arif Malik', 'position' => 'Production Planning & Control (PPC) Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'MS Mechanical Engineering, NUST'],
    ['name' => 'M. Fahad Rafiq', 'position' => 'Quality Assurance (QA) Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BSc Chemistry, IUB'],
    ['name' => 'Engr. M. Maaz', 'position' => 'Quality Control (QC) Manager', 'office' => 'Gujranwala', 'qualification' => 'BS Mechanical Engineering, NUTECH'],
    ['name' => 'Faizan Zafar', 'position' => 'Engineering Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'DAE Mechanical, PBTE Rawalpindi'],
    ['name' => 'Engr. Hanzala Shabbir', 'position' => 'Maintenance Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BS Mechanical Engineering, NUTECH'],
    ['name' => 'Abdullah Iqbal', 'position' => 'Supply Chain Manager', 'office' => 'Gujranwala', 'qualification' => 'BS Mechatronics, Air University'],
    ['name' => 'Engr. M. Mehar Ali', 'position' => 'Procurement / Purchase Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BSc Mechanical Engineering, IIUI'],
    ['name' => 'Engr. Rana M. Arham', 'position' => 'Warehouse Manager', 'office' => 'RWP – Factory', 'qualification' => 'BSc Mechanical Engineering, NSU'],
    ['name' => 'M. Hassan Khalid', 'position' => 'Human Resources (HR) Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BS Mechanical Engineering, UET Peshawar'],
    ['name' => 'Engr. Waleed Sajid', 'position' => 'Finance & Accounts Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BS Mechanical Engineering, NUTECH'],
    ['name' => 'Abdul Ahad', 'position' => 'Health, Safety & Environment (HSE) Manager', 'office' => 'RWP – Factory', 'qualification' => 'BS Mechanical Engineering, NUTECH'],
    ['name' => 'Engr. Mahad Ullah', 'position' => 'Sales & Marketing Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BS Mechanical Engineering, Nutech'],
    ['name' => 'Abeera Arif Khan', 'position' => 'IT Manager', 'office' => 'HQ – Islamabad', 'qualification' => 'BS in IT, Fast University ISB'],
    ['name' => 'Engr. Usama Bin Latif', 'position' => 'Project Manager', 'office' => 'Gujranwala', 'qualification' => 'BS Mechanical Engineering, Nutech'],
    ['name' => 'Hafiz Gohar Ishaq', 'position' => 'Production Supervisor', 'office' => 'Gujranwala', 'qualification' => 'DAE Mechanical, PBTE Gujranwala'],
];
$initials = function ($name) {
    $parts = preg_split('/\s+/', trim($name));
    $initials = '';
    foreach (array_slice($parts, 0, 2) as $part) {
        $initials .= mb_substr($part, 0, 1);
    }
    return mb_strtoupper($initials);
};
@endphp

<!-- Leadership Message Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-primary text-uppercase">Message From Leadership</h5>
                    <h1 class="mb-0">Chief Executive Officer</h1>
                </div>
                <div class="team-avatar bg-primary rounded d-flex align-items-center justify-content-center text-white fw-bold mb-3">YK</div>
                <h4 class="mb-1">Muhammad Yasir Khan</h4>
                <p class="text-primary fw-medium mb-0">Chief Executive Officer, Skilledge Engineering</p>
            </div>
            <div class="col-lg-8">
                <blockquote class="blockquote bg-light rounded p-4 border-start border-primary border-4 mb-4">
                    <p class="mb-3">"At Skilledge Engineering, we believe that excellence is achieved through precision, integrity, and an unwavering commitment to quality. Every project we undertake reflects these values and reinforces the trust our clients place in us."</p>
                    <p class="mb-0">"By combining local manufacturing capabilities with a reliable international sourcing network, we deliver solutions that meet international standards while addressing the specific requirements of Pakistan's defense and industrial sector."</p>
                </blockquote>
                <p class="mb-0">With more than two decades of experience in engineering, industrial research, technology development, and technical assistance to industry within public sector R&amp;D organizations of Pakistan, our leadership has contributed to engineering innovation, product development, quality assurance, indigenous technology initiatives, and industrial capacity building — a heritage that continues to shape Skilledge Engineering since its establishment in 2020.</p>
            </div>
        </div>
    </div>
</div>
<!-- Leadership Message End -->

<!-- Organization Structure Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Organizational Structure</h5>
            <h1 class="mb-0">A Highly Structured Corporate Governance Framework</h1>
        </div>
        <p class="text-center mb-5 mx-auto" style="max-width: 850px;">Operations are strategically decentralized across three primary locations — Corporate Headquarters (Islamabad), the Rawat Industrial Factory, and the Gujranwala Production Facility — to efficiently serve Pakistan's industrial and public sectors. The hierarchy corresponds to the official corporate registry and human resource framework (HR Organization Positions List, Document No. HR-012-03V).</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-chess-king text-white"></i>
                    </div>
                    <h5 class="mb-2">Executive Direction</h5>
                    <p class="mb-0">The Executive Leadership tier is responsible for macro-level strategy, capital reinvestment allocations, international joint ventures, and upholding the firm's two-decade legacy of technical integrity — from CEO through Managing Director and General Manager.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-user-tie text-white"></i>
                    </div>
                    <h5 class="mb-2">Functional &amp; Site Leadership</h5>
                    <p class="mb-0">Business Development manages interfaces with government procurement authorities; Production Planning &amp; Control (PPC) maximizes shop-floor efficiency; Plant &amp; Production Managers oversee day-to-day manufacturing operations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-sitemap text-white"></i>
                    </div>
                    <h5 class="mb-2">Departmental Management</h5>
                    <p class="mb-0">Quality Assurance (QA) operates independently from Quality Control (QC) to guarantee unbiased verification loops, while Supply Chain and Procurement are tightly integrated to insulate projects from global material price volatility.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-hard-hat text-white"></i>
                    </div>
                    <h5 class="mb-2">Site Operations</h5>
                    <p class="mb-0">Led by specialized supervisors on the production floors, this operational tier consists of certified engineers, CNC programmers, precision machinists, and technical artisans who execute engineering blueprints within microscopic tolerances.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <h5 class="mb-3">Three Operating Locations</h5>
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="bg-light rounded p-3 h-100">
                                <h6 class="text-primary mb-2"><i class="fa fa-building me-2"></i>Corporate Headquarters (Islamabad)</h6>
                                <p class="small mb-0">Centralized governance, international sourcing, corporate finance, and strategic client relations.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-light rounded p-3 h-100">
                                <h6 class="text-primary mb-2"><i class="fa fa-industry me-2"></i>Rawat Industrial Factory</h6>
                                <p class="small mb-0">High-precision CNC machining, heavy structural fabrication, and core engineering operations.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-light rounded p-3 h-100">
                                <h6 class="text-primary mb-2"><i class="fa fa-cubes me-2"></i>Gujranwala Production Facility</h6>
                                <p class="small mb-0">Specialized component manufacturing, component assembly, and regional supply chain distribution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Organization Structure End -->

<!-- Team Members Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Organization Positions List</h5>
            <h1 class="mb-0">A Certified, Cross-Disciplinary Engineering Cadre</h1>
        </div>
        <div class="row g-4">
            @foreach ($positions as $index => $member)
            <div class="col-lg-3 col-md-4 col-sm-6 wow slideInUp" data-wow-delay="{{ ($index % 4) * 0.1 + 0.1 }}s">
                <div class="team-card bg-light rounded text-center p-4 h-100">
                    <div class="team-avatar bg-primary text-white fw-bold mx-auto mb-3">{{ $initials($member['name']) }}</div>
                    <h6 class="text-primary mb-1">{{ $member['name'] }}</h6>
                    <p class="fw-medium mb-2">{{ $member['position'] }}</p>
                    <small class="text-muted d-block"><i class="fa fa-map-marker-alt me-1"></i>{{ $member['office'] }}</small>
                    <small class="text-muted d-block">{{ $member['qualification'] }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Members End -->

<!-- Positions Table Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Full Positions List</h5>
            <h1 class="mb-0">HR Organization Positions List — Document No. HR-012-03V</h1>
        </div>
        <div class="table-responsive bg-white rounded shadow-sm">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Posting Office</th>
                        <th scope="col">Basic Qualification</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $index => $member)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $member['name'] }}</td>
                        <td>{{ $member['position'] }}</td>
                        <td>{{ $member['office'] }}</td>
                        <td>{{ $member['qualification'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Positions Table End -->

@endsection
