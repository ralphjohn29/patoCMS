@extends ('layouts.master')

@section('content')

    @foreach($posts as $post) <!-- get all collection posts from controller to call the data -->
        @include('posts.post')
    @endforeach


    <!-- /.blog-pagination -->
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@endsection