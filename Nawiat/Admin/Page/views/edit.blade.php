@extends('Admin/Page::layout')
@section('content')
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<h1>Edit Page</h1>

<form method='post' action='/admin/page/update'>
    <input type='hidden' name='pageId' value='{{ $pageId }}' />
    <textarea name="content" id="editor1" rows="10" cols="80">{{ $page }}</textarea>
    <input type='submit' value='Save' />
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</form>
@stop
