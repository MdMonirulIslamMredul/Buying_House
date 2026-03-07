@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form action="{{ route('update.products') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="product_category_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" @if($product->product_category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Subcategory</label>
                            <select name="subcategory_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($subcategories as $sc)
                                    <option value="{{ $sc->id }}" @if($product->subcategory_id == $sc->id) selected @endif>{{ $sc->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            @if($product->image)<img src="{{ asset($product->image) }}" style="height:60px;margin-top:8px">@endif
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text" name="sku" class="form-control" value="{{ $product->sku }}">
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input type="text" name="size" class="form-control" value="{{ $product->size }}">
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" name="color" class="form-control" value="{{ $product->color }}">
                        </div>
                        <div class="form-group">
                            <label>Material</label>
                            <input type="text" name="material" class="form-control" value="{{ $product->material }}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" class="form-control" value="{{ $product->gender }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" @if($product->status) selected @endif>Active</option>
                                <option value="0" @if(!$product->status) selected @endif>Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('select[name="product_category_id"]').addEventListener('change', function() {
            var categoryId = this.value;
            var subcategorySelect = document.querySelector('select[name="subcategory_id"]');
            subcategorySelect.innerHTML = '<option value="">-- Select --</option>';
            if(categoryId) {
                fetch('/subcategories-by-category/' + categoryId)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(function(subcat) {
                            var option = document.createElement('option');
                            option.value = subcat.id;
                            option.textContent = subcat.name;
                            if(subcat.id == {{ $product->subcategory_id }}) {
                                option.selected = true;
                            }
                            subcategorySelect.appendChild(option);
                        });
                    });
            }
        }); 
    </script>
@endsection
