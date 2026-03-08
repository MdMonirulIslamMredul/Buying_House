<section class="section-modern section-modern-light" id="team-section">
    <div class="container">
        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-subtitle-modern">Our Experts</span>
            @foreach ($titles as $data)
                @if ($data->page == 'doctors')
                    <h2 class="section-title-modern">{{ $data->title }}</h2>
                @endif
            @endforeach
        </div>

     @if ($teams != null)
        <div class="testimonial-slider-two owl-carousel">
                @foreach ($teams as $team)
                    <div class="team-card-modern" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <a href="/team-detail/{{ $team->id }}" style="text-decoration: none; color: inherit;">
                            <div style="overflow: hidden; border-radius: 16px 16px 0 0; height: 350px;">
                                <img src="{{ asset($team->image) }}" class="team-img-modern" alt="{{ $team->name }}">
                            </div>
                            <div class="team-info-modern">
                                <h3 class="team-name-modern">{{ $team->name }}</h3>
                                <p class="team-position-modern">{{ $team->designation }}</p>
                                <div class="team-social-modern">
                                    <a href="mailto:{{ $team->email }}" onclick="event.stopPropagation();"
                                        title="Email">
                                        <i class="ri-mail-send-line"></i>
                                    </a>
                                    <a target="_blank" href="{{ $links->facebook }}" onclick="event.stopPropagation();"
                                        title="Facebook">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a target="_blank" href="{{ $links->linkedIn }}" onclick="event.stopPropagation();"
                                        title="LinkedIn">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                    <a target="_blank" href="{{ $links->instagram }}"
                                        onclick="event.stopPropagation();" title="Instagram">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            
        </div>

         <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="1200">
            <a href="{{ route('team.page') }}" class="blog-read-more-modern">
                All Team Members <i class="flaticon-right-arrow"></i>
            </a>
        </div>
    @endif
    </div>
</section>
