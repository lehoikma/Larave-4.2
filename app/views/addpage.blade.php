@extends('layout')
@section('content')
    <div class="container">
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>
        @endforeach

        <form enctype="multipart/form-data" action="postaddpage" method="post" name="dang-ky">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label>Images</label>
                <input class="form-control" type="file" name="images">
            </div>
            <div class="form-group">
                <label>Desription:</label>
            <textarea rows="5" cols="140" name="des">

            </textarea>
            </div>
            <div class="form-group">
                <label>Content:</label>
            <textarea rows="10" cols="140" name="content1" id="content1">

            </textarea>
                <script src="http://localhost/larave4.2/public/ckeditor/ckeditor.js"></script>
                <script src="http://localhost/larave4.2/public/ckfinder/ckfinder.js"></script>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace( 'content1', {
                        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
                    CKFinder.setupCKEditor( editor, '../' );
                </script>
            </div>

            <input type="submit" name="submit" value="Add page">
        </form>
    </div>
@stop


