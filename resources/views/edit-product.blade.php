@extends('layout.business-layout')

@section('content')
<div class="wrapper">
    <div>
        <div class="product-form">
            <h1>Edit Product Form</h1>
        </div>
        <form method="POST" action="{{route('update.product',$product->id)}}">
            @csrf
            <div>
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" value="{{old('name',$product->name)}}" required>
            </div>
            <div>
                <label for="price">Product Price</label>
                <input type="double" name="price" id="price" value="{{old('price',$product->price)}}" required>
            </div>
            <div>
                <label for="description">Product Description</label>
                <input type="text" name="description" id="description" value="{{old('description',$product->description)}}" required>
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
    
</div>
@endsection