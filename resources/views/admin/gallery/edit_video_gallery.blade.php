@extends('admin.master')
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
                    <form class="form-horizontal" action="{{ route('update.video.gallery') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf

                        <input type="hidden" value="{{ $gallery->id }}" name="id">
                        <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $gallery->title) }}">
                        </div>
                        <div class="form-group">
                            <label>Video Description</label>
                            <textarea class="form-control" name="description" rows="3">{{ old('description', $gallery->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail Image</label>
                            <input type="file" name="thumbnail" class="form-control">
                            @if ($gallery->getThumbnailUrl())
                                <img src="{{ $gallery->getThumbnailUrl() }}" width="200" height="120" alt="thumbnail"
                                    style="margin-top: 10px; border-radius: 4px;">
                                @if ($gallery->thumbnail)
                                    <small class="d-block mt-2 text-muted">Custom thumbnail uploaded. Leave blank to keep
                                        current or upload new.</small>
                                @else
                                    <small class="d-block mt-2 text-muted">Using YouTube thumbnail. Upload custom to
                                        override.</small>
                                @endif
                            @endif
                        </div>
                        <div class="form-group">
                            <label>YouTube Video URL or Embed Code</label>
                            <textarea class="form-control" col="10" row="3" name="video_link"
                                placeholder="Paste YouTube URL or embed code">{{ $gallery->video_link }}</textarea>
                            <small class="form-text text-muted">Enter the YouTube video link or full embed code</small>
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($gallery->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($gallery->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
