<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function bookApi(){
        $books = book ::all();
        return response()->json([
            'books' => $books
        ]);
    }

    public function bookIndex(){
        $books = book ::paginate(5);
        return response()->json([
            'books' => $books
        ]);
    }
}
