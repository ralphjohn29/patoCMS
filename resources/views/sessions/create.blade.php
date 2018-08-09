@extends('layouts.master')

@section('content')
    <h2>Sign In</h2>

    @include('layouts.alerts')
    <form action="/login" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="email">Email Address: </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>

    </form>
@endsection