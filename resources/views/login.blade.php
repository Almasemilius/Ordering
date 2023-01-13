@extends('layout.main')
@section('content')
<div class="wrapper">
    <form method="post" action="{{route('login')}}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
@endsection