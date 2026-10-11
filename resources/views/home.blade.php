@extends('layouts.app')

@section('title', 'home')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="hero">

    <div class="container">

        <div class="hero-content">

            <div class="hero-text">

                <span class="badge">NEW COLLECTION 2026</span>

                <h1>
                    Step Into Your
                    <span>Style</span>
                </h1>

                <p>
                    Discover premium shoes and trendy clothing
                    designed for your everyday lifestyle.
                </p>

                <div style="display: flex; gap: 15px; margin-top: 25px;">

                    <a href="{{ route('shoes') }}" class="btn">
                        Shop Shoes
                    </a>

                    <a href="{{ route('clothes') }}" class="btn btn-light">
                        Shop Clothing
                    </a>

                </div>

            </div>

            <div class="hero-image">

                <img
                    src="https://images.unsplash.com/photo-1552346154-21d32810aba3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="VELORA Shoes"
                >

            </div>

        </div>

    </div>

</section>


<!-- ================= CATEGORIES ================= -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Shop By Category
        </h2>

        <div class="categories">

            <!-- Shoes -->
            <a href="{{ route('shoes') }}" class="category-card">

                <div class="category-icon">
                    👟
                </div>

                <h3>Men's Shoes</h3>

                <p>
                    Sneakers, casual & sports shoes
                </p>

            </a>


            <!-- Clothing -->
            <a href="{{ route('clothes') }}" class="category-card">

                <div class="category-icon">
                    👕
                </div>

                <h3>Men's Clothing</h3>

                <p>
                    T-Shirts, shirts & casual wear
                </p>

            </a>


            <!-- Fashion -->
            <a href="{{ route('clothes') }}" class="category-card">

                <div class="category-icon">
                    🧥
                </div>

                <h3>Fashion Wear</h3>

                <p>
                    Latest styles for every occasion
                </p>

            </a>

        </div>

    </div>

</section>


<!-- ================= FEATURED PRODUCTS ================= -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Featured Products
        </h2>

        <div class="products">


            <!-- Product 1 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">
                        SALE
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80"
                        alt="Nike Air Max"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Shoes
                    </div>

                    <h3 class="product-name">
                        Nike Air Max
                    </h3>

                    <div class="product-price">
                        ৳3,500
                    </div>

                    <a href="{{ route('shoes') }}" class="btn">
                        View Product
                    </a>

                </div>

            </div>


            <!-- Product 2 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">
                        NEW
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&fit=crop&w=600&q=80"
                        alt="Adidas Sneakers"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Shoes
                    </div>

                    <h3 class="product-name">
                        Adidas Sneakers
                    </h3>

                    <div class="product-price">
                        ৳2,800
                    </div>

                    <a href="{{ route('shoes') }}" class="btn">
                        View Product
                    </a>

                </div>

            </div>


            <!-- Product 3 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">
                        NEW
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=600&q=80"
                        alt="Premium T-Shirt"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Clothing
                    </div>

                    <h3 class="product-name">
                        Premium T-Shirt
                    </h3>

                    <div class="product-price">
                        ৳850
                    </div>

                    <a href="{{ route('clothes') }}" class="btn">
                        View Product
                    </a>

                </div>

            </div>


            <!-- Product 4 -->
            <div class="product-card">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1740711152088-88a009e877bb?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Casual Shirt"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Clothing
                    </div>

                    <h3 class="product-name">
                        Casual Shirt
                    </h3>

                    <div class="product-price">
                        ৳1,250
                    </div>

                    <a href="{{ route('clothes') }}" class="btn">
                        View Product
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= OFFER BANNER ================= -->
<section class="section">

    <div class="container">

        <div style="
            background: #111;
            color: white;
            padding: 60px 40px;
            border-radius: 15px;
            text-align: center;
        ">

            <span class="badge">
                LIMITED OFFER
            </span>

            <h2 style="
                font-size: 40px;
                margin: 20px 0 10px;
            ">
                Get Up To 30% Off
            </h2>

            <p style="
                font-size: 17px;
                margin-bottom: 25px;
            ">
                Upgrade your style with our latest collection.
            </p>

            <a href="{{ route('shoes') }}" class="btn">
                Shop Now
            </a>

        </div>

    </div>

</section>


<!-- ================= WHY VELORA ================= -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Why Choose VELORA?
        </h2>

        <div class="categories">

            <div class="category-card">

                <div class="category-icon">
                    🚚
                </div>

                <h3>Fast Delivery</h3>

                <p>
                    Quick and reliable delivery across Bangladesh.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    ⭐
                </div>

                <h3>Quality Products</h3>

                <p>
                    Carefully selected products with great quality.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    🔒
                </div>

                <h3>Secure Shopping</h3>

                <p>
                    Safe and simple shopping experience.
                </p>

            </div>

        </div>

    </div>

</section>
        <style>            .hero-image {
                overflow: hidden;
                border-radius: 15px;
            }

            .hero-image img {
                display: block;
                width: 100%;
                height: 450px;
                object-fit: cover;
                transition: transform 0.5s ease;
                transform-origin: center center;
            }

            .hero-image:hover img {
                transform: scale(1.15);
            }


            /* Product Image Zoom Inside Box */
            .product-image {
                height: 280px;
                overflow: hidden;
                position: relative;
            }

            .product-image img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.4s ease;
                transform-origin: center center;
            }

            .product-card:hover .product-image img {
                transform: scale(1.12);
            }
        </style>

@endsection