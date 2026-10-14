
@extends('layouts.app')

@section('title', 'VELORA - Shopping Cart')

@section('content')

@php
    $subtotal = collect($cart)->sum(function ($item) {
        return (float) $item['price'] * (int) $item['quantity'];
    });

    $delivery = $subtotal > 0 ? 70 : 0;
    $total = $subtotal + $delivery;
    $cartCount = collect($cart)->sum('quantity');
@endphp

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Shopping Cart</h1>
            <p class="text-muted mb-0">Review your selected products.</p>
        </div>

        <button
            class="btn btn-dark position-relative"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#cartOffcanvas"
            aria-controls="cartOffcanvas">
            🛒 Cart

            <span
                id="cart-page-count"
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                style="{{ $cartCount > 0 ? '' : 'display:none;' }}">
                {{ $cartCount }}
            </span>
        </button>
    </div>
</div>

<!-- CART OFFCANVAS -->
<div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="cartOffcanvas"
    aria-labelledby="cartOffcanvasLabel"
    style="width:430px; max-width:100%;">

    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold" id="cartOffcanvasLabel">
            🛒 Your Cart
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close">
        </button>
    </div>

    <div class="offcanvas-body d-flex flex-column">

        <!-- PRODUCTS -->
        <div class="cart-products flex-grow-1">

            @forelse($cart as $item)

                <div
                    class="card border-0 shadow-sm mb-3 cart-item"
                    id="cart-item-{{ $item['id'] }}">

                    <div class="card-body">
                        <div class="d-flex gap-3">

                            <!-- Product Image -->
                            <img
                                src="{{ $item['image'] ?? '' }}"
                                alt="{{ $item['name'] }}"
                                class="rounded"
                                style="width:80px;height:80px;object-fit:cover;"
                                onerror="this.style.visibility='hidden';">

                            <!-- Product Details -->
                            <div class="flex-grow-1">

                                <h6 class="fw-bold mb-1">
                                    {{ $item['name'] }}
                                </h6>

                                <small class="text-muted d-block">
                                    {{ $item['category'] ?? 'Product' }}
                                </small>

                                <small class="text-muted d-block">
                                    Size: {{ $item['size'] ?? 'N/A' }}
                                </small>

                                <div class="fw-bold mt-1">
                                    ৳<span id="item-total-{{ $item['id'] }}">{{ number_format((float) $item['price'] * (int) $item['quantity'], 2) }}</span>
                                </div>

                                <!-- Quantity Controls -->
                                <div class="d-flex align-items-center mt-2">

                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary cart-quantity-btn"
                                        data-id="{{ $item['id'] }}"
                                        data-action="decrease"
                                        aria-label="Decrease quantity"
                                        {{ (int) $item['quantity'] <= 1 ? 'disabled' : '' }}>
                                        −
                                    </button>

                                    <span
                                        class="mx-3 fw-bold"
                                        id="quantity-{{ $item['id'] }}">
                                        {{ $item['quantity'] }}
                                    </span>

                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary cart-quantity-btn"
                                        data-id="{{ $item['id'] }}"
                                        data-action="increase"
                                        aria-label="Increase quantity">
                                        +
                                    </button>

                                </div>
                            </div>

                            <!-- Remove Product -->
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-sm text-danger cart-remove-btn"
                                    data-id="{{ $item['id'] }}"
                                    title="Remove product"
                                    aria-label="Remove {{ $item['name'] }}">
                                    &times;
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            @empty

                <div class="text-center my-5 empty-cart-message">
                    <div class="display-1 mb-3">🛒</div>
                    <h5 class="fw-bold">Your Cart is Empty</h5>
                    <p class="text-muted">
                        You haven't added any products yet.
                    </p>
                    <a href="{{ route('shoes') }}" class="btn btn-dark px-4">
                        Start Shopping
                    </a>
                </div>

            @endforelse

        </div>

        <!-- SUMMARY -->
        <div
            class="border-top pt-3 mt-3"
            id="cart-summary"
            style="{{ count($cart) > 0 ? '' : 'display:none;' }}">

            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Subtotal</span>
                <strong id="cart-subtotal">৳{{ number_format($subtotal, 2) }}</strong>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span class="text-muted">Delivery</span>
                <strong id="cart-delivery">৳{{ number_format($delivery, 2) }}</strong>
            </div>

            <div class="d-flex justify-content-between border-top pt-3 mb-3">
                <strong class="fs-5">Total</strong>
                <strong class="fs-5" id="cart-total">৳{{ number_format($total, 2) }}</strong>
            </div>

            <button class="btn btn-dark w-100 py-2" type="button">
                Proceed to Checkout
            </button>

            <a
                href="{{ route('shoes') }}"
                class="btn btn-outline-dark w-100 mt-2">
                Continue Shopping
            </a>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Automatically open the cart panel on the cart page
    const cartCanvas = document.getElementById('cartOffcanvas');

    if (cartCanvas && window.bootstrap) {
        bootstrap.Offcanvas.getOrCreateInstance(cartCanvas).show();
    }

    const csrfMeta = document.querySelector('meta[name="csrf-token"]');

    // Send AJAX request to Laravel
    async function sendCartRequest(url, method, payload = null) {
        if (!csrfMeta) {
            throw new Error('CSRF token missing. Check layouts/app.blade.php.');
        }

        const options = {
            method: method,
            headers: {
                'X-CSRF-TOKEN': csrfMeta.content,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        };

        if (payload !== null) {
            options.headers['Content-Type'] = 'application/json';
            options.body = JSON.stringify(payload);
        }

        const response = await fetch(url, options);

        let data;

        try {
            data = await response.json();
        } catch (error) {
            throw new Error('Invalid server response. Check CartController.php.');
        }

        if (!response.ok || data.success === false) {
            throw new Error(data.message || 'Cart request failed.');
        }

        return data;
    }

    // Format prices
    function money(amount) {
        const value = Number(amount ?? 0);

        return '৳' + (Number.isFinite(value) ? value : 0)
            .toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
    }

    // Update totals and cart badges
    function updateTotals(data) {
        const subtotal = document.getElementById('cart-subtotal');
        const delivery = document.getElementById('cart-delivery');
        const total = document.getElementById('cart-total');
        const summary = document.getElementById('cart-summary');

        if (subtotal) subtotal.textContent = money(data.subtotal);
        if (delivery) delivery.textContent = money(data.delivery);
        if (total) total.textContent = money(data.total);

        document.querySelectorAll('#cart-count, #cart-page-count')
            .forEach(function (badge) {
                const count = Number(data.cart_count ?? 0);
                badge.textContent = count;
                badge.style.display = count > 0 ? '' : 'none';
            });

        if (summary) {
            summary.style.display = data.empty ? 'none' : '';
        }
    }

    // Show empty cart
    function showEmptyCart() {
        const products = document.querySelector('.cart-products');
        const summary = document.getElementById('cart-summary');

        if (products) {
            products.innerHTML = `
                <div class="text-center my-5 empty-cart-message">
                    <div class="display-1 mb-3">🛒</div>
                    <h5 class="fw-bold">Your Cart is Empty</h5>
                    <p class="text-muted">You haven't added any products yet.</p>
                    <a href="{{ route('shoes') }}" class="btn btn-dark px-4">
                        Start Shopping
                    </a>
                </div>`;
        }

        if (summary) summary.style.display = 'none';
    }

    // Increase / decrease quantity
    document.addEventListener('click', async function (event) {
        const button = event.target.closest('.cart-quantity-btn');

        if (!button || button.disabled) return;

        const id = button.dataset.id;
        const action = button.dataset.action;
        const quantityElement = document.getElementById('quantity-' + id);
        const row = document.getElementById('cart-item-' + id);

        if (!quantityElement || !row) return;

        const currentQuantity = parseInt(quantityElement.textContent.trim(), 10);

        const newQuantity = action === 'increase'
            ? currentQuantity + 1
            : Math.max(1, currentQuantity - 1);

        if (newQuantity === currentQuantity) return;

        const buttons = row.querySelectorAll('.cart-quantity-btn');
        buttons.forEach(function (btn) {
            btn.disabled = true;
        });

        try {
            const data = await sendCartRequest(
                `/cart/update/${encodeURIComponent(id)}`,
                'POST',
                { quantity: newQuantity }
            );

            quantityElement.textContent = data.quantity;

            const itemTotal = document.getElementById('item-total-' + id);

            if (itemTotal) {
                itemTotal.textContent = Number(data.item_total ?? 0)
                    .toLocaleString('en-US', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
            }

            updateTotals(data);

        } catch (error) {
            console.error('Quantity update error:', error);
            alert(error.message || 'Could not update quantity.');
        } finally {
            const quantity = parseInt(quantityElement.textContent.trim(), 10);

            buttons.forEach(function (btn) {
                btn.disabled =
                    btn.dataset.action === 'decrease' && quantity <= 1;
            });
        }
    });

    // Remove product
    document.addEventListener('click', async function (event) {
        const button = event.target.closest('.cart-remove-btn');

        if (!button || button.disabled) return;

        const id = button.dataset.id;
        const row = document.getElementById('cart-item-' + id);

        if (!row) return;

        button.disabled = true;

        try {
            const data = await sendCartRequest(
                `/cart/remove/${encodeURIComponent(id)}`,
                'DELETE'
            );

            row.remove();
            updateTotals(data);

            if (data.empty) {
                showEmptyCart();
            }

        } catch (error) {
            console.error('Remove product error:', error);
            alert(error.message || 'Could not remove product.');
            button.disabled = false;
        }
    });

});
</script>

@endsection
