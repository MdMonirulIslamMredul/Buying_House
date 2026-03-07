@extends('frontend.master')
@section('title')
    Team
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{ asset($banner->image) }});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our Team</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ route('front.page') }}">Home</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
                    <span class="section-subtitle-modern">Our Team</span>
                </div>

                <style>
                    .team-grid {
                        gap: 1.5rem;
                    }

                    .team-card-improved {
                        position: relative;
                        overflow: hidden;
                        border-radius: .75rem;
                        box-shadow: 0 6px 20px rgba(0, 0, 0, .06);
                        transition: transform .35s ease, box-shadow .35s ease;
                        background: #fff;
                    }

                    .team-card-improved img {
                        width: 100%;
                        height: 320px;
                        object-fit: cover;
                        display: block;
                        -webkit-transition: transform .35s ease;
                        transition: transform .35s ease;
                    }

                    .team-card-improved .team-mail {
                        position: absolute;
                        top: 12px;
                        right: 12px;
                        background: #fff;
                        color: #111;
                        padding: .5rem;
                        border-radius: 50%;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
                        z-index: 5;
                        text-decoration: none;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    /* stronger, readable overlay with hover reveal */
                    .team-card-improved .team-overlay {
                        position: absolute;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        padding: 1rem 1.25rem;
                        background: linear-gradient(180deg, rgba(0, 0, 0, 0.78) 0%, rgba(0, 0, 0, 0.6) 30%, rgba(0, 0, 0, 0.35) 60%, rgba(0, 0, 0, 0.08) 100%);
                        color: #fff;
                        transition: transform .35s ease, opacity .35s ease;
                        min-height: 110px;
                        display: flex;
                        flex-direction: column;
                        justify-content: flex-end;
                        transform: translateY(36%);
                        -webkit-backdrop-filter: blur(2px);
                        backdrop-filter: blur(2px);
                    }

                    .team-card-improved:hover .team-overlay {
                        transform: translateY(0%);
                    }

                    .team-card-improved h3 {
                        margin: 0;
                        font-size: 1.125rem;
                        font-weight: 700;
                        color: #fff;
                        text-shadow: 0 3px 10px rgba(0, 0, 0, .6);
                        letter-spacing: .2px;
                    }

                    .team-card-improved .designation {
                        font-size: .95rem;
                        opacity: .95;
                        margin-top: .2rem;
                        color: rgba(255, 255, 255, 0.95);
                        text-shadow: 0 2px 6px rgba(0, 0, 0, .55);
                    }

                    .team-card-improved .socials a {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 36px;
                        height: 36px;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.12);
                        color: #fff;
                        margin-right: .4rem;
                        text-decoration: none;
                        transition: background .2s, transform .15s;
                    }

                    .team-card-improved .socials a:hover {
                        background: rgba(255, 255, 255, 0.22);
                        transform: translateY(-3px);
                    }

                    .team-card-improved:hover {
                        transform: translateY(-8px);
                        box-shadow: 0 18px 40px rgba(0, 0, 0, .12);

                    }

                    .team-card-improved .team-overlay .btn {
                        padding: .45rem .85rem;
                        font-size: .9rem;
                        background: #53707e;
                        color: #111;
                        font-weight: 600;
                        border-radius: .35rem;
                        border: none;
                        box-shadow: 0 6px 18px rgba(0, 0, 0, .12);
                        opacity: .98;
                    }
                </style>

                <div class="row team-grid justify-content-center">
                    @foreach ($teams as $team)
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="team-card-improved">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->name }}">
                                <a href="mailto:{{ $team->email }}" class="team-mail" title="Email {{ $team->name }}">
                                    <i class="ri-mail-send-line"></i>
                                </a>
                                <div class="team-overlay d-flex flex-column align-items-start">
                                    <h3>{{ $team->name }}</h3>
                                    <div class="designation">{{ $team->designation }}</div>
                                    <div class="socials mt-2">
                                        @if (!empty($links->facebook))
                                            <a target="_blank" rel="noopener" href="{{ $links->facebook }}"
                                                aria-label="facebook"><i class="ri-facebook-fill"></i></a>
                                        @endif
                                        @if (!empty($links->youtube))
                                            <a target="_blank" rel="noopener" href="{{ $links->youtube }}"
                                                aria-label="youtube"><i class="ri-youtube-fill"></i></a>
                                        @endif
                                        @if (!empty($links->instagram))
                                            <a target="_blank" rel="noopener" href="{{ $links->instagram }}"
                                                aria-label="instagram"><i class="ri-instagram-line"></i></a>
                                        @endif
                                        @if (!empty($links->linkedIn))
                                            <a target="_blank" rel="noopener" href="{{ $links->linkedIn }}"
                                                aria-label="linkedin"><i class="ri-linkedin-fill"></i></a>
                                        @endif
                                    </div>
                                    <a href="/team-detail/{{ $team->id }}" class="btn btn-sm btn-light mt-3">View
                                        Profile</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection
