@extends('layout.main')

@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper space">
            <div class="center">
                <form class="form" method="post" action="{{route('register')}}">
                    @csrf
                    <div>
                        <label class="label" for="name">Name</label>
                        <input class="input" type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label class="label" for="phoneNumber">Phone Number</label>
                        <input class="input" type="text" name="phoneNumber" id="phoneNumber" required>
                    </div>
                    <div>
                        <label class="label" for="email">Email</label>
                        <input class="input" type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label class="label" for="password">Password</label>
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label class="label" for="passwordConfirm">Confirm Password</label>
                        <input class="input" type="password" name="passwordConfirm" id="passwordConfirm" required>
                    </div>
                    <div class="btn">
                        <button class="submit" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection