<?php

namespace App\Http\Controllers;

use App\Models\Vedio;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class VedioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vedio = Vedio::get();
        return $vedio;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vedio = Vedio::find(1);

        $vedio->tag()->create([
            'tag-name' => 'Instagram Vedio'
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
