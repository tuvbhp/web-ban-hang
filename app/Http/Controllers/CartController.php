<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        // session()->forget('cart');

        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->feature_image_path,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
    public function showCart()
    {
        $carts = session()->get('cart');
        return view('pages.cart.listCart', compact('carts'));
    }
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartIndex = view('pages.cart.components.tableCart', compact('carts'))->render();
            return response()->json([
                'cartIndex' => $cartIndex,
                'code' => 200,
                'message' => 'success',
            ], 200);
        }
    }
    public function destroyCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartDelete = view('pages.cart.components.tableCart', compact('carts'))->render();
            return response()->json([
                'cart_delete' => $cartDelete,
                'code' => 200,
            ], 200);
        }
    }

}