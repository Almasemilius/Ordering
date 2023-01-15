@extends('layout.app')

@section('content')
<div>
    <div>
        <div>
            <h1>Welcome {{auth()->user()->name}}</h1>
            <p>Please fill your Billing adress and Card Number</p>
        </div>
        <form method="post" action="{{route('post.payment.method')}}">
            @csrf
            <input type="hidden" name="productId" value="{{$productId}}">
            <div>
                <label for="address">Adress</label>
                <input type="text" name="address" id="address">
            </div>
            <div>
                <label for="card">Card Number</label>
                <input type="text" name="card_number" id="card">
            </div>
            <div>
                <label for="expire">Expire</label>
                <input type="date" name="expire_date" id="expire">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
            
        </form>
    </div>
</div>
@endsection