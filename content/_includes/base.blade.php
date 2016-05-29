<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <meta name="format-detection" content="telephone=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-touch-icon-57x57.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-touch-icon-60x60.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-touch-icon-72x72.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-touch-icon-76x76.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-touch-icon-114x114.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-touch-icon-120x120.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-touch-icon-144x144.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-touch-icon-152x152.png?v=allb2kW4WL">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon-180x180.png?v=allb2kW4WL">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-32x32.png?v=allb2kW4WL" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/icons/android-chrome-192x192.png?v=allb2kW4WL" sizes="192x192">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-96x96.png?v=allb2kW4WL" sizes="96x96">
    <link rel="icon" type="image/png" href="/assets/icons/favicon-16x16.png?v=allb2kW4WL" sizes="16x16">
    <link rel="manifest" href="/assets/icons/manifest.json?v=allb2kW4WL">
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg?v=allb2kW4WL" color="#344952">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico?v=allb2kW4WL">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/assets/icons/mstile-144x144.png?v=allb2kW4WL">
    <meta name="msapplication-config" content="/assets/icons/browserconfig.xml?v=allb2kW4WL">
    <meta name="theme-color" content="#344952">

    <link rel="stylesheet" href="@url('/assets/styles/style.css')">
</head>

<body>
    @yield('body')
</body>
</html>