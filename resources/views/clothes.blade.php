@extends('layouts.app')

@section('title', 'VELORA - Clothing')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <h1>Our Clothing</h1>
    <p>Explore our latest collection of stylish and comfortable clothing.</p>
</section>


<!-- Clothing Section -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Latest Clothing
        </h2>

        <div class="products">


            <!-- Clothing 1 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">NEW</span>

                    <img
                        src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=600&q=80"
                        alt="Premium T-Shirt"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        T-Shirt
                    </div>

                    <h3 class="product-name">
                        Premium Cotton T-Shirt
                    </h3>

                    <div class="product-price">
                        ৳850
                    </div>

                    <p>
                        Available Sizes: S, M, L, XL
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                        method="POST"
                        class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="101">
                        <input type="hidden" name="name" value="Premium Cotton T-Shirt">
                        <input type="hidden" name="price" value="850">
                        <input type="hidden" name="category" value="T-Shirt">
                        <input type="hidden" name="size" value="L">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=600&q=80"
                        >

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- Clothing 2 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">POPULAR</span>

                    <img
                        src="https://images.unsplash.com/photo-1740711152088-88a009e877bb?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Casual Shirt"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Shirt
                    </div>

                    <h3 class="product-name">
                        Casual Shirt
                    </h3>

                    <div class="product-price">
                        ৳1,250
                    </div>

                    <p>
                        Available Sizes: M, L, XL, XXL
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                                    method="POST"
                                    class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="102">
                        <input type="hidden" name="name" value="Casual Shirt">
                        <input type="hidden" name="price" value="1250">
                        <input type="hidden" name="category" value="Shirt">
                        <input type="hidden" name="size" value="L">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1596755389378-c31d21fd1273?auto=format&fit=crop&w=600&q=80"
                        >

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- Clothing 3 -->
            <div class="product-card">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=600&q=80"
                        alt="Polo Shirt"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Polo
                    </div>

                    <h3 class="product-name">
                        Classic Polo Shirt
                    </h3>

                    <div class="product-price">
                        ৳1,100
                    </div>

                    <p>
                        Available Sizes: S, M, L, XL
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                                method="POST"
                                class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="103">
                        <input type="hidden" name="name" value="Classic Polo Shirt">
                        <input type="hidden" name="price" value="1100">
                        <input type="hidden" name="category" value="Polo">
                        <input type="hidden" name="size" value="L">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=600&q=80"
                        >

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- Clothing 4 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">SALE</span>

                    <img
                        src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?auto=format&fit=crop&w=600&q=80"
                        alt="Denim Jacket"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Jacket
                    </div>

                    <h3 class="product-name">
                        Denim Jacket
                    </h3>

                    <div class="product-price">
                        ৳2,200
                    </div>

                    <p>
                        Available Sizes: M, L, XL
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                                method="POST"
                                class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="104">
                        <input type="hidden" name="name" value="Denim Jacket">
                        <input type="hidden" name="price" value="2200">
                        <input type="hidden" name="category" value="Jacket">
                        <input type="hidden" name="size" value="L">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?auto=format&fit=crop&w=600&q=80"
                        >

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- Clothing 5 -->
            <div class="product-card">

                <div class="product-image">

                    <img
                        src="https://www.mypersonalisedclothing.com/wp-content/uploads/2021/03/awdis-college-hoodie-jh001-600x600.jpg.webp"
                        alt="Hoodie"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Hoodie
                    </div>

                    <h3 class="product-name">
                        Casual Hoodie
                    </h3>

                    <div class="product-price">
                        ৳1,800
                    </div>

                    <p>
                        Available Sizes: M, L, XL, XXL
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                                    method="POST"
                                    class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="105">
                        <input type="hidden" name="name" value="Casual Hoodie">
                        <input type="hidden" name="price" value="1800">
                        <input type="hidden" name="category" value="Hoodie">
                        <input type="hidden" name="size" value="L">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1506629905607-d9c297d80c6f?auto=format&fit=crop&w=600&q=80"
                        >

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>


            <!-- Clothing 6 -->
            <div class="product-card">

                <div class="product-image">

                    <span class="badge">NEW</span>

                    <img
                        src="https://images.unsplash.com/photo-1627225924765-552d49cf47ad?auto=format&fit=crop&w=600&q=80"
                        alt="Cargo Pants"
                    >

                </div>

                <div class="product-info">

                    <div class="product-category">
                        Pants
                    </div>

                    <h3 class="product-name">
                        Casual Cargo Pants
                    </h3>

                    <div class="product-price">
                        ৳1,650
                    </div>

                    <p>
                        Available Sizes: 30, 32, 34, 36
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                                method="POST"
                                class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="106">
                        <input type="hidden" name="name" value="Casual Cargo Pants">
                        <input type="hidden" name="price" value="1650">
                        <input type="hidden" name="category" value="Pants">
                        <input type="hidden" name="size" value="32">
                        <input
                            type="hidden"
                            name="image"
                            value="https://images.unsplash.com/photo-1627225924765-552d49cf47ad?auto=format&fit=crop&w=600&q=80"
                        >

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
            .product-card {
                overflow: visible;
            }

            .product-image {
                position: relative;
                overflow: hidden;
                cursor: crosshair;
                isolation: isolate;
                border-radius: 10px;
            }

            .product-image > img {
                display: block;
                width: 100%;
                height: 280px;
                object-fit: cover;
                user-select: none;
                -webkit-user-drag: none;
            }

            .product-image .badge {
                position: absolute;
                top: 12px;
                left: 12px;
                z-index: 6;
            }

            .zoom-lens {
                position: absolute;
                width: 130px;
                height: 130px;
                border: 2px solid white;
                border-radius: 50%;
                box-shadow: 0 3px 15px rgba(0, 0, 0, .35);
                background-repeat: no-repeat;
                pointer-events: none;
                display: none;
                z-index: 5;
            }

            .product-image.is-zooming .zoom-lens {
                display: block;
            }

            @media (max-width: 768px) {
                .product-image > img {
                    height: 220px;
                }

                .zoom-lens {
                    width: 100px;
                    height: 100px;
                }
            }
        </style>

@endsection