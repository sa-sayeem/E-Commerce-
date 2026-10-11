
@extends('layouts.app')

@section('title', 'VAYRO - Shopping Cart')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Shopping Cart</h1>
            <p class="text-muted mb-0">
                Review your selected products.
            </p>
        </div>

        <button
            class="btn btn-dark position-relative"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#cartOffcanvas"
            aria-controls="cartOffcanvas"
        >
            🛒 Cart

            @if(count($cart) > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ count($cart) }}
                </span>
            @endif
        </button>
    </div>

</div>


<!-- ================================================= -->
<!-- CART OFFCANVAS -->
<!-- ================================================= -->

<div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="cartOffcanvas"
    aria-labelledby="cartOffcanvasLabel"
    style="width: 430px;"
>

    <!-- Header -->
    <div class="offcanvas-header border-bottom">

        <h5
            class="offcanvas-title fw-bold"
            id="cartOffcanvasLabel"
        >
            🛒 Your Cart
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>

    </div>


    <!-- Body -->
    <div class="offcanvas-body d-flex flex-column">

        @if(count($cart) > 0)

            <!-- ================= PRODUCTS ================= -->

            <div class="cart-products flex-grow-1">

                @foreach($cart as $item)

                    <div class="card border-0 shadow-sm mb-3">

                        <div class="card-body">

                            <div class="d-flex gap-3">

                                <!-- Image -->

                                <img
                                    src="{{ $item['image'] }}"
                                    alt="{{ $item['name'] }}"
                                    class="rounded"
                                    style="
                                        width: 80px;
                                        height: 80px;
                                        object-fit: cover;
                                    "
                                >


                                <!-- Product Information -->

                                <div class="flex-grow-1">

                                    <h6 class="fw-bold mb-1">
                                        {{ $item['name'] }}
                                    </h6>

                                    <small class="text-muted d-block">
                                        {{ $item['category'] }}
                                    </small>

                                    <small class="text-muted d-block">
                                        Size: {{ $item['size'] }}
                                    </small>

                                    <div class="fw-bold mt-1">
                                        ৳{{ number_format($item['price']) }}
                                    </div>


                                    <!-- Quantity -->

                                    <div class="d-flex align-items-center mt-2">

                                        <!-- Minus -->

                                        <form
                                            action="{{ route('cart.update', $item['id']) }}"
                                            method="POST"
                                        >
                                            @csrf

                                            <input
                                                type="hidden"
                                                name="quantity"
                                                value="{{ max(1, $item['quantity'] - 1) }}"
                                            >

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-secondary"
                                            >
                                                −
                                            </button>

                                        </form>


                                        <span
                                            class="mx-3 fw-bold"
                                        >
                                            {{ $item['quantity'] }}
                                        </span>


                                        <!-- Plus -->

                                        <form
                                            action="{{ route('cart.update', $item['id']) }}"
                                            method="POST"
                                        >
                                            @csrf

                                            <input
                                                type="hidden"
                                                name="quantity"
                                                value="{{ $item['quantity'] + 1 }}"
                                            >

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-secondary"
                                            >
                                                +
                                            </button>

                                        </form>

                                    </div>

                                </div>


                                <!-- Remove -->

                                <form
                                    action="{{ route('cart.remove', $item['id']) }}"
                                    method="POST"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm text-danger"
                                        title="Remove"
                                    >
                                        ×
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


            <!-- ================= SUMMARY ================= -->

            @php

                $subtotal = 0;

                foreach ($cart as $item) {
                    $subtotal +=
                        $item['price'] *
                        $item['quantity'];
                }

                $delivery = $subtotal > 0 ? 70 : 0;

                $total = $subtotal + $delivery;

            @endphp


            <div class="border-top pt-3 mt-3">

                <div class="d-flex justify-content-between mb-2">

                    <span class="text-muted">
                        Subtotal
                    </span>

                    <strong>
                        ৳{{ number_format($subtotal) }}
                    </strong>

                </div>


                <div class="d-flex justify-content-between mb-3">

                    <span class="text-muted">
                        Delivery
                    </span>

                    <strong>
                        ৳{{ number_format($delivery) }}
                    </strong>

                </div>


                <div
                    class="d-flex justify-content-between border-top pt-3 mb-3"
                >

                    <strong class="fs-5">
                        Total
                    </strong>

                    <strong class="fs-5">
                        ৳{{ number_format($total) }}
                    </strong>

                </div>


                <button
                    class="btn btn-dark w-100 py-2"
                    type="button"
                >
                    Proceed to Checkout
                </button>


                <a
                    href="{{ route('shoes') }}"
                    class="btn btn-outline-dark w-100 mt-2"
                >
                    Continue Shopping
                </a>

            </div>

        @else

            <!-- ================= EMPTY CART ================= -->

            <div
                class="text-center my-auto"
            >

                <div
                    class="display-1 mb-3"
                >
                    🛒
                </div>

                <h5 class="fw-bold">
                    Your Cart is Empty
                </h5>

                <p class="text-muted">
                    You haven't added any products yet.
                </p>

                <a
                    href="{{ route('shoes') }}"
                    class="btn btn-dark px-4"
                >
                    Start Shopping
                </a>

            </div>

        @endif

    </div>

</div>


<!-- ================================================= -->
<!-- AUTO OPEN OFFCANVAS -->
<!-- ================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const cartCanvas =
        document.getElementById('cartOffcanvas');

    if (cartCanvas) {

        const offcanvas =
            new bootstrap.Offcanvas(cartCanvas);

        // Automatically open cart
        // when cart page loads

        offcanvas.show();

    }

});

</script>

@endsection
```
