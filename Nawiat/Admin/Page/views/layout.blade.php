<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="/nawiat/admin/blog/tacit.min.css"> -->
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
            <a href='/admin/blog/new'>New page</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
