@extends('layout.app')
@section('content')
<div>
    <div>
        <div>
            <p>You are about to buy a <b> {{$product->name}}</b> for <b>Tsh. {{$product->price}} /=</b>. Please Confirm your payment Method.</p>
        </div>

        <a href="{{route('confirm.order',$product->id)}}">Cash</a>
        <a href="">Card</a>
    </div>
</div>
@endsection