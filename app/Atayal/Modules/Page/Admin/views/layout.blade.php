<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="/nawiat/admin/blog/tacit.min.css"> -->
    </head>
    <body>
        @section('sidebar')
            <a href='/admin/page'>{{ Lang::get('Page/Admin::all.pages') }}</a>
            <a href='/admin/page/new'>{{ Lang::get('Page/Admin::all.new-page') }}</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
