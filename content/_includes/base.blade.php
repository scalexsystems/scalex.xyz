<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="@url('/assets/styles/style.css')">
</head>

<body>
    @yield('body')
</body>
</html>