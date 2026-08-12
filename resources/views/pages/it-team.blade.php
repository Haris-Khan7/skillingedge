@extends('layouts.app')

@section('title', 'IT Team | Skilledge Engineering')

@section('meta_description', 'Meet the IT Team of Skilledge Engineering — Haris Rahman, Agentic AI Expert, AI Assistant Professional, AI Chatbots Developer and Software Developer; and Salman Jamshid, AI Developer, Chatbot Developer and Machine Learning Expert.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'IT Team', 'crumb' => 'IT Team'])
@endsection

@section('content')

@php
$members = [
    [
        'name' => 'Haris Rahman',
        'initials' => 'HR',
        'email' => 'haris.rahman@estratcom.com',
        'lead' => 'Artificial Intelligence · Agentic AI Expert · AI Assistant Professional · AI Chatbots Developer · Software Developer · Software Engineer',
        'focus' => 'Artificial Intelligence, Agentic AI Expert, Software Developer',
        'intro' => 'A technology specialist focused on intelligent automation, conversational AI, and full-stack application development. Combines modern AI tooling with robust software engineering to deliver smart, user-friendly digital products.',
        'expertise' => [
            'Agentic AI solutions & intelligent workflows',
            'AI assistants and conversational chatbots',
            'Cross-platform apps with Flutter',
            'Robust backend systems with Laravel',
            'Clean, scalable API design',
            'Workflow automation with n8n',
        ],
        'skills' => [
            ['img' => 'agentic-ai-2.jpg', 'label' => 'Agentic AI'],
            ['img' => 'chatbot.jpg',      'label' => 'Chatbot'],
            ['img' => 'flutter.jpg',      'label' => 'Flutter'],
            ['img' => 'laravel.jpg',      'label' => 'Laravel'],
            ['img' => 'api.jpg',          'label' => 'API'],
            ['img' => 'n8n.jpg',          'label' => 'n8n'],
        ],
    ],
    [
        'name' => 'Salman Jamshid',
        'initials' => 'SJ',
        'lead' => 'AI Developer · Chatbot Developer · Machine Learning Expert · Software Engineer · Agentic AI Developer',
        'focus' => 'AI Development, Chatbot Development, Machine Learning',
        'intro' => 'A data and AI specialist focused on machine learning, chatbot development, software engineering, and data-driven automation. Builds intelligent models and reliable data pipelines that turn raw information into real business value.',
        'expertise' => [
            'AI development & intelligent systems',
            'Chatbot development & conversational UX',
            'Machine learning model building',
            'High-performance Fast API services',
            'Web scraping & data collection',
            'Automation & data pipelines',
            'Clean, maintainable software engineering',
        ],
        'skills' => [
            ['img' => 'agentic-ai.jpg',   'label' => 'Agentic AI'],
            ['img' => 'fast-api.jpg',     'label' => 'Fast API'],
            ['img' => 'ml.jpg',           'label' => 'Machine Learning'],
            ['img' => 'web-scrapping.jpg','label' => 'Web Scrapping'],
        ],
    ],
];
@endphp

<!-- IT Team Banner Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .92), rgba(9, 30, 62, .92)), url({{ asset('img/team/skills/agentic-ai.jpg') }}) center center; background-size: cover;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-uppercase" style="color:#06A3DA;">Our IT Team</h5>
                    <h1 class="mb-0 text-white">Technology &amp; Software Development Experts</h1>
                </div>
                <p class="mb-4 text-white-50">Skilledge Engineering's IT Team combines artificial intelligence, machine learning, automation and software engineering expertise to build intelligent, efficient and scalable technology solutions that support both our internal operations and the digital products we deliver.</p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="it-badge"><i class="fa fa-robot me-1"></i>Artificial Intelligence</span>
                    <span class="it-badge"><i class="fa fa-comments me-1"></i>Chatbots &amp; AI Assistants</span>
                    <span class="it-badge"><i class="fa fa-code me-1"></i>Software Development</span>
                    <span class="it-badge"><i class="fa fa-brain me-1"></i>Machine Learning</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row g-3 text-center">
                    <div class="col-6">
                        <div class="it-stat rounded p-4">
                            <h2 class="text-white mb-1" style="color:#06A3DA !important;">10</h2>
                            <p class="mb-0 text-white-50">Technology Fields</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="it-stat rounded p-4">
                            <h2 class="text-white mb-1" style="color:#06A3DA !important;">2</h2>
                            <p class="mb-0 text-white-50">Expert Professionals</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="it-stat rounded p-4">
                            <h2 class="text-white mb-1" style="color:#06A3DA !important;">100%</h2>
                            <p class="mb-0 text-white-50">Technology Focus</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="it-stat rounded p-4">
                            <h2 class="text-white mb-1" style="color:#06A3DA !important;">24/7</h2>
                            <p class="mb-0 text-white-50">Digital Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- IT Team Banner End -->

<!-- Team Members Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Meet The Experts</h5>
            <h1 class="mb-0">The Minds Behind Our Technology Solutions</h1>
        </div>
        <div class="row g-5">
            @foreach ($members as $member)
            <div class="col-lg-6 wow zoomIn" data-wow-delay="{{ $loop->index % 2 * 0.2 + 0.1 }}s">
                <div class="it-team-card bg-white rounded shadow-sm p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="it-avatar me-3">
                            <span>{{ $member['initials'] }}</span>
                        </div>
                        <div>
                            <h4 class="mb-1">{{ $member['name'] }}</h4>
                            <p class="text-primary fw-medium mb-0"><i class="fa fa-briefcase me-1"></i>{{ $member['focus'] }}</p>
                            @if (!empty($member['email']))
                            <a class="small text-muted mb-0" href="mailto:{{ $member['email'] }}"><i class="fa fa-envelope text-primary me-1"></i>{{ $member['email'] }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        @foreach (explode(' · ', $member['lead']) as $title)
                        <span class="it-title-badge">{{ $title }}</span>
                        @endforeach
                    </div>
                    <blockquote class="blockquote bg-light rounded p-3 border-start border-primary border-4 mb-4">
                        <p class="mb-0">{{ $member['intro'] }}</p>
                    </blockquote>
                    <div class="row g-2 mb-4">
                        @foreach ($member['expertise'] as $item)
                        <div class="col-6">
                            <small class="it-check"><i class="fa fa-check text-primary me-1"></i>{{ $item }}</small>
                        </div>
                        @endforeach
                    </div>
                    <div class="row g-3">
                        @foreach ($member['skills'] as $skill)
                        <div class="col-6 col-md-4">
                            <div class="skill-item">
                                <img src="{{ asset('img/team/skills/' . $skill['img']) }}" alt="Skilledge Engineering - {{ $member['name'] }} - {{ $skill['label'] }}">
                                <span class="skill-name">{{ $skill['label'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Members End -->

<!-- Collaboration Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-primary text-uppercase">How We Work</h5>
                    <h1 class="mb-0">Technology As An Enabler Across Our Operations</h1>
                </div>
                <p class="mb-4">The IT Team works hand-in-hand with our engineering, production and commercial functions to digitize workflows, automate repetitive processes, and build software that supports everything from client communication to internal operations.</p>
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-2"><i class="fa fa-check text-primary me-3"></i>Intelligent Automation</h5>
                        <p class="mb-0">Agentic AI and workflow automation applied to reduce manual effort and accelerate business processes.</p>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="mb-2"><i class="fa fa-check text-primary me-3"></i>Data-Driven Insights</h5>
                        <p class="mb-0">Machine learning and data engineering transform operational data into actionable insight.</p>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="mb-2"><i class="fa fa-check text-primary me-3"></i>Modern Application Development</h5>
                        <p class="mb-0">Robust web and mobile applications built with Laravel, Flutter and well-designed APIs.</p>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="mb-2"><i class="fa fa-check text-primary me-3"></i>Reliable &amp; Scalable Architecture</h5>
                        <p class="mb-0">Solutions engineered for performance, maintainability and growth.</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5 wow zoomIn" data-wow-delay="0.4s">Discuss Your Requirements</a>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/team/skills/agentic-ai.jpg') }}" style="object-fit: cover;" alt="Skilledge Engineering - IT Team - Artificial Intelligence solutions">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Collaboration End -->

@endsection
