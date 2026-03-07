@extends('frontend.master')
@section('title')
    Services
@endsection
@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-modern" style="background-image: url({{ asset($banner->image ?? null) }});">
            <h1>Our Services</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <span>Services</span>
            </div>
        </div>

        <section class="section-modern section-modern-light">
            <div class="container">
                <div class="row gx-5 gy-4 align-items-end">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1200">
                        <span class="section-subtitle-modern">Available services</span>
                        <h2 class="section-title-modern">Solutions that keep your business moving</h2>
                        <p class="section-description-modern">Each offering in this catalog aligns with our proven delivery
                            framework: strategic planning, disciplined execution, and transparent reporting. Pick the
                            services that match your goals and we will layer in the right expertise.</p>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                        <div class="stat-card-modern">
                            <p class="stat-label-modern">Live services</p>
                            <h3 class="stat-number-modern">{{ $services->total() }}</h3>
                            <p class="stat-subtext-modern">customized for clients</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-4">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="{{ $loop->index * 90 }}">
                            <article class="modern-card service-card-modern">
                                <div class="service-card-image">
                                    <img src="{{ asset($service->main_image) }}" alt="{{ $service->service_title }}">
                                </div>
                                <div class="service-card-body">

                                    <h3 class="modern-card-title"><a
                                            href="{{ route('services.details', ['id' => $service->id]) }}">{{ $service->service_title }}</a>
                                    </h3>
                                    <p class="modern-card-text">{!! Str::limit($service->service_details_small, 120) !!}</p>
                                </div>
                                <div class="service-card-footer">
                                    <a href="{{ route('services.details', ['id' => $service->id]) }}"
                                        class="btn-modern-outline">View details</a>

                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                <div class="mt-5 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                    {!! $services->links() !!}
                </div>
            </div>
        </section>

        <section class="section-modern section-modern-dark py-modern">
            <div class="container text-center">
                <h2 class="section-title-modern text-white">Ready to engage a service team?</h2>
                <p class="section-description-modern text-white">Share your project brief and we will match you with the
                    right team, timeline, and deliverables.</p>
                <a href="{{ route('contacts') }}" class="btn-modern-white">Request a consultation</a>
            </div>
        </section>
    </div>
@endsection
