
@extends('layout')
@section('content')
<style>
    .loi{
        color:red;
    }
</style>
<div class="container">

    <label><h1>Login</h1></label>

<form method="POST" action="postlogin">
    <input type="hidden" name="token" value="{{ csrf_token() }}">
    <div class="loi form-group">
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>
        @endforeach
            @if(isset($error_message))
                {{$error_message}}
            @endif
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="text" name="email">
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input class="form-control" type="password" name="password">
    </div>

    <input value="Login" type="submit" name="submit">
</form>
</div>
@stop
