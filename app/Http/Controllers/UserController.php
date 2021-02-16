<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class UserController extends Controller{
    public function user(Request $request)
    {
        return $request->user();
    }
}
