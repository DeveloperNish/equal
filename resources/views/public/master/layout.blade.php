<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('page-title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    {{ Html::style("css/publiclayout.css") }}
    
    @yield('css')

    @yield('top-scripts')
</head>
<body>
    @yield('main-content')

    @yield('bottom-scripts')
</body>
</html>