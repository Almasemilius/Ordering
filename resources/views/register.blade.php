@extends('layout.main')

@section('content')
<div>
    <form method="post" action="{{route('register')}}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="phoneNumber">Phone Number</label>
            <input type="text" name="phoneNumber" id="phoneNumber" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="passwordConfirm">Confirm Password</label>
            <input type="password" name="passwordConfirm" id="passwordConfirm" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
@endsection