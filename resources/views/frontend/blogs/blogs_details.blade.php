@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-modern" style="background-image: url({{ asset($blog->banner_image) }});">
            <h1>Blog Details</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <a href="{{ route('blogs.page') }}">Blogs</a>
                <span>/</span>
                <span>Details</span>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <section class="section-modern section-modern-light">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-xxl-10 col-xl-11 col-lg-12">
                        <article class="blog-details-modern" data-aos="fade-up" data-aos-duration="1200">
                            <div class="blog-details-header-modern">
                                <div class="blog-meta-modern mb-2">
                                    <span><i
                                            class="ri-calendar-line"></i>{{ $blog->created_at ? $blog->created_at->format('d M Y') : '' }}</span>
                                    <span><i class="ri-user-line"></i>Admin</span>
                                </div>
                                <h2 class="blog-details-title-modern">{{ $blog->title }}</h2>
                            </div>

                            @if ($blog->main_image)
                                <div class="blog-details-main-image-modern mb-4">
                                    <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}">
                                </div>
                            @endif

                            @if ($blog->short_details)
                                <div class="blog-details-excerpt-modern mb-4">
                                    {!! $blog->short_details !!}
                                </div>
                            @endif

                            <div class="blog-details-content-modern">
                                {!! $blog->details1 !!}

                                @if ($blog->details_image1 || $blog->details_image2)
                                    <div class="row g-4 my-2">
                                        @if ($blog->details_image1)
                                            <div class="col-md-6">
                                                <div class="blog-details-sub-image-modern">
                                                    <img src="{{ asset($blog->details_image1) }}"
                                                        alt="{{ $blog->title }} image 1">
                                                </div>
                                            </div>
                                        @endif
                                        @if ($blog->details_image2)
                                            <div class="col-md-6">
                                                <div class="blog-details-sub-image-modern">
                                                    <img src="{{ asset($blog->details_image2) }}"
                                                        alt="{{ $blog->title }} image 2">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif

                                {!! $blog->details2 !!}
                            </div>

                            <div class="mt-5 text-center">
                                <a href="{{ route('blogs.page') }}" class="blog-read-more-modern">
                                    <i class="flaticon-left-arrow-1"></i> Back to Blogs
                                </a>
                            </div>
                        </article>
                    </div>
                </div>

                @if (isset($relatedBlogs) && $relatedBlogs->count() > 0)
                    <div class="mt-5 pt-4" data-aos="fade-up" data-aos-duration="1200">
                        <div class="section-header-modern text-center mb-4">
                            <span class="section-subtitle-modern">More Articles</span>
                            <h2 class="section-title-modern">Related Blogs</h2>
                        </div>

                        <div class="row g-4">
                            @foreach ($relatedBlogs as $relatedBlog)
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="{{ $loop->index * 100 }}">
                                    <article class="blog-card-modern">
                                        <div style="overflow: hidden;">
                                            <img src="{{ asset($relatedBlog->main_image) }}" class="blog-img-modern"
                                                alt="{{ $relatedBlog->title }}">
                                        </div>
                                        <div class="blog-content-modern">
                                            <div class="blog-meta-modern">
                                                <span><i
                                                        class="ri-calendar-line"></i>{{ $relatedBlog->created_at ? $relatedBlog->created_at->format('d M Y') : '' }}</span>
                                            </div>
                                            <h3 class="blog-title-modern">
                                                <a
                                                    href="{{ route('blogs.details', ['id' => $relatedBlog->id]) }}">{{ $relatedBlog->title }}</a>
                                            </h3>
                                            <div class="blog-excerpt-modern">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($relatedBlog->short_details), 120) !!}
                                            </div>
                                            <a href="{{ route('blogs.details', ['id' => $relatedBlog->id]) }}"
                                                class="blog-read-more-modern">
                                                Read More <i class="flaticon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- Blog Details Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
