@extends('frontend.master')
@section('title')
    Video Gallery
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{ asset($banner->image ?? '') }});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Video Gallery</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ route('front.page') }}">Home </a></li>
                        <li>Video Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Video Gallery Section Start -->
        <section class="video-gallery-wrap ptb-100">
            <div class="container">
                <div class="row">
                    @forelse($galleries as $gallery)
                        @if ($gallery->status == 1)
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <a href="{{ route('video.details', ['id' => $gallery->id]) }}" class="video-card-link"
                                    style="text-decoration: none; color: inherit;" role="article"
                                    aria-label="{{ $gallery->title ?? 'Video' }}">
                                    <div class="video-card-modern">
                                        <div class="video-card-image">
                                            @php $thumbUrl = $gallery->getThumbnailUrl(); @endphp
                                            @if ($thumbUrl)
                                                <img src="{{ $thumbUrl }}" alt="{{ $gallery->title ?? 'Video' }}"
                                                    class="img-fluid" loading="lazy" decoding="async"
                                                    onerror="this.replaceWith(document.createElement('div')).outerHTML='<div style=\'background:#f0f0f0;height:200px;display:flex;align-items:center;justify-content:center;color:#999;\'>No Thumbnail</div>'">
                                            @else
                                                <div class="placeholder-image"
                                                    style="background: #f0f0f0; height: 200px; display: flex; align-items: center; justify-content: center; color: #999;">
                                                    No Thumbnail</div>
                                            @endif
                                            <div class="video-overlay">
                                                <button class="play-btn" type="button">
                                                    <i class="fas fa-play"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="video-card-content">
                                            <h4 class="video-title">{{ $gallery->title ?? 'Video' }}</h4>
                                            <p class="video-description">{{ Str::limit($gallery->description ?? '', 100) }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @empty
                        <div class="col-12">
                            <p class="text-center">No videos available.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Video Gallery Section End -->

        <style>
            .video-gallery-wrap .container {
                max-width: 1200px;
            }

            .video-card-modern {
                background: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
                transition: transform 0.28s ease, box-shadow 0.28s ease;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .video-card-modern:hover {
                transform: translateY(-6px);
                box-shadow: 0 8px 28px rgba(12, 36, 75, 0.12);
            }

            .video-card-modern:focus-within,
            .video-card-link:focus {
                outline: 3px solid rgba(0, 123, 255, 0.14);
                outline-offset: 4px;
            }

            .video-card-image {
                position: relative;
                width: 100%;
                height: 200px;
                overflow: hidden;
                background: #f0f0f0;
            }

            .video-card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            .video-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.45) 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.28s ease;
            }

            .video-card-modern:hover .video-overlay {
                opacity: 1;
            }

            .play-btn {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background: white;
                border: none;
                color: #007bff;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: transform 0.18s ease;
            }

            .play-btn:hover {
                transform: scale(1.08);
            }

            .video-card-content {
                padding: 18px;
                flex: 1 1 auto;
            }

            .video-title {
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 8px 0;
                color: #111;
                line-height: 1.3;
            }

            .video-description {
                font-size: 14px;
                color: #666;
                margin: 0;
                line-height: 1.5;
            }

            .video-embed {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
            }

            .video-embed iframe,
            .video-embed embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            /* Responsive modern grid using CSS grid for consistent gaps */
            @media (min-width: 992px) {
                .video-gallery-wrap .row {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 24px;
                }

                .video-gallery-wrap .col-lg-4 {
                    width: 100%;
                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .video-gallery-wrap .row {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 18px;
                }
            }

            @media (max-width: 767px) {
                .video-gallery-wrap .row {
                    display: grid;
                    grid-template-columns: 1fr;
                    gap: 12px;
                }
            }
        </style>

        <script>
            // Allow spacebar to activate focused video links (accessibility)
            document.addEventListener('keydown', function(e) {
                if ((e.code === 'Space' || e.key === ' ') && document.activeElement && document.activeElement.classList
                    .contains('video-card-link')) {
                    e.preventDefault();
                    document.activeElement.click();
                }
            });
        </script>

    </div>
    <!-- Content wrapper end -->
@endsection
