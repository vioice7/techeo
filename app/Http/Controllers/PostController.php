<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Get 10 posts per page, ordered by newest first
        $posts = Post::with('user')->latest()->paginate(10);
        
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home')->with('status', 'Post deleted successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validated);

        return redirect()->route('home')->with('status', 'Post updated successfully!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // This automatically links the post to the logged-in user
        $request->user()->posts()->create($validated);

        return redirect()->route('home')->with('status', 'Post created successfully!');
    }
}
