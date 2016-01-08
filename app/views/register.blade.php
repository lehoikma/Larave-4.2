@extends('layout')
@section('content')
    <div class="container">
        @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
    <form action="{{ route('postdangkyy') }}" method="post" name="dang-ky">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>First Name:</label>
            <input class="form-control" type="text" name="firstname">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input class="form-control" type="text" name="lastname">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input class="form-control" type="text" name="password">
        </div>
        <input type="submit" name="submit" value="Thêm">
</form>
    </div>
@stop

