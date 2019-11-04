<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="xxxxx">
    <meta name="apple-mobile-web-app-title" content="xxxxx">
    {{--{!! HTML::script(asset_cdn('js/vendor/jquery.min.js')) !!}--}}
    {{--{!! HTML::script(asset_cdn('js/vendor/bootstrap.min.js')) !!}--}}
    {{--{!! HTML::script(asset_cdn('vendor/jsvalidation/js/jsvalidation.js')) !!}--}}
    @yield('head')
    <title>@yield('title') | XXXXXXXXX</title>
</head>

<body>
    <div id="zf-wrap">
        <div id="app">
            @include("includes.header")
            <main id="zf-main-content">
                @yield('content')
                @include("includes.footer")
            </main>
        </div>
    </div>
    {{--{!! HTML::script(mix_cdn('js/frontend.js')) !!}--}}
</body>

</html>
