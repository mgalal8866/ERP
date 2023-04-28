<!DOCTYPE html>
<html class="loading bordered-layout" lang="{{ App::getLocale() }}"
        data-textdirection="{{ LaravelLocalization::getCurrentLocaleDirection() }}"
        dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{-- <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui"> --}}
        <meta name="description" content="admin template, ">
        <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="Mohamed Galal">
        <title>@yield('Dashborad','Dashborad')</title>
        @include('layouts.Dashboard.head')
        @livewireStyles()
        @yield('css')
        <style>
            .navigation .navigation-header ,.navigation ,.header-navbar,body {
                font-family: 'Cairo', 'sans-serif' !important;
            }
        </style>
    </head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    @include('layouts.Dashboard.nav')
    @include('layouts.Dashboard.menu')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            {{-- <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Dashborad</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Layouts</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashborad
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="app-email.html"><i class="me-1"
                                        data-feather="mail"></i><span class="align-middle">Email</span></a><a
                                    class="dropdown-item" href="app-calendar.html"><i class="me-1"
                                        data-feather="calendar"></i><span class="align-middle">Calendar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="content-body">
                @yield('content')
                @isset($slot)
                {{$slot}}
                @endisset
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.Dashboard.footer')
    <!-- END: Footer-->
    @include('layouts.Dashboard.script')
    @livewireScripts()
    @yield('js')

</body>
<!-- END: Body-->

</html>
