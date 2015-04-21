@extends('Page/Admin::layout')
@section('content')
<h1>Pages</h1>
@foreach($pages as $page)
    <a href='/admin/page/edit/{{ $page->id }}'>{{ $page->id }}</a>
@endforeach

@stop
