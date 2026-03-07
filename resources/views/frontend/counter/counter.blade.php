<section class="section-modern section-modern-dark" id="stats-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern" style="color: #36d1dc;">Our Achievements</span>
            <h2 class="section-title-modern" style="color: white;">Numbers That Speak</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="stat-card-modern">
                    <span class="counter-icon" style="font-size: 3rem; margin-bottom: 1rem; display: block;">
                        <i class="flaticon-doctor"></i>
                    </span>
                    <div class="stat-number-modern">
                        <span class="odometer" data-count="{{ $counter->doctors ?? null }}"></span>
                        <span>+</span>
                    </div>
                    <div class="stat-label-modern">Expert Doctors</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="stat-card-modern">
                    <span class="counter-icon" style="font-size: 3rem; margin-bottom: 1rem; display: block;">
                        <i class="flaticon-admision-form"></i>
                    </span>
                    <div class="stat-number-modern">
                        <span class="odometer" data-count="{{ $counter->services ?? null }}"></span>
                        <span>+</span>
                    </div>
                    <div class="stat-label-modern">Quality Services</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <div class="stat-card-modern">
                    <span class="counter-icon" style="font-size: 3rem; margin-bottom: 1rem; display: block;">
                        <i class="flaticon-medical-operation"></i>
                    </span>
                    <div class="stat-number-modern">
                        <span class="odometer" data-count="{{ $counter->clients ?? null }}"></span>
                        <span>+</span>
                    </div>
                    <div class="stat-label-modern">Happy Clients</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <div class="stat-card-modern">
                    <span class="counter-icon" style="font-size: 3rem; margin-bottom: 1rem; display: block;">
                        <i class="flaticon-blood-test"></i>
                    </span>
                    <div class="stat-number-modern">
                        <span class="odometer" data-count="{{ $counter->awards ?? null }}"></span>
                        <span>+</span>
                    </div>
                    <div class="stat-label-modern">Awards Won</div>
                </div>
            </div>
        </div>
    </div>
</section>
