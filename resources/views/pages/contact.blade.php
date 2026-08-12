@extends('layouts.app')

@section('title', 'Contact Us | Skilledge Engineering')

@section('meta_description', 'Contact Skilledge Engineering — Plot # 33, 2nd Floor, Office # 2, Anique Arcade, I-8 Markaz, Islamabad. Phone 051-4449822, Cell 0346-9612030, Email Skilledge.com@gmail.com.')

@section('nav-header')
@include('layouts.partials.page-header', ['title' => 'Contact Us', 'crumb' => 'Contact'])
@endsection

@section('content')

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Get In Touch</h5>
            <h1 class="mb-0">We Welcome Your Next Machining, Fabrication or Technical Supply Requirement</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call / Cell</h5>
                        <h6 class="text-primary mb-0">051-4449822</h6>
                        <h6 class="text-primary mb-0">0346-9612030</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email</h5>
                        <h6 class="text-primary mb-0">Skilledge.com@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Office Address</h5>
                        <h6 class="text-primary mb-0">Plot # 33, 2nd Floor, Office # 2, Anique Arcade, I-8 Markaz, Islamabad, Pakistan</h6>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
        <div class="alert alert-success wow fadeIn" role="alert">
            <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
        </div>
        @endif

        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name" style="height: 55px;">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email" style="height: 55px;">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4 @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" placeholder="Subject" style="height: 55px;">
                            @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3 @error('message') is-invalid @enderror" name="message" rows="4" placeholder="Message">{{ old('message') }}</textarea>
                            @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps?q=I-8%20Markaz%2C%20Islamabad%2C%20Pakistan&output=embed"
                    frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Statutory Details Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #EEF9FF;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Registration &amp; Statutory Details</h5>
            <h1 class="mb-0">An FBR-Registered, Active Taxpayer Entity</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-file-invoice text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">NTN</h6>
                    <h5 class="mb-0">3277876383996</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-file-invoice-dollar text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">STRN</h6>
                    <h5 class="mb-0">I363351-3</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-balance-scale text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Status</h6>
                    <h5 class="mb-0">Income Tax – Active</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="fa fa-building text-white"></i>
                    </div>
                    <h6 class="text-primary mb-1">Jurisdiction</h6>
                    <h5 class="mb-0">RTO Islamabad</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Statutory Details End -->

<!-- International Presence Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-4">
                    <h5 class="fw-bold text-primary text-uppercase">Our International Existence</h5>
                    <h1 class="mb-0">Pacific Solution International FZE — Sharjah, UAE</h1>
                </div>
                <p class="mb-3">Skilledge Engineering extends its engineering and industrial capabilities beyond Pakistan through its international presence in the United Arab Emirates with Pacific Solution International FZE (PSI Electrical &amp; Electromechanical), strategically based in Hamriyah Free Zone, Sharjah.</p>
                <p class="mb-4">PSI provides an international platform for global sourcing, export and import, cross-border trade, and the supply of electrical, electronic, mechanical, electromechanical, and industrial solutions — connecting clients with global markets across the Middle East, Asia, Africa, Europe, and North America.</p>
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
                            <div><h6 class="mb-1">Tel</h6><p class="small mb-0">+971 50 385 4053 | +971 56 896 0474</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/20.jpeg') }}" style="height: 380px; object-fit: cover;" alt="International presence — Pacific Solution International FZE, Sharjah UAE">
            </div>
        </div>
    </div>
</div>
<!-- International Presence End -->

@endsection
