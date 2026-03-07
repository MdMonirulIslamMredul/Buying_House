@extends('admin.master')
@section('title')
    Service Edit
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('update.services') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $service->id }}" name="id">

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Service Title</label>
                            <input type="text" class="form-control" rows="5" name="service_title"
                                id="service_title" value="{{ $service->service_title }}" placeholder="Service Title">
                        </div>
                        <div class="form-group">
                            <label>Hero / Long Title</label>
                            <textarea class="form-control" name="hero_title" rows="3" placeholder="Long hero title (displayed prominently)">{!! $service->hero_title !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Service Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>
                        <img src="{{ asset($service->main_image) }}" class="mb-2" height="100" width="100"
                            alt="">

                        <div class="form-group">
                            <label>banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>
                        <img src="{{ asset($service->banner_image) }}" class="mb-2" height="100" width="100"
                            alt="">


                        <div class="form-group">
                            <label>Service Short Description</label>
                            <textarea class="form-control" rows="4" name="service_details_small" maxlength="400"
                                placeholder="Summarize the service in 40 words or less">{{ $service->service_details_small }}</textarea>
                            <small class="form-text text-muted">Keep it under 40 words so it reads cleanly on listings and
                                highlights.</small>
                        </div>



                        <h3>Details page information</h3>

                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                        </div>
                        <img src="{{ asset($service->details_image1) }}" class="mb-2" height="100" width="100"
                            alt="">

                        <div class="form-group">
                            <label>Service Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="service_details1">{!! $service->service_details1 !!}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                        </div>
                        <img src="{{ asset($service->details_image2) }}" class="mb-2" height="100" width="100"
                            alt="">

                        <div class="form-group">
                            <label>Service Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="service_details2">{!! $service->service_details2 !!}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Details Image three</label>
                            <input type="file" name="details_image3" class="form-control">
                        </div>
                        <img src="{{ asset($service->details_image3) }}" class="mb-2" height="100" width="100"
                            alt="">




                        <div class="form-group">
                            <label>Service Long Details three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="service_details3">{!! $service->service_details3 !!}</textarea>
                        </div>

                        <h3>Service FAQs</h3>
                        <div id="faqs-wrapper">
                            @php $fIndex = 0; @endphp
                            @foreach ($service->faqs ?? [] as $faq)
                                <div class="faq-item mb-2" data-existing-id="{{ $faq->id }}">
                                    <div class="input-group mb-1">
                                        <input type="text" name="faqs_existing[{{ $faq->id }}][question]"
                                            class="form-control" value="{{ $faq->question }}"
                                            placeholder="FAQ question">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger remove-existing-faq" type="button"
                                                data-id="{{ $faq->id }}">Remove</button>
                                        </div>
                                    </div>
                                    <textarea name="faqs_existing[{{ $faq->id }}][answer]" class="form-control" placeholder="FAQ answer"
                                        rows="3">{{ $faq->answer }}</textarea>
                                </div>
                                @php $fIndex++; @endphp
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <button id="add-faq" type="button" class="btn btn-sm btn-primary">Add FAQ</button>
                        </div>

                        <h3>Service Videos (YouTube)</h3>
                        <div id="videos-wrapper">
                            @php $vIndex = 0; @endphp
                            @foreach ($service->videos ?? [] as $video)
                                <div class="video-item mb-2" data-existing-id="{{ $video->id }}">
                                    <div class="input-group mb-1">
                                        <input type="text" name="videos_existing[{{ $video->id }}][title]"
                                            class="form-control" value="{{ $video->title }}"
                                            placeholder="Video title (optional)">
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" name="videos_existing[{{ $video->id }}][youtube_url]"
                                            class="form-control" value="{{ $video->youtube_url }}"
                                            placeholder="YouTube URL or video ID">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger remove-existing-video" type="button"
                                                data-id="{{ $video->id }}">Remove</button>
                                        </div>
                                    </div>
                                </div>
                                @php $vIndex++; @endphp
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <button id="add-video" type="button" class="btn btn-sm btn-primary">Add Video</button>
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="service_home">
                                <option value="1" @if ($service->service_home == 1) selected @endif>Yes</option>
                                <option value="0" @if ($service->service_home == 0) selected @endif>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($service->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($service->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        (function() {
            // Determine starting indexes based on existing items
            let faqIndex = {{ $fIndex ?? 0 }};
            let videoIndex = {{ $vIndex ?? 0 }};

            // Add new FAQ
            document.getElementById('add-faq').addEventListener('click', function() {
                const wrapper = document.getElementById('faqs-wrapper');
                const item = document.createElement('div');
                item.className = 'faq-item mb-2';
                item.innerHTML =
                    `\
                    <div class="input-group mb-1">\
                        <input type="text" name="faqs_new[${faqIndex}][question]" class="form-control" placeholder="FAQ question">\
                        <div class="input-group-append">\
                            <button class="btn btn-danger remove-faq" type="button">Remove</button>\
                        </div>\
                    </div>\
                    <textarea name="faqs_new[${faqIndex}][answer]" class="form-control" placeholder="FAQ answer" rows="3"></textarea>`;
                wrapper.appendChild(item);
                faqIndex++;
            });

            // Remove newly added FAQ
            document.getElementById('faqs-wrapper').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-faq')) {
                    e.target.closest('.faq-item').remove();
                }
            });

            // Remove existing FAQ (mark for delete)
            document.getElementById('faqs-wrapper').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-existing-faq')) {
                    const id = e.target.getAttribute('data-id');
                    // append hidden input to form to signal deletion
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'faqs_delete[]';
                    input.value = id;
                    e.target.closest('form').appendChild(input);
                    e.target.closest('.faq-item').remove();
                }
            });

            // Videos
            document.getElementById('add-video').addEventListener('click', function() {
                const wrapper = document.getElementById('videos-wrapper');
                const item = document.createElement('div');
                item.className = 'video-item mb-2';
                item.innerHTML = `\
                    <div class="input-group mb-1">\
                        <input type="text" name="videos_new[${videoIndex}][title]" class="form-control" placeholder="Video title (optional)">\
                    </div>\
                    <div class="input-group mb-1">\
                        <input type="text" name="videos_new[${videoIndex}][youtube_url]" class="form-control" placeholder="YouTube URL or video ID">\
                        <div class="input-group-append">\
                            <button class="btn btn-danger remove-video" type="button">Remove</button>\
                        </div>\
                    </div>`;
                wrapper.appendChild(item);
                videoIndex++;
            });

            document.getElementById('videos-wrapper').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-video')) {
                    e.target.closest('.video-item').remove();
                }
                if (e.target && e.target.classList.contains('remove-existing-video')) {
                    const id = e.target.getAttribute('data-id');
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'videos_delete[]';
                    input.value = id;
                    e.target.closest('form').appendChild(input);
                    e.target.closest('.video-item').remove();
                }
            });

        })();
    </script>
@endsection
