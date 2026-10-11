@extends('layouts.app')

@section('title', 'VELORA - About Us')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <h1>About VELORA</h1>
    <p>Style that speaks for you.</p>
</section>


<!-- About Section -->
<section class="section">

    <div class="container">

        <div class="hero-content">

            <div class="hero-text">

                <span class="badge">ABOUT VELORA</span>

                <h2>
                    Your Style,
                    <span>Your Identity</span>
                </h2>

                <p>
                    Welcome to VELORA, your trusted destination for
                    stylish shoes and clothing. We believe fashion
                    is more than just what you wear — it is a way
                    to express your personality and confidence.
                </p>

                <p>
                    Our goal is to bring you quality products,
                    modern designs and affordable prices so that
                    you can find the perfect style for every
                    occasion.
                </p>

            </div>

            <div class="hero-image">

                <img
                    src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=900&q=80"
                    alt="VELORA Fashion Store"
                >

            </div>

        </div>

    </div>

</section>


<!-- Mission & Vision -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Our Mission
        </h2>

        <div class="categories">

            <div class="category-card">

                <div class="category-icon">
                    🎯
                </div>

                <h3>Our Mission</h3>

                <p>
                    To provide fashionable, quality and affordable
                    products while creating a simple and enjoyable
                    shopping experience for every customer.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    👁️
                </div>

                <h3>Our Vision</h3>

                <p>
                    To become a trusted fashion brand in Bangladesh
                    by offering great products, excellent service
                    and a customer-first shopping experience.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    ❤️
                </div>

                <h3>Our Promise</h3>

                <p>
                    Quality products, fair prices, reliable service
                    and a shopping experience that our customers
                    can trust.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- Why Choose Us -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Why Choose VELORA?
        </h2>

        <div class="categories">

            <div class="category-card">

                <div class="category-icon">
                    ⭐
                </div>

                <h3>Quality Products</h3>

                <p>
                    We focus on products that combine style,
                    comfort and quality.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    💰
                </div>

                <h3>Affordable Prices</h3>

                <p>
                    Great fashion should be accessible to everyone.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    🚚
                </div>

                <h3>Fast Delivery</h3>

                <p>
                    We aim to deliver your favorite products
                    quickly and safely.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    🤝
                </div>

                <h3>Customer First</h3>

                <p>
                    Your satisfaction is at the heart of everything
                    we do.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- Call To Action -->
<section class="section">

    <div class="container">

        <div style="
            background: #111;
            color: white;
            padding: 60px 40px;
            border-radius: 15px;
            text-align: center;
        ">

            <h2 style="
                font-size: 36px;
                margin-bottom: 15px;
            ">
                Find Your Style With VELORA
            </h2>

            <p style="
                margin-bottom: 25px;
                font-size: 17px;
            ">
                Explore our latest collection of shoes and clothing.
            </p>

            <a href="{{ route('shoes') }}" class="btn">
                Shop Now
            </a>

        </div>

    </div>

</section>

@endsection