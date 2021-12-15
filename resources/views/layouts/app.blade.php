<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title",Info::$name)</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>

@guest
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">-
            <div class="col-lg-5">
                @yield('content')
            </div>
        </div>
    </div>

@endguest

@auth

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 bg-white shadow-sm">
                <div class="sidebar min-vh-100  " >
                    <ul>
                        <li class="my-3">
                            <a href="{{ route('home') }}" >
                                <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo" height="50" alt="">
                            </a>
                        </li>
                        <li class="sidebar-spacer"></li>
                        <li>
                            <a href="{{ route('home') }}" class="sidebar-link active">
                                <i class="fas fa-home fa-fw sidebar-link-icon"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="contact-message.html" class="sidebar-link">
                                <i class="fas fa-envelope fa-fw sidebar-link-icon"></i>
                                Contact Messages
                            </a>
                        </li>
                        <li class="sidebar-spacer"></li>
                        <li>
                            <p class="sidebar-group-title">Manage Article</p>
                        </li>
                        <li>
                            <a href="article-create.html" class="sidebar-link">
                                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                                Create Article
                            </a>
                        </li>
                        <li>
                            <a href="article-list.html" class="sidebar-link">
                                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                                Article Lists
                            </a>
                        </li>
                        <li class="sidebar-spacer"></li>
                        <li>
                            <p class="sidebar-group-title">Manage Article</p>
                        </li>
                        <li>
                            <a href="" class="sidebar-link">
                                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                                Create Article
                            </a>
                        </li>
                        <li>
                            <a href="" class="sidebar-link">
                                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                                Article Lists
                            </a>
                        </li>
                        <li class="sidebar-spacer"></li>
                        <li>
                            <p class="sidebar-group-title">Manage Article</p>
                        </li>
                        <li>
                            <a href="" class="sidebar-link">
                                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                                Create Article
                            </a>
                        </li>
                        <li>
                            <a href="" class="sidebar-link">
                                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                                Article Lists
                            </a>
                        </li>
                        <li class="sidebar-spacer"></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="content">
                    <div class="header bg-primary p-2 rounded my-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">

                                <input type="text" class="form-control d-inline me-1">
                                <button class="btn btn-light text-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hein Htet Zan
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

@endauth




<script src="{{ asset('js/app.js') }}"></script>
@yield("foot")
</body>
</html>
