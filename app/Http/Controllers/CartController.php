<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show Cart Page
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    // Calculate Cart Amounts
    private function getCartTotals(array $cart): array
    {
        $subtotal = collect($cart)->sum(function ($item) {
            return (float) $item['price'] * (int) $item['quantity'];
        });

        $delivery = $subtotal > 0 ? 70 : 0;

        return [
            'subtotal'   => (float) $subtotal,
            'delivery'   => (float) $delivery,
            'total'      => (float) ($subtotal + $delivery),
            'cart_count' => (int) collect($cart)->sum('quantity'),
            'empty'      => empty($cart),
        ];
    }

    // Add Product to Cart
    public function add(Request $request)
    {
        $validated = $request->validate([
            'id'       => 'required',
            'name'     => 'required|string',
            'price'    => 'required|numeric|min:0',
            'category' => 'required|string',
            'size'     => 'nullable|string',
            'image'    => 'nullable|string',
        ]);

        $cart = session()->get('cart', []);
        $id = (string) $validated['id'];

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id'       => $id,
                'name'     => $validated['name'],
                'price'    => (float) $validated['price'],
                'category' => $validated['category'],
                'size'     => $validated['size'] ?? 'N/A',
                'image'    => $validated['image'] ?? '',
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        $totals = $this->getCartTotals($cart);

        if ($request->expectsJson()) {
            return response()->json(array_merge($totals, [
                'success' => true,
                'message' => $validated['name'] . ' added to cart!',
            ]));
        }

        return redirect()->route('cart')
            ->with('success', 'Product added to cart!');
    }

    // Remove Product from Cart
    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart', $cart);

        return response()->json(array_merge(
            $this->getCartTotals($cart),
            ['success' => true]
        ));
    }

    // Update Product Quantity
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found.',
            ], 404);
        }

        $quantity = (int) $validated['quantity'];

        $cart[$id]['quantity'] = $quantity;

        session()->put('cart', $cart);

        $totals = $this->getCartTotals($cart);

        return response()->json(array_merge($totals, [
            'success'    => true,
            'quantity'   => $quantity,
            'item_total' => (float) (
                $cart[$id]['price'] * $cart[$id]['quantity']
            ),
        ]));
    }
}
