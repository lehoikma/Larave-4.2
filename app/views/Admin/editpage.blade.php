@extends('layout')
@section('content')
    @foreach($new_edit as $dkm)
            <form enctype="multipart/form-data" action="{{URL::to('update',$dkm->id_page)}}" method="post" name="dang-ky">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $dkm->title_page }}">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input class="form-control" type="file" name="images" >
                </div>
                <div class="form-group">
                    <lable>Hình ảnh</lable>
                    <div class="imge">
                        <img src="http://localhost/larave4.2/public/img/{{$dkm->img_page}}" style="    width: 300px;height: 300px;
    }">
                    </div>
                </div>
                <div class="form-group">
                    <label>Desription:</label>
                <textarea rows="5" cols="140" name="des">{{ $dkm->des_page }}</textarea>
                </div>
                <div class="form-group">
                    <label>Content:</label>
                <textarea rows="10" cols="140" name="content">{{ $dkm->content_page }}</textarea>
                </div>
                <input type="submit" name="submit" value="Edit page">
            </form>

    @endforeach




@stop