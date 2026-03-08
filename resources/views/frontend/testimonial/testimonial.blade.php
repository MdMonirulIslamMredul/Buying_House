<section class="section-modern" id="testimonial-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">Client Success Stories</span>
            <h2 class="section-title-modern">What Our Clients Say</h2>
        </div>

        <div class="testimonial-slider-two owl-carousel">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-card-modern" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="{{ $loop->index * 100 }}">

                    <!-- Circular avatar overlapping top center -->
                    <div class="testimonial-avatar-circle"
                        @if ($testimonial->image) style="background-image: url('{{ asset($testimonial->image) }}');" @endif
                        aria-label="{{ $testimonial->name }}"></div>

                    <div class="testimonial-quote-modern">
                        <i class="flaticon-straight-quotes" aria-hidden="true"></i>
                        @php
                            $rawReview = $testimonial->review ?? '';
                            $plainReview = \Illuminate\Support\Str::limit(strip_tags($rawReview), 100);
                            $isLongReview = strlen(strip_tags($rawReview)) > 100;
                            $reviewId = 'testimonial-review-' . $loop->index;
                        @endphp

                        <p class="testimonial-review-excerpt" id="{{ $reviewId }}-excerpt">
                            {!! nl2br(e($plainReview)) !!}{!! $isLongReview ? '...' : '' !!}
                        </p>

                        @if ($isLongReview)
                            <div class="testimonial-full-review" id="{{ $reviewId }}" style="display:none;">
                                {!! $rawReview !!}
                            </div>
                            <button class="testimonial-readmore" aria-expanded="false"
                                data-target="{{ $reviewId }}">Read More</button>
                        @endif
                    </div>

                    <div class="testimonial-stars" aria-hidden="true">
                        @for ($i = 0; $i < $testimonial->star; $i++)
                            <i class="ri-star-fill"></i>
                        @endfor
                    </div>

                    <div class="testimonial-author-modern">
                        <div class="testimonial-author-info-modern">
                            <h5>{{ $testimonial->name }}</h5>
                            <p>{{ $testimonial->designation }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

         <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="1200">
        <a href="{{ route('testimonial.page') }}" class="blog-read-more-modern">
            All Testimonials <i class="flaticon-right-arrow"></i>
        </a>
        </div>
    </div>
</section>

<style>
    /* Testimonial design - centered card with overlapping circular avatar */
    #testimonial-section .testimonial-slider-two .testimonial-card-modern {
        position: relative;
        background: var(--white);
        border-radius: 12px;
        padding: 34px 26px 28px;
        box-shadow: 0 10px 30px rgba(2, 6, 23, 0.06);
        overflow: visible;
        min-height: 260px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    /* Circular avatar overlapping top center */
    .testimonial-avatar-circle {
        position: absolute;
        top: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 88px;
        height: 88px;
        border-radius: 50%;
        overflow: hidden;
        border: 6px solid var(--white);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        background-color: var(--white);
    }

    /* Use background-image to control focal point and prevent inconsistent cropping */
    .testimonial-avatar-circle {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    /* Quote icon & review */
    .testimonial-quote-modern {
        margin-top: 52px;
        /* spacing to account for avatar */
        position: relative;
        padding: 12px 18px 0;
        color: var(--text-secondary);
    }

    .testimonial-quote-modern i {
        font-size: 20px;
        color: #f59e0b;
        opacity: 0.12;
        position: absolute;
        top: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    .testimonial-quote-modern p {
        margin: 0 auto;
        font-size: 15px;
        line-height: 1.7;
        max-width: 320px;
        color: var(--text-secondary);
    }

    /* Stars */
    .testimonial-stars {
        margin: 14px 0 8px;
    }

    .testimonial-stars .ri-star-fill {
        color: #f59e0b;
        font-size: 16px;
        margin: 0 3px;
    }

    /* Author */
    .testimonial-author-modern {
        margin-top: 8px;
    }

    .testimonial-author-info-modern h5 {
        margin: 6px 0 2px;
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
    }

    .testimonial-author-info-modern p {
        margin: 0;
        font-size: 13px;
        color: var(--text-muted);
    }

    @media (max-width: 991px) {
        .testimonial-avatar-circle {
            width: 72px;
            height: 72px;
            top: -36px;
        }

        .testimonial-quote-modern p {
            max-width: 260px;
        }

        #testimonial-section .testimonial-slider-two .testimonial-card-modern {
            min-height: 220px;
            padding: 28px 18px 22px;
        }
    }

    /* Read more toggle styles */
    .testimonial-full-review {
        display: none;
    }

    .testimonial-readmore {
        display: inline-block;
        margin-top: 10px;
        background: transparent;
        border: none;
        color: #0cc0df;
        cursor: pointer;
        font-weight: 600;
        padding: 0;
    }

    .testimonial-readmore:focus {
        outline: 2px solid rgba(12, 192, 223, 0.16);
        border-radius: 4px;
        padding: 2px 6px;
    }
</style>

<script>
    document.addEventListener('click', function(e) {
        var btn = e.target.closest('.testimonial-readmore');
        if (!btn) return;
        e.preventDefault();
        var targetId = btn.getAttribute('data-target');
        if (!targetId) return;
        var full = document.getElementById(targetId);
        var excerpt = document.getElementById(targetId + '-excerpt');
        if (!full || !excerpt) return;
        var expanded = btn.getAttribute('aria-expanded') === 'true';
        if (!expanded) {
            full.style.display = 'block';
            excerpt.style.display = 'none';
            btn.textContent = 'Read Less';
            btn.setAttribute('aria-expanded', 'true');
        } else {
            full.style.display = 'none';
            excerpt.style.display = '';
            btn.textContent = 'Read More';
            btn.setAttribute('aria-expanded', 'false');
        }
    });
</script>
