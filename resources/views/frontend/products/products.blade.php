<section class="section-modern section-modern-light" id="products-section">
    <div class="container">
        <div class="section-header-modern text-center" data-aos="fade-up" data-aos-duration="1200">
            <h2 class="products-section-title">
                <span class="products-title-line"></span>
                Our Products
                <span class="products-title-line"></span>
            </h2>
            @foreach ($titles as $data)
                @if ($data->page == 'products')
                    <p class="section-description-modern">{{ $data->title }}</p>
                @endif
            @endforeach
        </div>

        <style>
            .products-section-title {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 18px;
                font-size: 2rem;
                font-weight: 800;
                color: #1a1a1a;
                margin-bottom: 12px;
            }

            .products-title-line {
                display: inline-block;
                width: 60px;
                height: 3px;
                background: #8b0000;
                border-radius: 2px;
            }

            /* Products slider */
            .products-slider-wrapper {
                position: relative;
                margin-top: 30px;
                overflow: hidden;
                border-radius: 16px;
            }

            .products-slider {
                display: flex;
                gap: 24px;
                transition: transform .55s cubic-bezier(.22, .61, .36, 1);
                will-change: transform;
                padding: 6px 4px;
            }

            .products-slider .prod-slide {
                flex: 0 0 calc(33.333% - 16px);
                min-width: calc(33.333% - 16px);
            }

            .prod-card {
                position: relative;
                width: 100%;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.10);
            }

            .prod-card-img {
                width: 100%;
                padding-top: 120%;
                background-size: cover;
                background-position: center top;
                transition: transform .45s ease;
            }

            .prod-card:hover .prod-card-img {
                transform: scale(1.06);
            }

            .prod-card-label {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 60px 20px 18px 20px;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.60) 0%, transparent 100%);
                color: #fff;
                font-size: 1.15rem;
                font-weight: 600;
                letter-spacing: 0.02em;
            }

            .prod-slider-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 20;
                width: 44px;
                height: 44px;
                border-radius: 50%;
                background: rgba(0, 0, 0, 0.52);
                border: none;
                color: #fff;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
                transition: background .2s;
            }

            .prod-slider-nav:hover {
                background: rgba(139, 0, 0, 0.82);
            }

            .prod-slider-nav.prev {
                left: 10px;
            }

            .prod-slider-nav.next {
                right: 10px;
            }

            .prod-slider-dots {
                display: flex;
                gap: 10px;
                justify-content: center;
                margin-top: 22px;
            }

            .prod-slider-dots button {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: #dce3ea;
                border: none;
                cursor: pointer;
                transition: all .25s;
            }

            .prod-slider-dots button.active {
                background: #8b0000;
                transform: scale(1.15);
                box-shadow: 0 4px 12px rgba(139, 0, 0, 0.22);
            }

            .prod-cta-wrapper {
                text-align: center;
                margin-top: 20px;
            }

            .btn-prod-see {
                display: inline-block;
                padding: 10px 28px;
                border-radius: 999px;
                border: 1.5px solid #8b0000;
                color: #8b0000;
                background: #fff;
                text-decoration: none;
                font-weight: 600;
                transition: all .25s;
            }

            .btn-prod-see:hover {
                background: #8b0000;
                color: #fff;
            }

            @media (max-width: 991px) {
                .products-slider .prod-slide {
                    flex: 0 0 calc(50% - 12px);
                    min-width: calc(50% - 12px);
                }
            }

            @media (max-width: 575px) {
                .products-slider .prod-slide {
                    flex: 0 0 100%;
                    min-width: 100%;
                }

                .products-section-title {
                    font-size: 1.5rem;
                }

                .products-title-line {
                    width: 36px;
                }
            }
        </style>

        <div class="products-slider-wrapper" data-aos="fade-up" data-aos-duration="1200">
            <button class="prod-slider-nav prev" aria-label="Previous">&#10094;</button>
            <div class="products-slider" id="productsSlider">
                @foreach ($products as $product)
                    <div class="prod-slide" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="{{ $loop->index * 80 }}">
                        <a href="{{ route('product.details', $product->id) }}" class="text-decoration-none">
                            <div class="prod-card">
                                <div class="prod-card-img" style="background-image:url('{{ asset($product->image) }}')">
                                </div>
                                <div class="prod-card-label">{{ $product->name }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="prod-slider-nav next" aria-label="Next">&#10095;</button>
        </div>

        <div id="productsDots" class="prod-slider-dots" aria-hidden="false"></div>
        <div class="prod-cta-wrapper"><a href="{{ route('products.page') }}" class="btn-prod-see">View All Products</a>
        </div>

        <script>
            (function() {
                const slider = document.getElementById('productsSlider');
                if (!slider) return;
                const slides = Array.from(slider.querySelectorAll('.prod-slide'));
                const prevBtn = slider.parentElement.querySelector('.prod-slider-nav.prev');
                const nextBtn = slider.parentElement.querySelector('.prod-slider-nav.next');
                const dotsContainer = document.getElementById('productsDots');
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
                    const gap = parseInt(getComputedStyle(slider).gap) || 24;
                    const slideWidth = slides[0].getBoundingClientRect().width + gap;
                    const maxIndex = Math.max(0, slides.length - visible);
                    if (index > maxIndex) index = 0;
                    slider.style.transform = 'translateX(-' + (index * slideWidth) + 'px)';
                    const pages = Math.max(1, slides.length - visible + 1);
                    const active = Math.min(index, pages - 1);
                    Array.from(dotsContainer.children).forEach((b, i) => b.classList.toggle('active', i === active));
                }

                prevBtn.addEventListener('click', function() {
                    index = Math.max(0, index - 1);
                    update();
                    resetAutoplay();
                });
                nextBtn.addEventListener('click', function() {
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
                }, 2000);

                function resetAutoplay() {
                    clearInterval(autoplay);
                    autoplay = setInterval(() => {
                        const visible = calcVisible();
                        const maxIndex = Math.max(0, slides.length - visible);
                        index = (index >= maxIndex ? 0 : index + 1);
                        update();
                    }, 2000);
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
