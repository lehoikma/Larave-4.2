@extends('layout')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Categories</h1>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <form enctype="multipart/form-data" action="post-cate" method="post" name="dang-ky">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                 <label>Cate-Name</label>
                                 <input class="form-control" type="text" name="catename">
                            </div>
                            <input type="submit" name="submit" value="Add Cate">
                    </div>
                        </form>
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
