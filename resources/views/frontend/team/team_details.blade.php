@extends('frontend.master')
@section('title')
    Team Member Details
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{ asset($banner->image) }});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our Teams </h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ route('front.page') }}">Home</a></li>
                        <li>Teams </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="team-card style2">
                            <img src="{{ asset($team->image) }}" alt="Image">
                            <div class="team-info">
                                <a href="mailto:{{ $team->email }}" class="team-mail"><i class="ri-mail-send-line"></i></a>
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->designation }}</span><br>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="{{ $links->facebook }}">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ $links->youtube }}">
                                            <i class="ri-youtube-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ $links->instagram }}">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ $links->linkedIn }}">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!--<h3 class="mt-2">Member Detail</h3><br>-->
                                <div class="mt-3"></div>
                                {!! $team->description !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Team Section End -->

    </div>
    <!-- Content wrapper end -->
    {{--    <script src="https://cdn.tailwindcss.com"></script> --}}
@endsection
