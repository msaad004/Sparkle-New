<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function register(Request $request) {
        $user = new User();
        $user->email = $request['email'];
        $user->name = $request['full_name'];
        $user->password = bcrypt($request['password']);
        $user->save();
    }
}
