
<section class="section-modern section-modern-light" id="blogs-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">Video Gallery</span>
            @php $videoTitleFound = false; @endphp
            @foreach ($titles as $data)
                @if (in_array($data->page, ['videos', 'video', 'video_gallery', 'video-gallery']))
                    <h2 class="section-title-modern">{{ $data->title }}</h2>
                    @php $videoTitleFound = true; @endphp
                @endif
            @endforeach
            @if (!$videoTitleFound)
                <h2 class="section-title-modern">Watch Our Latest Videos</h2>
            @endif
        </div>

        @if ($galleries != null && $galleries->count())
            <div class="testimonial-slider-two owl-carousel">
                @foreach ($galleries as $gallery)
                    <div class="" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="blog-card-modern">  
                            <div style="overflow: hidden; height: 250px;">
                                @php
                                    $link = $gallery->video_link;
                                    $isEmbed =
                                        \Illuminate\Support\Str::contains($link, '<iframe') ||
                                        \Illuminate\Support\Str::contains($link, '<embed');
                                    preg_match(
                                        '/(?:youtube\.com\/watch\?v=|youtube\.com\/embed\/|youtu\.be\/)([A-Za-z0-9_-]{11})/',
                                        $link,
                                        $m,
                                    );
                                    $ytId = $m[1] ?? null;
                                @endphp

                                @if ($isEmbed) <div class="video-responsive">{!! $link !!}</div>
                                @elseif ($ytId)
                                    <img src="https://img.youtube.com/vi/{{ $ytId }}/hqdefault.jpg" class="blog-img-modern" alt="{{ $gallery->title ?? 'Video' }}">
                                @else
                                    <div class="video-responsive">
                                        {!! $link !!}
                                    </div> @endif
                            </div>

                            <div class="blog-content-modern">
                                @php
                                    $timestamp = strtotime($gallery->created_at);
                                    $month = $timestamp ? date('M', $timestamp) : '';
                                @endphp
                                <div class="blog-meta-modern">
                                    <span><i
                                            class="ri-calendar-line"></i>{{ optional($gallery->created_at)->format('d') }}
                                        {{ $month }}</span>
                                    <span><i class="ri-user-line"></i>Admin</span>
                                </div>
                                <h3 class="blog-title-modern">
                                    {{ $gallery->title ?? 'Video' }}
                                </h3>
                                <p class="blog-excerpt-modern">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($gallery->short_details ?? ($gallery->description ?? '')), 150) }}
                                </p>
                                <a href="{{ route('video.details', ['id' => $gallery->id]) }}"
                                    class="blog-read-more-modern">
                                    Watch Video <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    

          <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="1200">
            <a href="{{ route('video.gallery.page') }}" class="blog-read-more-modern">
                All Videos <i class="flaticon-right-arrow"></i>
            </a>
        </div>

   

  
  

    <style>
        .video-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-responsive iframe,
        .video-responsive embed,
        .video-responsive object {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
                jQuery('.video-gallery-carousel').each(function() {
                    var $el = jQuery(this);
                    if (!$el.hasClass('owl-loaded')) {
                        $el.owlCarousel({
                            items: 3,
                            margin: 24,
                            loop: false,
                            nav: true,
                            dots: false,
                            navText: ['<span class="owl-nav-prev">‹</span>',
                                '<span class="owl-nav-next">›</span>'
                            ],
                            responsive: {
                                0: {
                                    items: 1
                                },
                                576: {
                                    items: 2
                                },
                                992: {
                                    items: 3
                                }
                            }
                        });
                    }
                });
            }
        });
    </script>
  
</section>
