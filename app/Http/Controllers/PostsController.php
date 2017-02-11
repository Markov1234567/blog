<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {


        $posts = Post::latest()
            ->filter(request(['month', 'year']))->paginate(5);

// temporary



        return view('posts.index', compact('posts'  ));

    }


    public function show(Post $post)
    {
        # code...

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        # code...


        return view('posts.create');

    }

    public function store()

    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',

        ]);
        $post = new Post(request(['title', 'body']));
        auth()->user()->publish(
         $post
        );



        $names_of_tags = request('tags');

         foreach ($names_of_tags as $name){
             $tag = Tag::where('name', $name)->first();

            $post->tags()->attach($tag->id);
        }

    // dd(    Tag::where('name', )->get());

        // $tags = Tag::create(request('tags'));







        session()->flash('message', 'Your post has now been published');

        return redirect('/');
    }

}
