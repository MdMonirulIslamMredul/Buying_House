<section class="section-modern section-modern-light" id="pricing-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">Our Packages</span>
            @foreach ($titles as $data)
                @if ($data->page == 'packages')
                    <h2 class="section-title-modern">{{ $data->title }}</h2>
                @endif
            @endforeach
        </div>

        <div class="testimonial-slider-two owl-carousel">
            @foreach ($packages as $package)
                <div class="" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="pricing-card-modern {{ $loop->iteration == 2 ? 'featured' : '' }}">
                        @if ($loop->iteration == 2)
                            <span class="pricing-badge-modern">Most Popular</span>
                        @endif

                        <h3 class="pricing-title-modern">{{ $package->name }}</h3>

                        <ul class="pricing-features-modern">
                            @if (json_decode($package->options) != null)
                                @foreach (json_decode($package->options) as $key => $option)
                                    @if ($option != null)
                                        <li><i class="ri-check-line"></i> {{ $option }}</li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>

                        <a href="{{ route('login') }}" class="btn-modern-primary"
                            style="width: 100%; text-align: center;">Get Started</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
