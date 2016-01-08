@extends('layout')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Page</h1>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <form enctype="multipart/form-data" action="postaddpage" method="post" name="dang-ky">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label>File input</label>
                                <input type="file" name="images" >
                            </div>
                            <div class="form-group">
                                 <label>Categories:</label>
                                 <select name="cate">
                                    @foreach($add as $key)
                                        <option value="{{$key->cate_id}}">{{$key->cate_name}}</option>
                                    @endforeach
                                 </select>
                            </div>

                            <div class="form-group">
                                <label>Desription:</label>
                                <textarea rows="5" cols="140" name="des" id="des">
                                </textarea>
                                <script src="/ckeditor/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace( 'des', {} );
                                </script>
                            </div>

                            <div class="form-group">
                                <label>Content:</label>
                                <textarea rows="10" cols="140" name="content" id="content">
                                </textarea>
                               <script src="/ckeditor/ckeditor.js"></script>

                                <script>
                                    CKEDITOR.replace( 'content', {} );
                                </script>

                            </div>
                            <input type="submit" name="submit" value="Add page">

                    </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
            @stop
    </div>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
