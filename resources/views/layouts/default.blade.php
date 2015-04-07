<!doctype html>
<html>

    <head>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <title>Your first Web project</title>
        <meta charset="UTF-8">
        <meta name="publishable-key" content="{{ Config::get('development.stripe.publishable_key') }}">
    </head>

    <body>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="https://js.stripe.com/v2/"></script>
    @yield('footer')
    </body>

</html>