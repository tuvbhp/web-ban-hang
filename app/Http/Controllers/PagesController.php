<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->latest()->paginate(3);
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(3)->get();
        return view('pages.home', compact('sliders', 'categories', 'products'));
    }
    public function show($id)
    {
        $product = Product::find($id);
        $categories = Category::where('parent_id', 0)->get();
        $carts = session()->get('cart');
        return view('pages.cart.productDetail', compact('product', 'categories', 'carts'));
    }

    public function addToCart(Request $request, $id)
    {

        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'image' => $product->feature_image_path,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
}
