@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4">
    <form action="/login" method="POST">
        <div class="mb-3">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    </div>
</div>

@endsection