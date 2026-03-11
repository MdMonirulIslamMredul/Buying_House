@extends('frontend.master')
@section('title')
    {{ $product->name }}
@endsection
@section('content')
    <style>
        .category-btn {
            border-radius: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .category-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Product Details Section Start -->
        <section class="section-modern section-modern-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                        <h1 class="section-title-modern">{{ $product->name }}</h1>
                        @if ($product->price)
                            <p class="text-primary h4">৳ {{ number_format($product->price, 2) }}</p>
                        @endif
                        <div class="product-description">
                            {!! $product->description !!}
                        </div>
                        <div class="product-details mt-4">
                            @if ($product->sku)
                                <p><strong>SKU:</strong> {{ $product->sku }}</p>
                            @endif
                            @if ($product->stock)
                                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                            @endif
                            @if ($product->size)
                                <p><strong>Size:</strong> {{ $product->size }}</p>
                            @endif
                            @if ($product->color)
                                <p><strong>Color:</strong> {{ $product->color }}</p>
                            @endif
                            @if ($product->material)
                                <p><strong>Material:</strong> {{ $product->material }}</p>
                            @endif
                            @if ($product->gender)
                                <p><strong>Gender:</strong> {{ $product->gender }}</p>
                            @endif

                            @if ($product->category)
                                <p><strong>Category:</strong> <a
                                        href="{{ route('products.category', $product->category->id) }}"
                                        class="btn btn-primary btn-sm category-btn">{{ $product->category->name }}</a>
                                </p>
                            @endif

                            @if ($product->subcategory)
                                <p><strong>Subcategory:</strong> <a
                                        href="{{ route('products.subcategory', $product->subcategory->id) }}"
                                        class="btn btn-secondary btn-sm category-btn">{{ $product->subcategory->name }}</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
