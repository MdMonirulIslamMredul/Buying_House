@extends('admin.master')
@section('title')
    Service
@endsection

@section('scripts')
    <script>
        (function() {
            let faqIndex = 1;
            let videoIndex = 1;

            document.getElementById('add-faq').addEventListener('click', function() {
                const wrapper = document.getElementById('faqs-wrapper');
                const item = document.createElement('div');
                item.className = 'faq-item mb-2';
                item.innerHTML =
                    `\
                    <div class="input-group mb-1">\
                        <input type="text" name="faqs[${faqIndex}][question]" class="form-control" placeholder="FAQ question">\
                        <div class="input-group-append">\
                            <button class="btn btn-danger remove-faq" type="button">Remove</button>\
                        </div>\
                    </div>\
                    <textarea name="faqs[${faqIndex}][answer]" class="form-control" placeholder="FAQ answer" rows="3"></textarea>`;
                wrapper.appendChild(item);
                faqIndex++;
            });

            document.getElementById('faqs-wrapper').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-faq')) {
                    e.target.closest('.faq-item').remove();
                }
            });

            document.getElementById('add-video').addEventListener('click', function() {
                const wrapper = document.getElementById('videos-wrapper');
                const item = document.createElement('div');
                item.className = 'video-item mb-2';
                item.innerHTML = `\
                    <div class="input-group mb-1">\
                        <input type="text" name="videos[${videoIndex}][title]" class="form-control" placeholder="Video title (optional)">\
                    </div>\
                    <div class="input-group mb-1">\
                        <input type="text" name="videos[${videoIndex}][youtube_url]" class="form-control" placeholder="YouTube URL or video ID">\
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
            });
        })();
    </script>
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
                    <form class="form-horizontal" action="{{ route('store.services') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Service Title</label>
                            <input type="text" class="form-control" rows="5" name="service_title"
                                id="service_title" placeholder="Service Title">
                        </div>
                        <div class="form-group">
                            <label>Service Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Service Small Details</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="service_details_small"></textarea>
                        </div>
                        <h3>Details page information</h3>
                        <div class="form-group">
                            <label>banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image three</label>
                            <input type="file" name="details_image3" class="form-control">
                        </div>



                        <div class="form-group">
                            <label>Service Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="service_details1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Service Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="service_details2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Service Long Details three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="service_details3"></textarea>
                        </div>

                        <h3>Service FAQs</h3>
                        <div id="faqs-wrapper">
                            <div class="faq-item mb-2">
                                <div class="input-group mb-1">
                                    <input type="text" name="faqs[0][question]" class="form-control"
                                        placeholder="FAQ question">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger remove-faq" type="button">Remove</button>
                                    </div>
                                </div>
                                <textarea name="faqs[0][answer]" class="form-control" placeholder="FAQ answer" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button id="add-faq" type="button" class="btn btn-sm btn-primary">Add FAQ</button>
                        </div>

                        <h3>Service Videos (YouTube)</h3>
                        <div id="videos-wrapper">
                            <div class="video-item mb-2">
                                <div class="input-group mb-1">
                                    <input type="text" name="videos[0][title]" class="form-control"
                                        placeholder="Video title (optional)">
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" name="videos[0][youtube_url]" class="form-control"
                                        placeholder="YouTube URL or video ID">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger remove-video" type="button">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button id="add-video" type="button" class="btn btn-sm btn-primary">Add Video</button>
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="service_home">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            {{--                        <th>Details</th> --}}
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td><img src="{{ asset($service->main_image) }}" style="height: 100px"></td>
                                <td>{{ $service->service_title ?? null }}</td>
                                {{--                            <td>{!! $service->service_details_small ?? null !!}</td> --}}
                                <td>
                                    @if ($service->status == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($service->status == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit.services', ['id' => $service->id]) }}"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
