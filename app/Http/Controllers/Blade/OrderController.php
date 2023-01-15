<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\UserInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function cardInfo($productId)
    {
        // dd($productId);
        return view('card-info',compact('productId'));
    }

    public function createPaymentMethod(Request $request)
    {
        $data = DB::transaction(function() use($request){

            $userInfo = UserInformation::create(array_merge($request->all(),['user_id' => auth()->user()->id]));

            $this->createOrder($request->productId,"card");
        });
    }

    public function confirmOrder($productId)
    {
        $this->createOrder($productId, "cash");
    }

    public function createOrder($productId, $paymentMethod)
    {
        $order = Order::create(
            [ 
             'order_number' => Carbon::now()->format('YimHsd').auth()->user()->id,
             'product_id' => $productId,
             'user_id' => auth()->user()->id,
             'payment_method' => $paymentMethod
            ]
         );
    }
}
