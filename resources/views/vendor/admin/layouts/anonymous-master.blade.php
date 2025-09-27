<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ core()->getCurrentLocale()->direction }}">
    <head>
        <title>@yield('page_title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
        >

        <link rel="stylesheet" href="{{ asset('vendor/webkul/admin/assets/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">

        @stack('css')
    </head>

    <body @if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif>
        <div id="app" class="anonymous-layout-container">
            <div class="center-box">
                <div class="aside-nav">

                <img class="logo" src="{{ asset('logo-threemind.png') }}" alt="Threemind" />
                  
                </div>

                <div class="content-container">
                    @yield('content')

                    <p class="footer">
                        Desenvolvido por Threemind
                    </p>
                </div>
            </div>
        </div>

        @stack('scripts')
    </body>
</html>
