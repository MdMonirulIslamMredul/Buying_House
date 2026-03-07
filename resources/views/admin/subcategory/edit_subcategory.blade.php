@extends('admin.master')
@section('title')
    Edit Subcategory
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('update.subcategories') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $subcategory->id }}">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="product_category_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" @if($subcategory->product_category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Slug (optional)</label>
                            <input type="text" name="slug" class="form-control" value="{{ $subcategory->slug }}">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" @if($subcategory->status) selected @endif>Active</option>
                                <option value="0" @if(!$subcategory->status) selected @endif>Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Subcategory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
