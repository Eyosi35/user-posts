<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = $request->user()->posts;

        return response()->json([
            'posts' => PostResource::collection($posts),
        ]);
    }
    public function store(StorePostRequest $request)
    {
        $post = $request->user()->posts()->create($request->validated());

        return response()->json([
            'message' => 'Post created successfully',
            'post' => new PostResource($post),
        ], 201);
    }

    public function show(Request $request, Post $post)
    {
    if ($post->user_id !== $request->user()->id) {
        return response()->json([
            'message' => 'This action is unauthorized.',
        ], 403);
    }

    return response()->json([
        'post' => new PostResource($post)
    ]);
}
}