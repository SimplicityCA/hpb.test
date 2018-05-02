<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>High Power Brake</title>
        <meta name="description" content="High Power Brake se especializa en repuestos para el sistema de frenado. Contamos con pastillas de freno y zapatas de freno aprobadas en certificaciones nacionales e internacionales que le brindarán una mejor experiencia de manejo." />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ee482d">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div id='app'>
            <site-menu></site-menu>
            <!-- <file-upload></file-upload> -->
            <!-- <layout></layout> -->
            <router-view :key="$route.fullPath"></router-view>
            <contact-form></contact-form>
            <site-footer></site-footer>
        </div>
        
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</html>
