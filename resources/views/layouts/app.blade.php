<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- =========================
         BOOTSTRAP 5.3.3 CSS
    ========================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <title>
        @yield('title', 'VELORA - Shoes & Clothing')
    </title>


    <!-- =========================
         COMMON CSS
    ========================== -->

    <style>

        /* RESET */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f7f7;
            color: #222;
            line-height: 1.6;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        img {
            max-width: 100%;
            display: block;
        }


        /* =========================
           CONTAINER
        ========================== */

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }


        /* =========================
           HEADER
        ========================== */

        .header {
            background: #111;
            color: white;
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }


        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        /* LOGO */

        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
        }


        /* NAVIGATION */

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }


        .nav-menu a {
            color: white;
            font-size: 15px;
            transition: 0.3s;
        }


        .nav-menu a:hover {
            color: #aaa;
        }


        .cart {
            font-size: 16px;
        }


        /* =========================
           CART COUNT
        ========================== */

        .cart-link {
            position: relative;
            display: inline-block;
        }


        .cart-count {
            position: absolute;
            top: -10px;
            right: -14px;

            background: red;
            color: white;

            width: 20px;
            height: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-size: 11px;
            font-weight: bold;
        }


        /* =========================
           BUTTON
        ========================== */

        .btn {
            display: inline-block;
            padding: 11px 22px;
            background: #111;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }


        .btn:hover {
            background: #333;
        }


        .btn-light {
            background: white;
            color: #111;
            border: 1px solid #ddd;
        }


        .btn-light:hover {
            background: #eee;
        }


        /* =========================
           PAGE HEADER
        ========================== */

        .page-header {
            background: white;
            text-align: center;
            padding: 70px 20px;
        }


        .page-header h1 {
            font-size: 45px;
            margin-bottom: 10px;
        }


        .page-header p {
            color: #777;
            font-size: 17px;
        }


        /* =========================
           SECTION
        ========================== */

        .section {
            padding: 70px 0;
        }


        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }


        .section-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }


        .section-title p {
            color: #777;
        }


        /* =========================
           PRODUCT GRID
        ========================== */

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }


        /* =========================
           PRODUCT CARD
        ========================== */

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            transition: 0.3s;
        }


        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }


        .product-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }


        .product-info {
            padding: 20px;
        }


        .product-category {
            color: #888;
            font-size: 13px;
            margin-bottom: 7px;
        }


        .product-name {
            font-size: 18px;
            margin-bottom: 8px;
        }


        .product-price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }


        /* =========================
           BADGE
        ========================== */

        .badge {
            position: absolute;
            top: 15px;
            left: 15px;

            background: #111;
            color: white;

            padding: 5px 10px;

            border-radius: 4px;

            font-size: 12px;

            z-index: 2;
        }


        /* =========================
           CATEGORY GRID
        ========================== */

        .categories {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }


        .category-card {
            background: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 12px;
            transition: 0.3s;
        }


        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }


        .category-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }


        .category-card h3 {
            margin-bottom: 15px;
        }


        /* =========================
           HERO
        ========================== */

        .hero {
            background: white;
            padding: 80px 0;
        }


        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 50px;
        }


        .hero-text h1 {
            font-size: 52px;
            line-height: 1.1;
            margin-bottom: 20px;
        }


        .hero-text p {
            color: #777;
            font-size: 17px;
            margin-bottom: 25px;
        }


        .hero-image img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 15px;
        }


        /* =========================
           FOOTER
        ========================== */

        .footer {
            background: #111;
            color: white;
            padding: 50px 0 25px;
            margin-top: 50px;
        }


        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 35px;
        }


        .footer h3 {
            margin-bottom: 15px;
        }


        .footer p {
            color: #aaa;
            font-size: 14px;
        }


        .footer-links {
            list-style: none;
        }


        .footer-links li {
            margin-bottom: 8px;
        }


        .footer-links a {
            color: #aaa;
            font-size: 14px;
            transition: 0.3s;
        }


        .footer-links a:hover {
            color: white;
        }


        .copyright {
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 20px;
            color: #777;
            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1000px) {

            .products {
                grid-template-columns: repeat(3, 1fr);
            }

        }


        @media (max-width: 750px) {

            .products {
                grid-template-columns: repeat(2, 1fr);
            }


            .categories {
                grid-template-columns: 1fr;
            }


            .hero-content {
                grid-template-columns: 1fr;
            }


            .hero-text h1 {
                font-size: 40px;
            }


            .footer-content {
                grid-template-columns: 1fr 1fr;
            }


            .nav-menu {
                gap: 15px;
            }

        }


        @media (max-width: 500px) {

            .products {
                grid-template-columns: 1fr;
            }


            .header-content {
                flex-direction: column;
                gap: 15px;
            }


            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }


            .page-header h1 {
                font-size: 35px;
            }


            .footer-content {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         HEADER
    ========================== -->

    <header class="header">

        <div class="container header-content">


            <!-- LOGO -->

            <a href="{{ route('home') }}" class="logo">
                VELORA
            </a>


            <!-- NAVIGATION -->

            <ul class="nav-menu">

                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>


                <li>
                    <a href="{{ route('shoes') }}">
                        Shoes
                    </a>
                </li>


                <li>
                    <a href="{{ route('clothes') }}">
                        Clothing
                    </a>
                </li>


                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>


                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>


                <li>

                    <a
                        href="{{ route('cart') }}"
                        class="cart-link"
                    >
                        🛒 Cart

                        @php
                            $cartCount = collect(
                                session('cart', [])
                            )->sum('quantity');
                        @endphp

                        @if($cartCount > 0)

                            <span class="cart-count">
                                {{ $cartCount }}
                            </span>

                        @endif

                    </a>

                </li>

            </ul>

        </div>

    </header>


    <!-- =========================
         PAGE CONTENT
    ========================== -->

    @yield('content')


    <!-- =========================
         FOOTER
    ========================== -->

    <footer class="footer">

        <div class="container">

            <div class="footer-content">


                <!-- ABOUT -->

                <div>

                    <h3>
                        VELORA
                    </h3>

                    <p>
                        Your destination for stylish shoes
                        and quality clothing.
                    </p>

                </div>


                <!-- QUICK LINKS -->

                <div>

                    <h3>
                        Quick Links
                    </h3>

                    <ul class="footer-links">

                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('shoes') }}">
                                Shoes
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('clothes') }}">
                                Clothing
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- SUPPORT -->

                <div>

                    <h3>
                        Support
                    </h3>

                    <ul class="footer-links">

                        <li>
                            <a href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                Privacy Policy
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                Terms & Conditions
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            <div class="copyright">

                © 2026 VELORA. All Rights Reserved.

            </div>

        </div>

    </footer>


    <!-- =========================
         BOOTSTRAP 5.3.3 JS
    ========================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>
```
