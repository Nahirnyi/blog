@extends('layout.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Sign In</h1>
        <form method="POST" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>

            @include('layout.errors')
        </form>
    </div>
@endsection