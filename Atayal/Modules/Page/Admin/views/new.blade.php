@extends('Admin/Page::layout')
@section('content')
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<h1>New Page</h1>

<form method='post' action='/admin/page/new'>
    <select name='template'>
        @foreach($templates as $template)
            <option value='{{ $template }}'>{{ $template }}</option>        
        @endforeach
    </select>

    <br />
    <br />
    <input type='text' name='id' />
    <textarea name="content" id="editor1" rows="10" cols="80"></textarea>
    <input type='submit' value='Create' />
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</form>
@stop
