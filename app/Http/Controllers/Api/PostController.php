<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;



class PostController extends Controller
{
    public function index(Request $request){
        $category = $request->query('category');

        $posts = Post::with('category')
        ->with('user:id,name')
        ->paginate(5); 
        
        if($category){
            $posts = $posts->where('category_id', $category);
            return response()->json($posts);
        
        }
        return response()->json($posts);
    }

    public function show($id){
        $post = Post::where('id', $id)->first();
        return response()->json($post);
    }
}

/* da dove prendiamo il $id?, 
    dalla rotta dell'api.php 
 */
