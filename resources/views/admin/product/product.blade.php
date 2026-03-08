@extends('admin.master')
@section('title')
    Products
@endsection
@section('body')

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Products</h5>
                        <a href="{{ route('product.add') }}" class="btn btn-success">Add New Product</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td> # {{ $p->id }}</td>
                                    <td>@if($p->image)<img src="{{ asset($p->image) }}" style="height:60px">@endif</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td><a href="{{ route('edit.products', $p->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>
@endsection
