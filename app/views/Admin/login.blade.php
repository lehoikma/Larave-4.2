<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="Vu Quoc Tuan">
    <title>Admin - Hội LV</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{Asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css');}}" rel="stylesheet">



    <!-- Bootstrap Core JavaScript -->
    <script src="{{Asset('/admin/bower_components/bootstrap/dist/js/bootstrap.min.js');}}"></script>



</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="loi form-group " style="margin-left: 20px;padding-top: 10px;color: red;font-style: normal;">
                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>
                        @endforeach
                        @if(isset($error_message))
                            {{$error_message}}
                        @endif
                    </div>
                    <div class="panel-body">
                        <form role="form" action="postlogin" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
