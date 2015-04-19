@extends('Admin/Page::layout')
@section('content')
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<h1>{{ $page->id }}</h1>
<a href='/page/view/{{ $page->id }}'>view</a>
<form method='post' action='/admin/page/update'>
    <select name='template'>
        @foreach($templates as $template)
            @if( $template == $page->config['template'] )
                <option selected value='{{ $template }}'>{{ $template }}</option>                
            @else
                <option value='{{ $template }}'>{{ $template }}</option>        
            @endif
        @endforeach
    </select>

    <br />
    <br />

    <input type='hidden' name='pageId' value='{{ $page->id }}' />
    <textarea name="content" id="editor1" rows="10" cols="80">{{ $page->content }}</textarea>
    <input type='submit' value='Save' />
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</form>
<form method='post' action='/admin/page/delete'>
    <input type='hidden' name='pageId' value='{{ $page->id }}' />
    <input type='submit' value='Delete' />
</form>
@stop
