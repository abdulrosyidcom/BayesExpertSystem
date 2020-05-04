<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('front.posts.index', compact('posts', 'tags', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $posts = Post::latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        if (Post::where('slug', $slug)->first()) {
            $post->increment('view_count');
        }
        return view('front.posts.show', compact('post', 'categories', 'tags', 'posts'));
    }
}
