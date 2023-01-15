@extends('layout.main')
@section('content')
    <div class="main">
        <div class="wrapper">
            <div class="content-wapper">
                <div class="header-text">
                    <h1>Order number {{$order->order_number}} Placed Successfully</h1>
                </div>
            </div>
        </div>
    </div>
@endsection