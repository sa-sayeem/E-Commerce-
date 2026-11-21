@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-heading', 'Dashboard')

@section('content')

<div class="mb-4">
    <h4 class="fw-bold">Welcome to VELORA Admin</h4>
    <p class="text-secondary mb-0">
        Here's what's happening with your store today.
    </p>
</div>

<!-- Analytics Cards -->
<div class="row g-4">

    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-secondary mb-2">Total Sales</p>
                        <h3 class="fw-bold">৳0</h3>
                    </div>
                    <div class="bg-primary-subtle text-primary rounded-3 p-3">
                        <i class="bi bi-currency-dollar fs-4"></i>
                    </div>
                </div>
                <small class="text-secondary">Store revenue</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-secondary mb-2">Total Orders</p>
                        <h3 class="fw-bold">0</h3>
                    </div>
                    <div class="bg-success-subtle text-success rounded-3 p-3">
                        <i class="bi bi-cart-check fs-4"></i>
                    </div>
                </div>
                <small class="text-secondary">All orders</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-secondary mb-2">Total Products</p>
                        <h3 class="fw-bold">0</h3>
                    </div>
                    <div class="bg-warning-subtle text-warning rounded-3 p-3">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                </div>
                <small class="text-secondary">Available products</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-secondary mb-2">Total Customers</p>
                        <h3 class="fw-bold">0</h3>
                    </div>
                    <div class="bg-info-subtle text-info rounded-3 p-3">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
                <small class="text-secondary">Registered customers</small>
            </div>
        </div>
    </div>

</div>

<!-- Recent Orders -->
<div class="card border-0 shadow-sm rounded-3 mt-4">

    <div class="card-header bg-white border-0 p-4">
        <h5 class="fw-bold mb-0">Recent Orders</h5>
    </div>

    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5" class="text-center py-5 text-secondary">
                            <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                            No orders available yet.
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection
