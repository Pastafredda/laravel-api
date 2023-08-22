<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function bookApi(){
        return response()-> json([
            'message' => 'Hello world'
        ]);
    }

    public function bookIndex(){
        $books = book ::all();
        return response()->json([
            'books' => $books
        ]);
    }
}
