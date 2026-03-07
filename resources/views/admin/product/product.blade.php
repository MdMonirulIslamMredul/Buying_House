@extends('admin.master')
@section('title')
    Products
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('store.products') }}" method="POST" enctype="multipart/form-data">
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
                            <label>Subcategory</label>
                            <select name="subcategory_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($subcategories as $sc)
                                    <option value="{{ $sc->id }}">{{ $sc->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text" name="sku" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" name="stock" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input type="text" name="size" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" name="color" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Material</label>
                            <input type="text" name="material" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr><th>Image</th><th>Name</th><th>Price</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                                <tr>
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const catSelect = document.querySelector('select[name="product_category_id"]');
            const subSelect = document.querySelector('select[name="subcategory_id"]');
            if (!catSelect || !subSelect) return;

            catSelect.addEventListener('change', function(){
                const id = this.value;
                subSelect.innerHTML = '<option value="">-- Select --</option>';
                if (!id) return;

                fetch(`/subcategories-by-category/${id}`, { credentials: 'same-origin' })
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(function(sc){
                            const opt = document.createElement('option');
                            opt.value = sc.id;
                            opt.textContent = sc.name;
                            subSelect.appendChild(opt);
                        });
                    })
                    .catch(err => console.error('Failed loading subcategories', err));
            });
        });
    </script>
@endsection
