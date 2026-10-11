<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        $cart[$id] = [
            'id'       => $request->id,
            'name'     => $request->name,
            'price'    => (int) $request->price,
            'category' => $request->category,
            'size'     => $request->size,
            'image'    => $request->image,
            'quantity' => isset($cart[$id])
                ? $cart[$id]['quantity'] + 1
                : 1,
        ];

        session()->put('cart', $cart);

        return back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return back();
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $quantity = (int) $request->quantity;

            if ($quantity > 0) {
                $cart[$id]['quantity'] = $quantity;
            } else {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);

        return back();    }
}