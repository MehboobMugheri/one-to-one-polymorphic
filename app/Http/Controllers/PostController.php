<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::find(4);
        return $posts->images;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::create([
            'post_title'  => 'Post-6',
            'post_desc'   => 'Dolor sit amet consectetur adipisicing elit.'
        ]);
        $posts->tag()->create([
            'tag-name'  => 'Twitter'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
