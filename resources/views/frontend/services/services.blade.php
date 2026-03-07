<section class="section-modern" id="services-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">What We Offer</span>
            <h2 class="section-title-modern">Our Services</h2>
            @foreach ($titles as $data)
                @if ($data->page == 'services')
                    <p class="section-description-modern">{{ $data->title }}</p>
                @endif
            @endforeach
        </div>

        <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="modern-card" style="padding: 0; overflow: hidden;">
                        <div class="service-img-wrapper" style="overflow: hidden; height: 250px;">
                            <img src="{{ asset($service->main_image) }}"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                alt="{{ $service->service_title }}" onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <div style="padding: 2rem;">
                            <h3 class="modern-card-title">
                                <a href="{{ route('services.details', ['id' => $service->id]) }}"
                                    style="text-decoration: none; color: inherit; transition: color 0.3s;"
                                    onmouseover="this.style.color='#36d1dc'"
                                    onmouseout="this.style.color='inherit'">{{ $service->service_title }}</a>
                            </h3>
                            <p class="modern-card-text">{!! Str::limit($service->service_details_small, 180) !!}</p>
                            <a href="{{ route('services.details', ['id' => $service->id]) }}" class="btn-modern-outline"
                                style="display: inline-block; margin-top: 1rem;">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
