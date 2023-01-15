<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function postOrder(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'user_id' => 'required',
            'payment_method' => 'required',
        ]);

        $orderNumber = Carbon::now()->format('YimHsd').$request->user_id;

        $data = Order::create(array_merge(['order_number' => $orderNumber],$request->all()));

        if($data){
            return response($data);
        }
    }
}
