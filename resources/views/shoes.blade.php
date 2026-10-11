@extends('layouts.app')

@section('title', 'VAYRO - Shoes')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <h1>Our Shoes</h1>
    <p>Discover the perfect pair for every style and occasion.</p>
</section>


<!-- Shoes Section -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Latest Shoes
        </h2>

        <div class="products">

            <!-- ================= SHOE 1 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">NEW</span>

                    <img
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80"
                        alt="Nike Air Max"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Sneakers
                    </div>

                    <h3 class="product-name">
                        Nike Air Max
                    </h3>

                    <div class="product-price">
                        ৳3,500
                    </div>

                    <p>
                        Available Sizes: 39, 40, 41, 42, 43,44
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Nike Air Max">
                        <input type="hidden" name="price" value="3500">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- ================= SHOE 2 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">SALE</span>

                    <img
                        src="https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&fit=crop&w=600&q=80"
                        alt="Adidas Running"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Running Shoes
                    </div>

                    <h3 class="product-name">
                        Adidas Running
                    </h3>

                    <div class="product-price">
                        ৳2,800
                    </div>

                    <p>
                        Available Sizes: 40, 41, 42, 43,44
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Adidas Running">
                        <input type="hidden" name="price" value="2800">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- ================= SHOE 3 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?auto=format&fit=crop&w=600&q=80"
                        alt="Casual Sneakers"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Casual
                    </div>

                    <h3 class="product-name">
                        Casual Sneakers
                    </h3>

                    <div class="product-price">
                        ৳2,200
                    </div>

                    <p>
                        Available Sizes: 39, 40, 41, 42
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Casual Sneakers">
                        <input type="hidden" name="price" value="2200">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- ================= SHOE 4 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">POPULAR</span>

                    <img
                        src="https://images.unsplash.com/photo-1495555961986-6d4c1ecb7be3?auto=format&fit=crop&w=600&q=80"
                        alt="Sports Shoes"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Sports
                    </div>

                    <h3 class="product-name">
                        Sports Shoes
                    </h3>

                    <div class="product-price">
                        ৳3,000
                    </div>

                    <p>
                        Available Sizes: 40, 41, 42, 43, 44
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="name" value="Sports Shoes">
                        <input type="hidden" name="price" value="3000">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1495555961986-6d4c1ecb7be3?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- ================= SHOE 5 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?auto=format&fit=crop&w=600&q=80"
                        alt="Classic White Sneakers"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Sneakers
                    </div>

                    <h3 class="product-name">
                        Classic White Sneakers
                    </h3>

                    <div class="product-price">
                        ৳2,450
                    </div>

                    <p>
                        Available Sizes: 39, 40, 41, 42, 43
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="name" value="Classic White Sneakers">
                        <input type="hidden" name="price" value="2450">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1560769629-975ec94e6a86?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- ================= SHOE 6 ================= -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">SALE</span>

                    <img
                        src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&w=600&q=80"
                        alt="Street Fashion Shoes"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Fashion
                    </div>

                    <h3 class="product-name">
                        Street Fashion Shoes
                    </h3>

                    <div class="product-price">
                        ৳2,650
                    </div>

                    <p>
                        Available Sizes: 40, 41, 42, 43
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="name" value="Street Fashion Shoes">
                        <input type="hidden" name="price" value="2650">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&w=300&q=80">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
                <style>
                    /* Image Zoom - Shoes & Clothes */

                    .product-card {
                        overflow: hidden;
                    }

                    .product-image {
                        overflow: hidden;
                        position: relative;
                    }

                    .product-image img {
                        display: block;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.4s ease;
                        transform-origin: center;
                    }

                    .product-card:hover .product-image img {
                        transform: scale(1.12);
                    }
                </style>

@endsection