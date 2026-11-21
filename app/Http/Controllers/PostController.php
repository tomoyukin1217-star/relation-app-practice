<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('tags')
            ->withCount('comments');

        if ($request->filled('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('name', $request->tag);
            });
        }

        $posts = $query->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load(['tags', 'comments']);

        return view('posts.show', compact('post'));
    }
}