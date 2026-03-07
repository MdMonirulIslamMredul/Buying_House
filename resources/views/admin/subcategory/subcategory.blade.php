@extends('admin.master')
@section('title')
    Subcategories
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('store.subcategories') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select name="product_category_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Slug (optional)</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Subcategory</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr><th>Name</th><th>Category</th><th>Status</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $sc)
                                <tr>
                                    <td>{{ $sc->name }}</td>
                                    <td>{{ optional($sc->category)->name }}</td>
                                    <td>{{ $sc->status ? 'Active' : 'Inactive' }}</td>
                                    <td><a href="{{ route('edit.subcategories', $sc->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
