<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $formattedPosts = $posts->map(function ($post) {
            $post->fecha_de_publicacion = Carbon::parse($post->fecha_de_publicacion)->format('F j, Y');
            return $post;
        });

        return view('app', ['formattedPosts' => $formattedPosts]);
    }
    public function show()
    {
        return view('app');
    }
}
