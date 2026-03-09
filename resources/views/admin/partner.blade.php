@extends('admin.master')
@section('title')
    partner
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{ url('/partner-store') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf


                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
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

                    <tr>

                        <th>id</th>

                        <th>image</th>

                        <th>Action</th>
                    </tr>
                    @foreach ($data1 as $key => $partner)
                        <tr>

                            <td>{{ $key }}</td>
                            <td><img style="width:100px" src="{{ asset('partner/' . $partner->image) }}" alt="">
                            </td>
                            <td><a class="btn btn-danger " href="{{ 'partner-delete/' . $partner->id }}">Delete</a></td>
                        </tr>
                    @endforeach



                </table>
            </div>
        </div>
    </div>
@endsection
