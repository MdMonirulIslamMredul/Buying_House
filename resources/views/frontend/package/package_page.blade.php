@extends('frontend.master')
@section('title')
    Packages
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image ?? null)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Products</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
<style>
    .product-card {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
}

/* Image */
.product-image img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

/* Body */
.product-body {
    padding: 20px;
    text-align: center;
}

.product-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}

.product-price {
    font-size: 22px;
    font-weight: 700;
    color: #ff6b00;
    margin-bottom: 12px;
}

/* Features */
.product-features {
    list-style: none;
    padding: 0;
    margin: 0 0 15px;
    text-align: left;
}

.product-features li {
    font-size: 14px;
    margin-bottom: 6px;
    color: #444;
}

.product-features i {
    color: #28a745;
    margin-right: 6px;
}

/* Button */
.order-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background: linear-gradient(135deg, #ff6b00, #ff9f43);
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s;
}

.order-btn:hover {
    background: linear-gradient(135deg, #ff9f43, #ff6b00);
    color: #fff;
}

</style>
        <!-- Pricing Section Start -->
        <section class="pricing-wrap pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
    <div class="product-card">
        
        <!-- Product Image -->
        <div class="product-image">
            <img src="{{ asset($package->image ?? 'assets/images/default-package.png') }}"
                 alt="{{ $package->name }}">
        </div>

        <!-- Product Info -->
        <div class="product-body">
            <h5 class="product-title">{{ $package->name }}</h5>

            <div class="product-price">
                ৳ {{ number_format($package->price) }}
            </div>

            <ul class="product-features">
                @foreach(json_decode($package->options) as $option)
                    @if($option)
                        <li><i class="ri-check-line"></i> {{ $option }}</li>
                    @endif
                @endforeach
            </ul>

            <a href="{{ route('login') }}" class="btn order-btn">
                Order Now
            </a>
        </div>

    </div>
</div>

                    @endforeach
                    {!! $packages->links() !!}
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
