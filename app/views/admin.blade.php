@extends('layout')
@section('content')
<div class="container">
        <div class="col-md-8" <h1>Danh Sach Bai Viet</h1></div>
        <div class="col-md-2"><a href="<?php echo url('logout'); ?>">Dang Xuat</a></div>
        <div class="col-md-2"><a href="<?php echo url('addpage'); ?>">Add Page</a></div>
    <table class="table">
        <thead>
        <tr>

            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($n as $e)
        <tr class="success">
            <td>{{ $e->title_page }}</td>
            <td>{{ $e->des_page }}</td>
            <td><a href="{{URL::to('profile',$e->id_page)}}">Edit</a></td>
            <td><a href="{{URL::to('delete',$e->id_page)}}">Delete</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@stop

