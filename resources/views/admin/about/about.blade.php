@extends('admin.master')
@section('title')
    About settings
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
                <div class="card-body ">
                    <form class="form-horizontal" action="{{ route('store.about') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        @if ($about_data != null)
                            <input type="hidden" value="{{ $about_data->id }}" name="id">
                        @endif

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>About Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title"
                                placeholder="About Title" required>
                        </div>
                        <div class="form-group">
                            <label>About Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Years Experience</label>
                            <input type="number" class="form-control" name="years_experience" id="years_experience"
                                placeholder="Years of experience"
                                value="{{ old('years_experience', isset($about_data) ? $about_data->years_experience : '') }}">
                        </div>
                        <div class="form-group">
                            <label>Establishment Year</label>
                            <input type="number" class="form-control" name="establishment_year" id="establishment_year"
                                placeholder="Establishment Year"
                                value="{{ old('establishment_year', isset($about_data) ? $about_data->establishment_year : '') }}">
                        </div>
                        <div class="form-group">
                            <label>About page Short Details</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="page_details"></textarea>
                        </div>

                        <h3>Details page information</h3>
                        <div class="form-group">
                            <label>About Image One</label>
                            <input type="file" name="image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>About Details One</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details1"></textarea>
                        </div>


                        <div class="form-group">
                            <label>About Image Two</label>
                            <input type="file" name="image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>About Details Two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>About Details Three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>About Details Four</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details4"></textarea>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td><img src="{{ asset($about->image1) }}" style="height: 100px"></td>
                                <td>{{ $about->title ?? null }}</td>
                                {{--                            <td>{!! $about->details1 ?? null !!}</td> --}}

                                <td>
                                    <a href="{{ route('edit.about', ['id' => $about->id]) }}"
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
