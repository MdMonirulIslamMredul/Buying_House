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
                    <form class="form-horizontal" action="{{ route('update.gallery') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf

                        <input type="hidden" value="{{ $gallery->id }}" name="id">
                        <div class="form-group">
                            <label> Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset($gallery->image) }}" width="100" height="100" alt="">
                        </div>

                        <div class="form-group">
                            <label>Image Title</label>
                            <input type="text" name="image_title" class="form-control"
                                value="{{ old('image_title', $gallery->image_title) }}">
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1" {{ $gallery->add_home == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $gallery->add_home == 0 ? 'selected' : '' }}>No</option>
                            </select>
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
@endsection
