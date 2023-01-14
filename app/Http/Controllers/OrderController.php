<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pressOrder($productId)
    {
        if(auth()->user()){
            $product = Product::findOrFail($productId);
           return view('order-methods',compact('product'));
        }else{
            return redirect()->route('login.index');
        }
    }

    public function confirmOrder($productId)
    {
        $order = Order::create(
           [ 
            'order_number' => Carbon::now()->format('YimHsd'),
            'product_id' => $productId,
            'user_id' => auth()->user()->id,
            'payment_method' => 'cash'
           ]
        );
    }
}
