@extends('layout.main')
@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div>
                <h1 class="header-text">Payment Method</h1>
                <p class="info-text">You are about to buy a <b> {{$product->name}}</b> for <b>Tsh. {{number_format($product->price)}} /=</b>. Please Confirm your payment Method.</p>
            </div>
            <div class="btn-group">
                <div class="btn">
                    <a href="{{route('confirm.order',$product->id)}}">Cash</a>
                </div>
                <div class="btn">
                    <a href="{{route('card.info',$product->id)}}">Card</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection