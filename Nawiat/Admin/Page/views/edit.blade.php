@extends('Admin/Page::layout')
@section('content')
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<h1>Edit Page</h1>

<form method='post' action='/admin/page/update'>
    <select name='template'>
        @foreach($templates as $template)
            @if( $template == $page->config['view'] )
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
@stop
