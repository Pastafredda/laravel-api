<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookApi(){
        return response()-> json([
            'message' => 'Hello world'
        ]);
    }
}
