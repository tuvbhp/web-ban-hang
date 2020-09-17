<?php

namespace App\Http\Controllers;

use App\BillDetail;
use Illuminate\Http\Request;

class BillDetailController extends Controller
{
    protected $bill;
    public function __construct(BillDetail $bill)
    {
        $this->bill = $bill;
    }
    public function index()
    {
        $carts = session()->get('cart');
        return view('pages.cart.checkout.checkout', compact('carts'));
    }
    public function store(Request $request)
    {
        $bill = new BillDetail(array(
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $request->phone,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'content' => $request->content,
        ));
        $bill->save();
        return redirect()->route('paymentCart');
    }
    public function payment()
    {
        $carts = session()->get('cart');
        $bills = $this->bill->all();
        return view('pages.cart.checkout.payment', compact('carts', 'bills'));
    }
}