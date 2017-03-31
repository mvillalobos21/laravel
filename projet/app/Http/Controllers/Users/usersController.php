<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class usersController extends Controller
{
    public function userView(){
        return view('login');
    }
}
