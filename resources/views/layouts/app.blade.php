
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'VELORA - Shoes & Clothing')</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
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

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        /* HEADER */
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
            gap: 20px;
        }

        .logo {
            color: white;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .logo:hover {
            color: #ddd;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-menu a {
            color: white;
            font-size: 15px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #aaa;
        }

        /* CART BADGE */
        .cart-link {
            position: relative;
            display: inline-block;
            white-space: nowrap;
        }

        .cart-count {
            position: absolute;
            top: -12px;
            right: -14px;
            min-width: 20px;
            height: 20px;
            padding: 0 5px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #dc3545;
            color: white;
            font-size: 11px;
            font-weight: bold;
            line-height: 1;
        }

        /* BUTTONS */
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
            color: white;
        }

        .btn-light {
            background: white;
            color: #111;
            border: 1px solid #ddd;
        }

        .btn-light:hover {
            background: #eee;
            color: #111;
        }

        /* PAGE HEADER */
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

        /* SECTIONS */
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

        /* PRODUCT GRID */
        .products {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
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

        /* CATEGORY GRID */
        .categories {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
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
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .category-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .category-card h3 {
            margin-bottom: 15px;
        }

        /* HERO */
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

        /* FOOTER */
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
            padding: 0;
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

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .products {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .nav-menu {
                gap: 18px;
            }
        }

        @media (max-width: 750px) {
            .products {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .categories,
            .hero-content {
                grid-template-columns: 1fr;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

            .header-content {
                flex-direction: column;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }
        }

        @media (max-width: 500px) {
            .products {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 35px;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .hero-image img {
                height: 300px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container header-content">

            <a href="{{ route('home') }}" class="logo">
                VELORA
            </a>

            <ul class="nav-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shoes') }}">Shoes</a></li>
                <li><a href="{{ route('clothes') }}">Clothing</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>

                <li>
                    <a href="{{ route('cart') }}" class="cart-link">
                        🛒 Cart

                        <span
                            id="cart-count"
                            class="cart-count"
                            style="{{ collect(session('cart', []))->sum('quantity') > 0 ? '' : 'display:none;' }}">
                            {{ collect(session('cart', []))->sum('quantity') }}
                        </span>
                    </a>
                </li>
            </ul>

        </div>
    </header>

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">

            <div class="footer-content">

                <div>
                    <h3>VELORA</h3>
                    <p>
                        Your destination for stylish shoes
                        and quality clothing.
                    </p>
                </div>

                <div>
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shoes') }}">Shoes</a></li>
                        <li><a href="{{ route('clothes') }}">Clothing</a></li>
                    </ul>
                </div>

                <div>
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>

            </div>

            <div class="copyright">
                &copy; {{ date('Y') }} VELORA. All Rights Reserved.
            </div>

        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AJAX ADD TO CART -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        const forms = document.querySelectorAll('.add-to-cart-form');

        forms.forEach(function (form) {

            form.addEventListener('submit', async function (event) {
                event.preventDefault();

                const button = form.querySelector('button[type="submit"]');

                if (!button || button.disabled) return;

                const csrfMeta = document.querySelector('meta[name="csrf-token"]');
                const originalText = button.textContent.trim();

                button.disabled = true;
                button.textContent = 'Adding...';

                try {
                    const headers = {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    };

                    if (csrfMeta) {
                        headers['X-CSRF-TOKEN'] = csrfMeta.content;
                    }

                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: headers
                    });

                    const data = await response.json();

                    if (!response.ok || !data.success) {
                        throw new Error(data.message || 'Could not add product.');
                    }

                    const count = document.getElementById('cart-count');

                    if (count) {
                        count.textContent = data.cart_count;
                        count.style.display =
                            Number(data.cart_count) > 0 ? '' : 'none';
                    }

                    button.textContent = 'Added ✓';
                    showCartMessage(data.message || 'Product added to cart!');

                    setTimeout(function () {
                        button.textContent = originalText;
                        button.disabled = false;
                    }, 1200);

                } catch (error) {
                    console.error('Add to cart error:', error);
                    alert(error.message || 'Something went wrong.');
                    button.textContent = originalText;
                    button.disabled = false;
                }
            });

        });

        function showCartMessage(message) {
            let toast = document.getElementById('cart-toast');

            if (!toast) {
                toast = document.createElement('div');
                toast.id = 'cart-toast';

                Object.assign(toast.style, {
                    position: 'fixed',
                    top: '20px',
                    right: '20px',
                    zIndex: '99999',
                    background: '#198754',
                    color: '#fff',
                    padding: '14px 22px',
                    borderRadius: '8px',
                    boxShadow: '0 4px 15px rgba(0,0,0,.2)',
                    maxWidth: 'calc(100vw - 40px)'
                });

                document.body.appendChild(toast);
            }

            toast.textContent = message;
            toast.style.display = 'block';

            clearTimeout(window.cartToastTimer);

            window.cartToastTimer = setTimeout(function () {
                toast.style.display = 'none';
            }, 2500);
        }

    });
    </script>
                    <style>
                .home-search-container {
                    max-width: 650px;
                    margin: 25px auto 35px;
                    padding: 0 15px;
                }

                .home-search-box {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    padding: 8px 12px 8px 20px;
                    background: #fff;
                    border: 1px solid #d8cbb8;
                    border-radius: 50px;
                }

                .home-search-box input {
                    flex: 1;
                    min-width: 0;
                    border: none;
                    outline: none;
                    padding: 12px 0;
                }

                .home-search-box button {
                    background: #171717;
                    color: white;
                    border: none;
                    border-radius: 30px;
                    padding: 11px 18px;
                    cursor: pointer;
                }

                .home-search-box button:hover {
                    background: #8b7355;
                }
                </style>

</body>
</html>
