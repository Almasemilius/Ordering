@extends('layout.business')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="header-text">
                <h1>Add Product Form</h1>
            </div>
           <div class="center">
           <form class="form" method="POST" action="{{route('post.product')}}">
                @csrf
                <div>
                    <label class="label" for="name">Product Name</label>
                    <input class="input" type="text" name="name" id="name">
                    @error('name')
                    <div class="errormsg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="price">Product Price</label>
                    <input class="input" type="double" name="price" id="price">
                    @error('price')
                    <div class="errormsg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="description">Product Description</label>
                    <input class="input" type="text" name="description" id="description">
                    @error('description')
                    <div class="errormsg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="btn">
                    <input class="submit" type="submit" value="Add Product">
                </div>
            </form>
           </div>
        </div>

    </div>
</div>
@endsection