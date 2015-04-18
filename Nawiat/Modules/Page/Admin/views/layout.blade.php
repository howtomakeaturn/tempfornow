<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="/nawiat/admin/blog/tacit.min.css"> -->
    </head>
    <body>
        @section('sidebar')
            <a href='/admin/page'>Pages</a>
            <a href='/admin/page/new'>New page</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
