<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> کتابخانه علامه فیضانی </title>
	<meta name="description" content="nozha admin panel fully support rtl with complete dark mode css to use. ">
	<meta name=”robots” content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="{{ asset('css/fontawsome/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('DropdownSearch.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    
</head>

<body class="rtl persianumber">

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        <header class="bmd-layout-header ">
            <div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
                <button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
                    data-toggle="drawer" data-target="#dw-s1">
                    <span class="navbar-toggler-icon"></span>
                    <!-- <i class="material-Animation">menu</i> -->
                </button>
                  <div class="text-center text-info">
                    <h3> کتابخانه مولانا علامه فیضانی </h3>
                  </div>
                <ul class="nav navbar-nav p-0">
                    
                    <li class="nav-item"> <img src="{{ auth()->user()->image }}" alt="..."
                            style="height:50px; width:50px; border-radius:30px;"></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                            <div aria-labelledby="dropdownMenu4"
                                class="dropdown-menu  pl-3 dropdown-menu-right dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" href="change_profile"><i
                                        class="far fa-user c-main fa-sm mr-2"></i>تغیر پروفایل </a>
                                <button onclick="dark()" class="dropdown-item" type="button"><i
                                        class="fas fa-moon fa-sm c-main mr-2"></i>حالت شب</button>
                                <a class="dropdown-item" href="ChangePassword"><i
                                        class="fas fa-cog c-main fa-sm mr-2"></i> تغیر رمز </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>خروج</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                            </div>
                        </div>
                    </li>




                </ul>
            </div>
        </header>

