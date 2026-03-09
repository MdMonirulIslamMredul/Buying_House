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

        <style>
            /* Services slider - modern card style */
            .services-slider-wrapper {
                position: relative;
                margin-top: 30px;
                overflow: visible;
                padding: 8px 0
            }

            .services-slider {
                display: flex;
                gap: 30px;
                transition: transform .55s cubic-bezier(.22, .61, .36, 1);
                will-change: transform;
                padding: 6px 8px
            }

            .services-slider .slide {
                flex: 0 0 33.333%;
                min-width: 33.333%;
                display: flex;
                align-items: stretch
            }

            .slide-card {
                width: 100%;
                border-radius: 14px;
                overflow: hidden;
                background: #fff;
                box-shadow: 0 10px 30px rgba(12, 36, 75, 0.06);
                display: flex;
                flex-direction: column
            }

            .slide-bg {
                width: 100%;
                padding-top: 68%;
                background-size: cover;
                background-position: center;
                transition: transform .45s ease
            }

            .slide-card:hover .slide-bg {
                transform: scale(1.06)
            }

            .slide-body {
                padding: 22px;
                text-align: center
            }

            .slide-title {
                font-size: 1.35rem;
                font-weight: 700;
                margin: 6px 0 0;
                color: #16324a
            }

            .slide-sub {
                font-size: 0.95rem;
                color: #6b7682;
                margin: 8px 0 0
            }

            .slider-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 20;
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(0, 0, 0, 0.55);
                border: none;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15)
            }

            .slider-nav.prev {
                left: 6px
            }

            .slider-nav.next {
                right: 6px
            }

            .slider-dots {
                display: flex;
                gap: 10px;
                justify-content: center;
                margin-top: 22px
            }

            .slider-dots button {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: #dce7ef;
                border: none;
                cursor: pointer;
                transition: all .25s
            }

            .slider-dots button.active {
                background: #2b8fc2;
                box-shadow: 0 6px 16px rgba(43, 143, 194, 0.18);
                transform: scale(1.05)
            }

            .cta-wrapper {
                text-align: center;
                margin-top: 18px
            }

            .btn-see {
                display: inline-block;
                padding: 10px 26px;
                border-radius: 999px;
                border: 1px solid #2b8fc2;
                color: #2b8fc2;
                background: #fff;
                text-decoration: none;
                font-weight: 600
            }

            @media(max-width:991px) {
                .services-slider .slide {
                    flex: 0 0 50%;
                    min-width: 50%
                }
            }

            @media(max-width:575px) {
                .services-slider .slide {
                    flex: 0 0 100%;
                    min-width: 100%
                }

                .slider-nav.prev {
                    left: 6px
                }

                .slider-nav.next {
                    right: 6px
                }
            }
        </style>

        <div class="services-slider-wrapper" data-aos="fade-up" data-aos-duration="1200">
            <button class="slider-nav prev" aria-label="Previous">&#10094;</button>
            <div class="services-slider" id="servicesSlider">
                @foreach ($services as $service)
                    <div class="slide" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <a href="{{ route('services.details', ['id' => $service->id]) }}"
                            style="display:block;height:100%;color:inherit;text-decoration:none">
                            <div class="slide-card">
                                <div class="slide-bg"
                                    style="background-image:url('{{ asset($service->main_image ?? 'frontend/assets/img/about/about-img-1.jpg') }}')">
                                </div>
                                <div class="slide-body">
                                    <h3 class="slide-title">{{ $service->service_title }}</h3>
                                    <p class="slide-sub">{!! Str::limit($service->service_details_small, 110) !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="slider-nav next" aria-label="Next">&#10095;</button>
        </div>

        <div id="servicesDots" class="slider-dots" aria-hidden="false"></div>
        <div class="cta-wrapper"><a href="{{ url('/all-services') }}" class="btn-see">See All Services</a></div>

        <script>
            (function() {
                const slider = document.getElementById('servicesSlider');
                if (!slider) return;
                const slides = Array.from(slider.querySelectorAll('.slide'));
                const prev = slider.parentElement.querySelector('.slider-nav.prev');
                const next = slider.parentElement.querySelector('.slider-nav.next');
                const dotsContainer = document.getElementById('servicesDots');

                let index = 0;

                function calcVisible() {
                    const w = window.innerWidth;
                    if (w < 576) return 1;
                    if (w < 992) return 2;
                    return 3;
                }

                function buildDots(visible) {
                    const pages = Math.max(1, slides.length - visible + 1);
                    dotsContainer.innerHTML = '';
                    for (let i = 0; i < pages; i++) {
                        const btn = document.createElement('button');
                        btn.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                        btn.addEventListener('click', () => {
                            index = i;
                            update();
                            resetAutoplay();
                        });
                        dotsContainer.appendChild(btn);
                    }
                }

                function update() {
                    const visible = calcVisible();
                    const gap = parseInt(getComputedStyle(slider).gap) || 30;
                    const slideRect = slides[0].getBoundingClientRect();
                    const slideWidth = slideRect.width + gap;
                    const maxIndex = Math.max(0, slides.length - visible);
                    if (index > maxIndex) index = 0; // wrap
                    slider.style.transform = 'translateX(-' + (index * slideWidth) + 'px)';

                    // update dots
                    const pages = Math.max(1, slides.length - visible + 1);
                    const active = Math.min(index, pages - 1);
                    const dotButtons = Array.from(dotsContainer.children);
                    dotButtons.forEach((b, i) => b.classList.toggle('active', i === active));
                }

                prev.addEventListener('click', function() {
                    index = Math.max(0, index - 1);
                    update();
                    resetAutoplay();
                });
                next.addEventListener('click', function() {
                    const visible = calcVisible();
                    const maxIndex = Math.max(0, slides.length - visible);
                    index = (index >= maxIndex ? 0 : index + 1);
                    update();
                    resetAutoplay();
                });

                buildDots(calcVisible());
                let autoplay = setInterval(() => {
                    const visible = calcVisible();
                    const maxIndex = Math.max(0, slides.length - visible);
                    index = (index >= maxIndex ? 0 : index + 1);
                    update();
                }, 4500);

                function resetAutoplay() {
                    clearInterval(autoplay);
                    autoplay = setInterval(() => {
                        const visible = calcVisible();
                        const maxIndex = Math.max(0, slides.length - visible);
                        index = (index >= maxIndex ? 0 : index + 1);
                        update();
                    }, 4500);
                }

                slider.addEventListener('mouseenter', () => clearInterval(autoplay));
                slider.addEventListener('mouseleave', () => resetAutoplay());
                window.addEventListener('resize', () => {
                    buildDots(calcVisible());
                    update();
                });
                update();
            })();
        </script>
    </div>
</section>
