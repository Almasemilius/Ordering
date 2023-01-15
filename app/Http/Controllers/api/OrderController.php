<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function postOrder(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'payment_method' => 'required',
        ]);

        $user = User::findOrFail($request->user_id);
        if(!($user->role == 'customer')){
            return response()->json(['error' => 'Only Customers can press Order!'],500);
        }

        $orderNumber = Carbon::now()->format('YimHsd').$request->user_id;

        $data = Order::create(array_merge(['order_number' => $orderNumber],$request->all()));

        if($data){
            return response($data);
        }
    }
}
