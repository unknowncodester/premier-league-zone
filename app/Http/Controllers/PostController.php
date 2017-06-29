<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return response()
            ->json(['data' => $posts], 200);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return response()
            ->json(['data' => $post], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|String|max:255',
            'body' => 'required|String|max:255',
            'user_id' => 'required|int',
            'topic_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            return response()
                ->json($validator->errors()->all(), 400);
        }


        $post = Post::create($request->all());


        return response()
            ->json(['data' => $post], 201);
    }
}
