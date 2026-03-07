<section class="section-modern section-modern-light" id="about-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">About Us</span>
            <h2 class="section-title-modern">{{ $about->title ?? null }}</h2>
        </div>

        <div class="row gx-5 align-items-center">
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="modern-card" style="padding: 3rem;">
                    <div class="content-description-modern" style="font-size: 1.05rem; line-height: 1.8;">
                        {!! $about->page_details ?? null !!}
                    </div>
                    {{-- <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details2 ?? null !!}
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details3 ?? null !!}
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details4 ?? null !!}
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
