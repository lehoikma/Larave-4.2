@extends('layout')
@section('content')
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $e)
        <tr>
            <td>{{ $e->title_page }}</td>
            <td>{{ $e->des_page }}</td>
            <td><a href="{{URL::to('editpage',$e->id_page)}}">Edit</a></td>
            <td><a href="{{URL::to('delete',$e->id_page)}}">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@stop