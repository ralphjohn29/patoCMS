<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

//        $achieves = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
//            ->groupBy('year', 'month')
//            ->orderByRaw('min(created_at) desc')
//            ->get()
//            ->toArray();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    { //fetch Post to var $post on Route /posts/{post} must be same var and wildcard

        return view('posts.show', compact('post'));
    }


    public function store()
    {
        // Create a new post using the request data when using store function
        //dd(request()->all());
        //$post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        // allow save and add forms submitted to database with this one line of code
        //but must use protected $guarded or $fillable to Post Model

        auth()->user()->publish(
            new Post(\request(['title', 'body']))
        );

//        Post::create([
//            'title' =>\request('title'),
//            'body' =>\request('body'),
//            'user_id' => auth()->id()
//        ]);
        //save it to the database
        //$post->save();

        //And redirect back to the home page.
        return redirect('/');
    }

    public function users(){


        $user_id = \request('user_id');
        return dd($user_id);
        return view('posts.user');
    }
}
