@extends('layout')
@section('content')
 <h1>Kết quả tìm kiếm:<i>"{{Input::get('insearch');}}"</i> </h1>
{{"Tìm thấy ".count($posts)." bài viết phù hợp với từ khóa search của bạn.";}}
<table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $e)
        <tr>
            <td>{{ $e->title_page }}</td>
            <td>{{ $e->des_page }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop