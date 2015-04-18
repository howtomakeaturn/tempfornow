@extends('Admin/Blog::layout')
@section('content')

<script src='https://cdnjs.cloudflare.com/ajax/libs/markdown-it/4.1.1/markdown-it.js'></script>

<h1>Preview</h1>
<div id='out'></div>

<script>
    var md = window.markdownit();

    var result = md.render('# markdown-it rulezz!');

    var out = document.getElementById('out');    

    out.innerHTML = md.render(result);
</script>

@stop
