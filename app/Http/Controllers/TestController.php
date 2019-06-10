<?php

namespace App\Http\Controllers;

use App\Book;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $book_id=$request->get('id',0);

        $book=DB::table('books')->find($book_id);

        return $book->author;
    }

    public function store(Request $request)
    {
        $news=News::create($request);
    }
}
