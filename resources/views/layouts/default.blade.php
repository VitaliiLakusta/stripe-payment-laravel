<!doctype html>
<html>

    <head>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <title>Your first Web project</title>
        <meta charset="UTF-8">
    </head>

    <body>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://js.stripe.com/v2/"></script>
    @yield('footer')
    </body>

</html>