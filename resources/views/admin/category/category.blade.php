@extends('admin.master')
@section('title')
    Categories
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('store.categories') }}" method="POST">
                        @csrf
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
                        <button class="btn btn-primary" type="submit">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr><th>Name</th><th>Status</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->status ? 'Active' : 'Inactive' }}</td>
                                    <td><a href="{{ route('edit.categories', $cat->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
