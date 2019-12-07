<?php

namespace App\Http\Controllers;
use App\Post;
use App\CloneRecipe;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $post = Post::all();
        return json_encode($post,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $post = new Post;
     $post->namereipe = $request->name ;
     $post->caption = $request->caption ;
     $post->image = $request->image;
     $post->timecomplete = $request->timecomplete;
     $post->ingredient =  $request->ingredient;
     $post->howtocook = $request->howtocook;
     $post->userid = $request->userid;
     $post->menuid = $request->menuid;
     $post->save();
     return response($post,201);
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return json_encode($post,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $post = Post::find($id);
       $post->delete();
       echo "succes" ;
   }
   public function getRecipe()
   {
        //
     
     $recipe = CloneRecipe::all();
     return json_encode($recipe,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}
}
