<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $user = User::all();
        $response = array(
            'success' => true,
            'result' => $user
        );
        return response($response, 200);
    }
}
