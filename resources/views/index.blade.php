@extends('layout.main')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="header-text">
                <h1>List of Products</h1>
            </div>
            <div class="card-wrapper">
                <!-- <table>
                    <tr>
                        <th>
                            S/N
                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Product Price
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    <tbody>
                        @foreach ($products as $key=>$product)
                        <tr>
                            <td>
                                {{$key +1}}
                            </td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                <a href="{{route('order.product',$product->id)}}">Order</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> -->
                @foreach ($products as $key=>$product)
                <div class="product-card">
                    
                    <span class="product-name">
                        {{$product->name}}
                    </span>
                    <span class="product-price">
                        {{number_format($product->price)}}
                    </span>
                    <div class="btn">
                        <a href="{{route('order.product',$product->id)}}">Order</a>
                    </div>
                </div>
                @endforeach
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection