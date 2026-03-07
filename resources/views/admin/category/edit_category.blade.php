@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('update.categories') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Slug (optional)</label>
                            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" @if($category->status) selected @endif>Active</option>
                                <option value="0" @if(!$category->status) selected @endif>Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
