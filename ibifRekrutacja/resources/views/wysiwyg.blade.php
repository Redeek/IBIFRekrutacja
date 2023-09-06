
@extends('templates.header')
<head>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <title>Wysiwyg</title>
</head>

@section('content')
<div class="w-50">
    <div id="editor" > </div>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    
@endsection


