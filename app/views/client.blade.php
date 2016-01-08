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
<style type="text/css">
    .con-tit{font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;}
    .item{margin-bottom: 20px;}
</style>
<body>
<div class="container">
    <div class="tt col-md-12"><h2>Bai Viet Noi Bat</h1></div>
    @foreach($new as $cc)


    <div class="item col-md-12">
        <div class="con-lef col-md-4">
            <div class="con-img"><img src="{{asset('/img')}}/{{$cc->img_page}}" style="width:100%;"></div>
        </div>
        <div class="con-rig col-md-8">
            <div class="con-tit"><a href="{{ route('testslug', [ 'id' => $cc->id_page, 'slug' =>Str::slug($cc->title_page)])}}">{{$cc->title_page}}</a></div>
            <div class="con-des">{{$cc->des_page}}</div>
        </div>

    </div>

    @endforeach
    <div class="pag col-md-12" style="text-align: center;">{{ $new->links()}}</div>
</div>
