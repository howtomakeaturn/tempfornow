@extends('Admin/Page::layout')
@section('content')
<h1>Pages</h1>
@foreach($pages as $page)
    <a href='/admin/page/edit/{{ $page }}'>{{ $page }}</a>
@endforeach

@stop
