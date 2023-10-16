<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::orderByDesc('id')->paginate(6);
        return view('blog')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photo', time() . ($name));
        }

        // dd($request['title']);
        Post::create([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'user_id' => 1,
            'category_id' => $request->category_id,
            'contents' => $request->contents,
            'photo' => $path ?? null
        ]);

        return redirect()->route("post.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categories = DB::table('categories')->getColumns();
        $posts = DB::table('posts')->select('title')->orderByDesc('created_at')->limit(5)->get();
        return view('posts.show')
            ->with('post', [$post])
            ->with('recent_posts', $posts)
            ->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
//        echo 'edit';
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {

        if (isset($request->photo)) {
            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photo', time() . $name);
        } else {
            $path = $post->photo;
        }

        // dd($request['title']);
        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'contents' => $request->contents,
            'photo' => $path ?? null
        ]);
        return redirect()->route('post.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (isset($post->photo)) {
            Storage::delete($post->photo);
        }
        $post->delete();
        return redirect()->route('post.index');
    }
}
