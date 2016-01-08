@foreach($new_edit as $edit)
@extends('layout')
@section('content')

        <form enctype="multipart/form-data" action="{{URL::to('update',$edit->id_page)}}" method="post" name="dang-ky">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title" value="{{ $edit->title_page }}">
            </div>
            <div class="form-group">
                <label>Images</label>
                <input class="form-control" type="file" name="images" >
            </div>
            <div class="form-group">
                <lable>Hình ảnh</lable>
                <div class="imge">
                    <img src="{{asset('/img/')}}/{{$edit->img_page}}" style="    width: 300px;height: 300px;
}">
                </div>
            </div>

            <div class="form-group">
                <label>Content:</label>
                     <textarea rows="" cols="" name="des" id="des">
                        {{ $edit->des_page }}
                     </textarea>
                <script src="/ckeditor/ckeditor.js"></script>
                      <script>
                        CKEDITOR.replace( 'des', {} );
                      </script>
            </div>
            <div class="form-group">
                 <label>Content:</label>
                     <textarea rows="10" cols="140" name="content" id="content">
                         {{ $edit->content_page }}
                     </textarea>
                 <script src="/ckeditor/ckeditor.js"></script>
                     <script>
                         CKEDITOR.replace( 'content', {} );
                     </script>

            </div>
            {{--//<button type="button" class="btn btn-success">Success</button>--}}
            <input type="submit" name="submit" value="Edit page">
        </form>

@stop
@endforeach


