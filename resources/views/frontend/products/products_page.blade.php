@extends('frontend.master')
@section('title')
    Products
@endsection
@section('content')
    <style>
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        {{-- <div class="breadcrumb-modern" style="background-image: url({{ asset($banner->image ?? '') }});">
            <h1>Products</h1>
            <div class="breadcrumb-nav-modern">
                <a href="{{ route('front.page') }}">Home</a>
                <span>/</span>
                <span>Products</span>
            </div>
        </div> --}}

        <!-- Breadcrumb End -->

        <!-- Products Section Start -->
        <section class="section-modern section-modern-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="list-unstyled">
                                @foreach ($categories as $cat)
                                    <li>
                                        <a href="{{ route('products.category', $cat->id) }}">{{ $cat->name }}</a>
                                        @php $subs = \App\Models\SubCategory::where('product_category_id', $cat->id)->get(); @endphp
                                        @if ($subs->count())
                                            <ul>
                                                @foreach ($subs as $s)
                                                    <li><a
                                                            href="{{ route('products.subcategory', $s->id) }}">{{ $s->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="section-header-modern" data-aos="fade-up" data-aos-duration="1200">
                            <span class="section-subtitle-modern">Our Collection</span>
                            <h2 class="section-title-modern">Products</h2>
                            @if (isset($currentCategory))
                                <p class="mb-3">Showing products for category: {{ $currentCategory->name }}</p>
                            @elseif(isset($currentSubcategory))
                                <p class="mb-3">Showing products for subcategory: {{ $currentSubcategory->name }}</p>
                            @endif
                        </div>

                        <div class="row g-4">
                            @forelse ($products as $product)
                                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                                    <a href="{{ route('product.details', $product->id) }}" class="text-decoration-none">
                                        <article class="card product-card">
                                            <div style="overflow:hidden;">
                                                <img src="{{ asset($product->image) }}" class="img-fluid"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                @if ($product->price)
                                                    <p class="text-primary">৳ {{ number_format($product->price, 2) }}</p>
                                                @endif
                                                <p class="card-text">{!! \Illuminate\Support\Str::limit(strip_tags($product->description), 120) !!}</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p>No products found.</p>
                                </div>
                            @endforelse
                        </div>

                        <div class="modern-pagination-wrap mt-5" data-aos="fade-up" data-aos-duration="1200">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
