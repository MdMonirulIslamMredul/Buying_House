@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-modern" style="background-image: url({{ asset($banner->image) }});">
            <h1>Blogs</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <span>Blogs</span>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog  Section Start -->
        <section class="section-modern section-modern-light">
            <div class="container">
                <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
                    <span class="section-subtitle-modern">Latest Updates</span>
                    <h2 class="section-title-modern">Insights & Stories</h2>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            <article class="blog-card-modern">
                                <div style="overflow: hidden;">
                                    <img src="{{ asset($blog->main_image) }}" class="blog-img-modern"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="blog-content-modern">
                                    <div class="blog-meta-modern">
                                        <span><i
                                                class="ri-calendar-line"></i>{{ $blog->created_at ? $blog->created_at->format('d M Y') : '' }}</span>
                                        <span><i class="ri-user-line"></i>Admin</span>
                                    </div>
                                    <h3 class="blog-title-modern">
                                        <a href="{{ route('blogs.details', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="blog-excerpt-modern">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($blog->short_details), 170) !!}
                                    </div>
                                    <a href="{{ route('blogs.details', ['id' => $blog->id]) }}"
                                        class="blog-read-more-modern">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                <div class="modern-pagination-wrap mt-5" data-aos="fade-up" data-aos-duration="1200">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
