@extends('layouts.app')

@section('title', 'VAYRO - Shoes')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <h1><b>Our Shoes</b></h1>
    <p>Discover the perfect pair for every style and occasion.</p>
</section>


<!-- Shoes Section -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            <b>Latest Shoes</b>
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

                    <form action="{{ route('cart.add') }}"
                                    method="POST"
                                    class="add-to-cart-form">
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

                    <form action="{{ route('cart.add') }}"
                            method="POST"
                            class="add-to-cart-form">
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

                    <form action="{{ route('cart.add') }}"
                            method="POST"
                            class="add-to-cart-form">
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

                    <form action="{{ route('cart.add') }}"
                            method="POST"
                            class="add-to-cart-form">
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

                    <form action="{{ route('cart.add') }}"
                                method="POST"
                                class="add-to-cart-form">
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

                    <form action="{{ route('cart.add') }}"
                                method="POST"
                                class="add-to-cart-form">
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
              <!-- ================= SHOE 7 ================= -->
     <div class="product-card">

                <div class="product-image">

                    <span class="badge">SALE</span>

                    <img
                        src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
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
                        ৳2500
                    </div>

                    <p>
                        Available Sizes: 40, 41, 42, 43, 44
                    </p>

                    <br>

                    <form action="{{ route('cart.add') }}"
                            method="POST"
                            class="add-to-cart-form">
                        @csrf

                        <input type="hidden" name="id" value="7">
                        <input type="hidden" name="name" value="Street Fashion Shoes">
                        <input type="hidden" name="price" value="2500">
                        <input type="hidden" name="category" value="Shoes">
                        <input type="hidden" name="size" value="42">
                        <input type="hidden" name="image"
                            value="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D">

                        <button type="submit" class="btn">
                            Add to Cart
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>

        </div>

        </div>
   
    
    

</section>
            <style>
                /* Magnifying Glass Zoom */
                .product-image {
                    position: relative;
                    overflow: hidden;
                    cursor: crosshair;
                }

                .product-image img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* Circular magnifier */
                .magnifier-lens {
                    position: absolute;
                    width: 150px;
                    height: 150px;
                    border: 3px solid white;
                    border-radius: 50%;
                    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.35);
                    pointer-events: none;
                    display: none;
                    z-index: 20;
                    background-repeat: no-repeat;
                }
            </style>
         <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.product-image').forEach(function (box) {
                    const img = box.querySelector('img');

                    if (!img) return;

                    const lens = document.createElement('div');
                    lens.className = 'magnifier-lens';
                    box.appendChild(lens);

                    const zoom = 2.5;

                    function setupLens() {
                        lens.style.backgroundImage = `url("${img.currentSrc || img.src}")`;
                        lens.style.backgroundSize =
                            `${img.clientWidth * zoom}px ${img.clientHeight * zoom}px`;
                    }

                    img.addEventListener('load', setupLens);
                    if (img.complete) setupLens();

                    box.addEventListener('mouseenter', function () {
                        setupLens();
                        lens.style.display = 'block';
                    });

                    box.addEventListener('mousemove', function (event) {
                        const rect = img.getBoundingClientRect();
                        const lensSize = lens.offsetWidth;

                        let x = event.clientX - rect.left;
                        let y = event.clientY - rect.top;

                        x = Math.max(0, Math.min(x, rect.width));
                        y = Math.max(0, Math.min(y, rect.height));

                        lens.style.left = `${x - lensSize / 2}px`;
                        lens.style.top = `${y - lensSize / 2}px`;

                        lens.style.backgroundPosition =
                            `${lensSize / 2 - x * zoom}px ${lensSize / 2 - y * zoom}px`;
                    });

                    box.addEventListener('mouseleave', function () {
                        lens.style.display = 'none';
                    });
                });
            });
        </script>
@endsection