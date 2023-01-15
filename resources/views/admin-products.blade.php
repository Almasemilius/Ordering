@extends('layout.business')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="header-text">
                <h1>List of Products</h1>
            </div>
            <div class="card-wrapper">

                @foreach ($products as $key=>$product)
                <div class="product-card">

                    <span class="product-name">
                        {{$product->name}}
                    </span>
                    <span class="product-price">
                        {{number_format($product->price)}}
                    </span>
                    <div class="btn-group">
                        <div class="btn">
                            <a href="{{route('edit.product',$product->id)}}">Edit</a>

                        </div>
                        <div class="btn">
                            <a href="{{route('delete.product',$product->id)}}">Delete</a>

                        </div>
                    </div>
                </div>
                @endforeach
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection