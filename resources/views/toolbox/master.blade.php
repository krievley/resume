<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Developer Toolbox')</title>
    <link rel='stylesheet' href='{{ asset('css/toolbox/normalize.css') }}'/>
    <link rel='stylesheet' href='{{ asset('css/toolbox/default.css') }}'/>
    <script src="{{ asset('js/jquery-2.1.1.js') }}" type="text/javascript"></script>
    @yield('links')
</head>
<body>
    <div id="header">
        <div class="container">
            @yield('picture')
            @yield('col')
                @yield('h1')
                <h4>
                    <a href="/toolbox" target="_blank">Home</a> | 
                    <a href="/toolbox/loremipsum" target="_blank">Lorem Ipsum</a> | 
                    <a href="/toolbox/user" target="_blank">Random User</a> | 
                    <a href="/toolbox/password" target="_blank">XKCD Password</a> |
                    <a href='/'>Resume Home Page</a>
                </h4>
            </div>
        </div>
        @yield('bar')
    </div>
    @yield('content')
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
</body>
</html>