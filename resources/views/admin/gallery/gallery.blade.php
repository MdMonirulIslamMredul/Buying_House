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
                    <form class="form-horizontal" action="{{ route('store.gallery') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf

                        <div class="form-group">
                            <label> Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image Title</label>
                            <input type="text" name="image_title" value="{{ old('image_title') }}" class="form-control"
                                placeholder="Add a short caption for search">
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
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
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Image Title</th>
                                <th>Active/Deactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td><img src="{{ asset($gallery->image) }}" style="height: 100px"></td>

                                    <td>{{ $gallery->image_title ?? '—' }}</td>
                                    <td>
                                        @if ($gallery->status == 1)
                                            <button class="btn btn-sm btn-primary">Active</button>
                                        @elseif($gallery->status == 0)
                                            <button class="btn btn-sm btn-danger">Deactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.gallery', ['id' => $gallery->id]) }}"
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
@endsection
