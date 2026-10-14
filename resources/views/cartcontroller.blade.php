
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

    // Add Product to Cart
    public function add(Request $request)
    {
        $validated = $request->validate([
            'id'       => 'required',
            'name'     => 'required|string',
            'price'    => 'required|numeric|min:0',
            'image'    => 'nullable|string',
            'category' => 'required|string',
            'size'     => 'nullable|string',
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
                'image'    => $validated['image'] ?? '',
                'category' => $validated['category'],
                'size'     => $validated['size'] ?? 'N/A',
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        $cartCount = collect($cart)->sum('quantity');

        // AJAX request: return JSON without redirect
        if ($request->expectsJson()) {
            return response()->json([
                'success'    => true,
                'message'    => $validated['name'] . ' added to cart!',
                'cart_count' => $cartCount,
            ]);
        }

        // Normal form submission
        return redirect()->route('cart')
            ->with('success', 'Product added to cart!');
    }

    // Remove Product Without Page Reload
    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found.',
            ], 404);
        }

        unset($cart[$id]);

        session()->put('cart', $cart);

        $subtotal = collect($cart)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );

        $delivery = $subtotal > 0 ? 70 : 0;

        return response()->json([
            'success'    => true,
            'cart_count' => collect($cart)->sum('quantity'),
            'subtotal'   => $subtotal,
            'delivery'   => $delivery,
            'total'      => $subtotal + $delivery,
            'empty'      => empty($cart),
        ]);
    }

    // Update Quantity Without Page Reload
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

        $cart[$id]['quantity'] = (int) $validated['quantity'];

        session()->put('cart', $cart);

        $subtotal = collect($cart)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );

        $delivery = $subtotal > 0 ? 70 : 0;

        return response()->json([
            'success'    => true,
            'quantity'   => $cart[$id]['quantity'],
            'item_total' => $cart[$id]['price'] * $cart[$id]['quantity'],
            'subtotal'   => $subtotal,
            'delivery'   => $delivery,
            'total'      => $subtotal + $delivery,
            'cart_count' => collect($cart)->sum('quantity'),
        ]);
    }
}
