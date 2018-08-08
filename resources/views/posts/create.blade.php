@extends('layouts.master')
@section('content')

    <form method="POST" action="/posts">
        {{ csrf_field() }}


        @include('layouts.alerts')

        <div class="form-group">
            <label for="exampleFormControlSelect1">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>
@endsection