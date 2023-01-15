@extends('layout.business')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="header-text">
                <h1>Edit Product Form</h1>
            </div>
            <form class="form" method="POST" action="{{route('update.product',$product->id)}}">
                @csrf
                <div>
                    <label class="label" for="name">Product Name</label>
                    <input class="input" type="text" name="name" id="name" value="{{old('name',$product->name)}}" required>
                    @error('name')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="price">Product Price</label>
                    <input class="input" type="double" name="price" id="price" value="{{old('price',$product->price)}}" required>
                    @error('price')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="description">Product Description</label>
                    <input class="input" type="text" name="description" id="description" value="{{old('description',$product->description)}}" required>
                    @error('description')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="btn">
                    <input class="submit" type="submit" value="Update">
                </div>
            </form>
        </div>

    </div>
</div>
@endsection