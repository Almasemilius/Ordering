@extends('layout.main')
@section('content')
<div class="main">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="center">
                <form class="form space" method="post" action="{{route('login')}}">
                    @csrf
                    <div>
                        <label class="label" for="email">Email</label>
                        <input class="input" type="text" name="email" id="email" required>
                    </div>
                    <div>
                        <label class="label" for="password">Password</label>
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                    <div class="btn-group">
                        <div class="btn">
                            <button class="submit" type="submit">Login</button>
                        </div>
                        <div class="btn top-space">
                            <a href="{{route('register.index')}}">Register</a>
                        </div>

                    </div>
                    @if(session()->has('perror'))
                    <div class="errormsg">
                        <p>stop</p>
                    </div>
                    @endif
                </form>
            </div>

        </div>
    </div>
</div>
@endsection