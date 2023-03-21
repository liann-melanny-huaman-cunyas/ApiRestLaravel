<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //Si se coloca UN ESTADO HTTP 204 ; no se coloca mensaje VICEVERSA
        $eliminado=$post->delete();
        if ($eliminado){
            $data= [
                'Elemento eliminado' => $eliminado,
                'Id' => $post->id,
            ];
            return response()->json(['message'=>$data],204);
                }
        else {
            return response()->json(['error' => 'No encontrado'], 404);
        };
    }
}
