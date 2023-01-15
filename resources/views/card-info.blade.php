@extends('layout.main')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="header-text">
                <h1>Welcome {{auth()->user()->name}}</h1>
            </div>
            <div class="info-text">
                <p>Please fill your Billing adress and Card Number</p>

            </div>
            <form class="form" method="post" action="{{route('post.payment.method')}}">
                @csrf
                <input type="hidden" name="productId" value="{{$productId}}">
                <div>
                    <label class="label" for="address">Adress</label>
                    <input class="input" type="text" name="address" id="address">
                    @error('address')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="card">Card Number</label>
                    <input class="input type="text" name="card_number" id="card">
                    @error('card_number')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="label" for="expire">Expire</label>
                    <input class="input" type="date" name="expire_date" id="expire">
                    @error('expire_date')
                        <div class="errormsg">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="btn">
                    <button class="submit" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection