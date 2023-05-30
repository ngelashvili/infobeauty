<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <title>{{ config('app.name') }}</title>--}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('resources/package/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
</head>
<body>

<div class="container" id="header">
    <div class="row">
        <nav class="nav navbar pt-4 pb-4">
            <a class="navbar-brand">
                <span>Info</span>
                <span>Beauty</span>
            </a>
            <ul class="navbar-nav mr-auto list-group-horizontal menu">
                <li class="nav-item">
                    <a href="#" class="active nav-link">მთავარი გვერდი</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">აღმოაჩინე</a>

                <li class="nav-item">
                    <a href="#" class="nav-link">შეადარე</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">ჩვენს შესახებ</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">ბლოგი</a>
                </li>
            </ul>
            <div>
                <ul class="navbar-nav list-group-horizontal side-menu">
                    <li>
                        <button class="search">
                            <img src="{{ asset('resources/img/Search.svg') }}" alt="">
                            ძიება
                        </button>
                    </li>
                    <li>
                        <button class="user">
                            <img src="{{ asset('resources/img/account.svg') }}" alt="">
                            შესვლა
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

@yield('content')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="{{ asset('resources/package/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('resources/js/script.js') }}"></script>

</body>
</html>
