@extends ('layouts.master')


@section('content')

    @include('layouts.alerts')

    <h2>{{$post->title}}</h2>

    <p class="blog-post-meta"> Created at {{$post->created_at->toFormattedDateString() }} By <a href="#">{{$post->user->name}}</a></p>

    <p>{{$post->body}}</p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}
                    </strong> by {{$comment->name}}
                    <br>
                    {{$comment->body}}
                </li>
            @endforeach
        </ul>

        <!-- Add Comment form -->
        <hr>

        <h3>Add Comment</h3>
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name", id="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <textarea name="body" id="body" cols="30" rows="5" class="form-control" placeholder="your comment here"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>



@endsection