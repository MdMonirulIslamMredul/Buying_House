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
                    <form class="form-horizontal" action="{{ route('store.video.gallery') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter video title">
                        </div>
                        <div class="form-group">
                            <label>Video Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Short description for the video"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail Image</label>
                            <input type="file" name="thumbnail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>YouTube Video URL or Embed Code</label>
                            <textarea class="form-control" col="10" row="3" name="video_link"
                                placeholder="Paste YouTube URL (e.g., https://www.youtube.com/watch?v=xxx) or embed code"></textarea>
                            <small class="form-text text-muted">Enter the YouTube video link or full embed code</small>
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
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Active/Deactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->title ?? '—' }}</td>
                                    <td>
                                        @if ($gallery->getThumbnailUrl())
                                            <img src="{{ $gallery->getThumbnailUrl() }}" style="height: 50px">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($gallery->status == 1)
                                            <button class="btn btn-sm btn-primary">Active</button>
                                        @elseif($gallery->status == 0)
                                            <button class="btn btn-sm btn-danger">Deactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.video.gallery', ['id' => $gallery->id]) }}"
                                            class="btn btn-primary btn-sm editProduct">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
