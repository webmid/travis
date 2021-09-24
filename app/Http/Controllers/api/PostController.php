<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postList()
    {
        $posts = Posts::all();
        $response = array(
            'success' => true,
            'result' => $posts
        );
        return response($response, 200);
    }
}
