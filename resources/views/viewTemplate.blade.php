<!doctype html>
<html>
    <head>
        <meta charset='utf8'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class='container'>
            <div class='jumbotron'>
                <h1>@yield('cabecalho')</h1>
            </div>
            @yield('corpo')
        </div>
    </body>
</html>

