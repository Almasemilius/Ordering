<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
 
    public function getProducts(Request $request)
    {
        $limit = $request->limit;
        $data = Product::query();

        $data = $data->paginate($limit ? $limit : 25);

        return response()->json($data);
    }

    public function postProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
 
        $data = Product::create($request->all());

        if($data){
            return response()->json($data);
        }


    }

    public function editProduct(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        
        $data->update($request->all());

        if($data){
            return response()->json($data);
        }

    }

    public function deleteProduct(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        
        $data->delete();

        return response()->json("Deleted Successful");
    }
}
