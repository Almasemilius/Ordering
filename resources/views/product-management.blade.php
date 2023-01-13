@extends('layout.business-layout')

@section('content')
<div class="wrapper">
    <div>
        <div class="product-form">
            <h1>Add Product Form</h1>
        </div>
        <form method="POST" action="{{route('post.product')}}">
            @csrf
            <div>
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="price">Product Price</label>
                <input type="double" name="price" id="price" required>
            </div>
            <div>
                <label for="description">Product Description</label>
                <input type="text" name="description" id="description" required>
            </div>
            <div>
                <input type="submit" value="Add Product">
            </div>
        </form>
    </div>
    
</div>
@endsection