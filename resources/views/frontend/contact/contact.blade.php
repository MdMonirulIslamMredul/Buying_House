@extends('frontend.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-modern" style="background-image: url({{ asset($banner->image) }});">
            <h1>Contact Us</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <span>Contact Us</span>
            </div>
        </div>
        <!-- Breadcrumb End -->

        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"
                style="border-radius: 10px; border-left: 4px solid #28a745;">
                <i class="fa fa-check-circle"></i> <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                style="border-radius: 10px; border-left: 4px solid #dc3545;">
                <i class="fa fa-exclamation-triangle"></i> <strong>Oops!</strong> Please fix the
                following errors:
                <ul style="margin-top: 10px; margin-bottom: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Contact Us section Start -->
        <section class="section-modern">
            <div class="container">
                <div class="row g-4 mb-5">
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="feature-box-modern" style="padding: 3rem 2rem;">
                            <div class="feature-icon-modern" style="margin: 0 auto 1.5rem;">
                                <i class="flaticon-map"></i>
                            </div>
                            <h4 style="color: #0a0f1e; margin-bottom: 1rem;">Visit Us</h4>
                            <p style="color: #666; margin: 0;">{{ $links->address }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="100">
                        <div class="feature-box-modern" style="padding: 3rem 2rem;">
                            <div class="feature-icon-modern" style="margin: 0 auto 1.5rem;">
                                <i class="flaticon-email-2"></i>
                            </div>
                            <h4 style="color: #0a0f1e; margin-bottom: 1rem;">Email Us</h4>
                            <a href="mailto:{{ $links->email }}"
                                style="color: #36d1dc; text-decoration: none; font-weight: 600;">{{ $links->email }}</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="feature-box-modern" style="padding: 3rem 2rem;">
                            <div class="feature-icon-modern" style="margin: 0 auto 1.5rem;">
                                <i class="flaticon-call"></i>
                            </div>
                            <h4 style="color: #0a0f1e; margin-bottom: 1rem;">Call Us</h4>
                            <a href="tel:{{ $links->number }}"
                                style="color: #36d1dc; text-decoration: none; font-weight: 600;">{{ $links->number }}</a>
                        </div>
                    </div>
                </div>

                <div class="row gx-5">
                    <div class="col-xl-8 col-lg-7 col-12" data-aos="fade-right" data-aos-duration="1200">
                        <div class="form-modern">
                            <h3 style="margin-bottom: 2rem;">Send Us A Message</h3>



                            <form class="form-wrap" method="POST" action="{{ route('contact') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <label class="form-label-modern">Name *</label>
                                            <input type="text" name="name" class="form-control-modern"
                                                value="{{ old('name') }}" placeholder="Your Name" id="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <label class="form-label-modern">Email *</label>
                                            <input type="email" name="email" class="form-control-modern" id="email"
                                                value="{{ old('email') }}" required placeholder="your@email.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <label class="form-label-modern">Phone Number *</label>
                                            <input type="text" name="number" class="form-control-modern" id="phone"
                                                value="{{ old('number') }}" required placeholder="+8801712345678">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <label class="form-label-modern">Subject *</label>
                                            <input type="text" name="subject" class="form-control-modern"
                                                value="{{ old('subject') }}" placeholder="Message Subject"
                                                id="msg_subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group-modern">
                                            <label class="form-label-modern">Message *</label>
                                            <textarea name="message" id="message" class="form-control-modern" placeholder="Write your message here..."
                                                required>{{ old('message') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn style1 mt-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-left" data-aos-duration="1200">
                        <div class="map-modern">
                            <h4 class="map-modern-title">Our Location</h4>
                            <div class="comp-map map-modern-frame">
                                {!! $links->map_link !!}
                            </div>
                            @if ($links && $links->address)
                                <div class="mt-3 text-center">
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($links->address) }}"
                                        target="_blank" class="btn btn-outline-primary btn-sm">
                                        <i class="flaticon-map"></i> Get Directions
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

@section('scripts')
    <script>
        // Auto-hide success message after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.transition = 'opacity 0.5s ease';
                    successAlert.style.opacity = '0';
                    setTimeout(function() {
                        successAlert.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });
    </script>
@endsection
