<section class="section-modern section-modern-light" id="blogs-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">Our Blog</span>
            @foreach ($titles as $data)
                @if ($data->page == 'blogs')
                    <h2 class="section-title-modern">{{ $data->title }}</h2>
                @endif
            @endforeach
        </div>

        @if ($blogs != null)
            <div class="testimonial-slider-two owl-carousel">
                @foreach ($blogs as $blog)
                    <div class="" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="blog-card-modern">
                            <div style="overflow: hidden; height: 250px;">
                                <img src="{{ asset($blog->main_image) }}" class="blog-img-modern"
                                    alt="{{ $blog->title }}">
                            </div>
                            <div class="blog-content-modern">
                                @php
                                    $timestamp = strtotime($blog->created_at);
                                    $month = date('M', $timestamp);
                                @endphp
                                <div class="blog-meta-modern">
                                    <span><i class="ri-calendar-line"></i>{{ $blog->created_at->format('d') }}
                                        {{ $month }}</span>
                                    <span><i class="ri-user-line"></i>Admin</span>
                                </div>
                                <h3 class="blog-title-modern">
                                    <a href="{{ route('blogs.details', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h3>
                                <p class="blog-excerpt-modern">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->short_details), 150) }}</p>
                                <a href="{{ route('blogs.details', ['id' => $blog->id]) }}"
                                    class="blog-read-more-modern">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
           </div>
        @endif
    </div>


            <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="1200">
                <a href="{{ route('blogs.page') }}" class="blog-read-more-modern">
                    All Blogs <i class="flaticon-right-arrow"></i>
                </a>
            </div>
   
     
</section> 
