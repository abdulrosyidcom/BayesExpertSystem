<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $post->id,
            'comment' => $request->comment,
            'is_active' => 1
        ]);

        return redirect('blog/' . $post->slug)->with('toast_success', 'Komentar Berhasil Ditambahkan');
    }
}
