<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    public function index(Request $request) {
        $posts = Post::select('*');
        if ($request->category != null) {
            $post=$posts->where('category_id',$request->category);
        }
        //$posts = DB::table('posts')->get();
        $posts = $posts->get();

        $categories=Category::all();
        
        /*$posts = $posts->where('category_id', 2);*/

        return view('index')
                ->with(["posts"=>$posts,"categories"=>$categories]);
    }

    public function list($category_id) {
        $posts = Post::select('*')->where('category_id',$category_id);
        //$posts = DB::table('posts')->get();
        $posts = $posts->get();

        $categories=Category::all();
        
        /*$posts = $posts->where('category_id', 2);*/

        return view('index')
                ->with(["posts"=>$posts,"categories"=>$categories]);
    }

    public function create() {
        $categories=Category::all();
        return view('create')->with('categories', $categories);
    }

    public function store(Request $request) {
        $title = $request->titulo;
        $body = $request->contenido;
        $post = new Post;
        $post->title = $title;
        $post->body = $body;
        $post->category_id = $request->Categories;
        $post->save();
        return "Post guardado!";
    }

    public function show($id) {
        $post = Post::select('id','title','body')->where('id', $id)->get();
        // $post = Post::find($id);
        return view('index')->with('posts',$post);

    }

    public function edit($id) {
        $post = Post::find($id);
        return view('edit')->with('post',$post);
    }

    public function update(Request $request,$id) {
        $title = $request->titulo;
        $body = $request->contenido;
        $post = Post::find($id);
        $post->title = $title;
        $post->body = $body ;
        $post->category_id = 3;
        $post->save();
        return "Post modificado!";
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return "Post eliminado!";
    }

}
