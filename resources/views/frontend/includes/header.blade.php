<header class="header-wrap style2">
    <!-- header-top removed -->
    <style>
        /* Make the Services dropdown width fit its content and prevent wrapping */
        .header-wrap .navbar-nav .dropdown-menu.services-dropdown {
            min-width: 220px;
            width: max-content;
            white-space: nowrap;
            background: #ffffff;
            padding: 6px;
            border-radius: 6px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            z-index: 2000;
        }

        .header-wrap .navbar-nav .dropdown-menu.services-dropdown .nav-item {
            display: block;
        }

        .header-wrap .navbar-nav .dropdown-menu.services-dropdown .nav-link {
            white-space: nowrap;
            display: block;
            padding: 8px 14px;
            color: #333;
        }

        .header-wrap .navbar-nav .dropdown-menu.blogs-dropdown {
            min-width: 220px;
            width: max-content;
            white-space: nowrap;
            background: #ffffff;
            padding: 6px;
            border-radius: 6px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            z-index: 2000;
        }

        .header-wrap .navbar-nav .dropdown-menu.blogs-dropdown .nav-link {
            white-space: nowrap;
            display: block;
            padding: 8px 14px;
            color: #333;
        }

        /* Prevent sticky header from showing as a partial strip on scroll */
        .header-wrap.sticky {
            top: 0 !important;
            -webkit-animation: none !important;
            animation: none !important;
        }
    </style>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('front.page') }}">
                    @php $logo = \App\Models\Logo::latest()->first() @endphp
                    <img class="logo-light" src="{{ asset($logo->logo_image ?? null) }}" height="  100px" width="120px"
                        alt="logo">
                    <img class="logo-dark" src="{{ asset($logo->logo_image ?? null) }}" height="100px" width="120px"
                        alt="logo">
                    {{--                    Medical Care --}}
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">


                        <li class="nav-item">
                            <a href="{{ route('about.page') }}"
                                class="nav-link {{ Request::routeIs('about.page') ? 'active' : '' }}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('team.page') }}"
                                class="nav-link {{ Request::routeIs('team.page') ? 'active' : '' }}">Team</a>
                        </li>



                        <li class="nav-item">
                            <a href="{{ route('products.page') }}"
                                class="nav-link {{ Request::routeIs('products.page') || Request::routeIs('products.category') || Request::routeIs('products.subcategory') ? 'active' : '' }}">
                                Products
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu services-dropdown">
                                @php $categories = \App\Models\ProductCategory::orderBy('id')->get(); @endphp
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('products.category', $category->id) }}"
                                            class="nav-link">{{ $category->name }}</a>
                                        <ul class="dropdown-menu services-dropdown" style="left:100%;top:0;">
                                            @php $subcategories = \App\Models\SubCategory::where('product_category_id', $category->id)->orderBy('id')->get(); @endphp
                                            @foreach ($subcategories as $subcategory)
                                                <li class="nav-item">
                                                    <a href="{{ route('products.subcategory', $subcategory->id) }}"
                                                        class="nav-link">{{ $subcategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('services') }}"
                                class="nav-link {{ Request::routeIs('services') || Request::routeIs('services.details') ? 'active' : '' }}">
                                Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu services-dropdown">
                                @php $headerServices = \App\Models\Service::latest()->get(); @endphp
                                @foreach ($headerServices as $service)
                                    <li class="nav-item">
                                        <a href="{{ route('services.details', $service->id) }}"
                                            class="nav-link">{{ $service->service_title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#"
                                class="nav-link @if (Request::routeIs('gallery.page')) active @elseif(Request::routeIs('video.gallery.page')) active @endif">
                                Gallery
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('gallery.page') }}" class="nav-link">Photo Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('video.gallery.page') }}" class="nav-link">Video Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs.page') }}"
                                class="nav-link {{ Request::routeIs('blogs.page') || Request::routeIs('blogs.details') ? 'active' : '' }}">
                                Blogs
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu blogs-dropdown">
                                @php $headerBlogs = \App\Models\Blog::latest()->get(); @endphp
                                @foreach ($headerBlogs as $blog)
                                    <li class="nav-item">
                                        <a href="{{ route('blogs.details', $blog->id) }}"
                                            class="nav-link">{{ $blog->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contacts') }}"
                                class="nav-link {{ Request::routeIs('contacts') ? 'active' : '' }}">Contact</a>
                        </li>

                    </ul>
                    <div class="other-options md-none">
                    </div>
                </div>
            </nav>
            <div class="mobile-bar-wrap">
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
