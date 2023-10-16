<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function index()
    {
        echo "index";
    }

    public function store(StoreCommentRequest $request)
    {
//        dd($request);
        $userId = $request->user_id;
        $post_id = $request->post_id;

        Comment::create([
            'user_id' => $userId,
            'post_id' => $post_id,
            'body' => $request->body]);

//        if (DB::table('comments')->where(
//            ['user_id', $userId],
//            ['post_id', $post_id])->exists()) {
//            Comment::create([
//                'user_id' => $userId,
//                'post_id' => $post_id,
//                'body' => $request->body]);
//        } else {
//            dd($request);
//        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
