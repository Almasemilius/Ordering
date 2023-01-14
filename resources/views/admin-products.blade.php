@extends('layout.admin')

@section('content')
<div>
    <div>
        <h1>List of Products</h1>
    </div>
    <div>
        <table>
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
                        <a href="{{route('edit.product',$product->id)}}">Edit</a>
                        <a href="{{route('delete.product',$product->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
</div>
@endsection