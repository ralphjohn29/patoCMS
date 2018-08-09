<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta"> Created at {{$post->created_at->toFormattedDateString() }} By <a href="#">{{$post->user->name}}</a></p>

    <p>{{$post->body}}</p>
    <ul>
        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
        <li>Donec id elit non mi porta gravida at eget metus.</li>
        <li>Nulla vitae elit libero, a pharetra augue.</li>
    </ul>
</div>