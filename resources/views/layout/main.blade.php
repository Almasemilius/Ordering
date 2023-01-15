<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="">
    <nav class="nav main">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    @if (auth()->user())
                    <a href="{{route('logout')}}">Logout</a>
                    @else
                    <a href="{{route('login.index')}}">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>