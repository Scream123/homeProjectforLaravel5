<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

    //
    public function getPublishedPosts()
    {
        //$posts = Post::all();
        //$posts = Post::latest('id')->get();
        //$posts = Post::latest('published_at')->get();
//        echo Carbon::now();
//        $posts = Post::latest('published_at')
//            ->where('published_at', '<=', Carbon::now())
//            ->get();
        $posts = Post::latest('published_at')->published()->get();
        return $posts;
    }

    //опубликованные статьи
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now())
            ->where('published', '=', 1);

    }

    //неопубликованные статьи
    public function scopeUnPublished($query)
    {
        $query->where('published_at', '=>', Carbon::now())
            ->orWhere('published', '=', 0);

    }

    public function getUnPublishedPosts()
    {
        return $this->latest('published_at')->unPublished()->get();
        
    }
}
