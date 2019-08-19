<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Models\Post;
use Carbon\Carbon;

class PostController extends Controller
{
//    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

    /**
     * Display a listing of the resource.
     */
    public function index(Post $postModel)
    {
        //$posts = Post::all();
        //$posts = Post::latest('id')->get();
        //$posts = Post::latest('published_at')->get();
//        echo Carbon::now();
//        $posts = Post::latest('published_at')
//                 ->where('published_at', '<=', Carbon::now())
//                 ->get();
//phpinfo();
        $posts = $postModel->getPublishedPosts();

        //dd($posts);

        return view('post.index', ['posts' => $posts]);
    }

    public function unPublished(Post $postModel)
    {
        $posts = $postModel->getUnPublishedPosts();

        return view('post.index', ['posts' => $posts]);
    }

    public function  create()
    {
        return view('post.create');

    }

    /**
     * save Data
     * @param $id
     */
    public function store(Post $postModel, Request $request)
    {
        $postModel->create($request->all());
        return redirect()->route('posts');

    }
    public function  show($id)
    {

    }
    public function  edit($id)
    {

    }
    public function  update($id)
    {

    }
    public function  destroy($id)
    {

    }

}
