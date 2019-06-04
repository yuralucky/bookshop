<?php

namespace App\Http\Controllers;

use App\Book;
use Barryvdh\Reflection\DocBlock;
use DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest = DB:: table('books')->paginate(4);
//        dd($latest);
        return view('index', compact('latest'));
    }

    public function main()
    {
        $books = DB::table('books')->paginate(15);
        return view('main', compact('books'));
    }

    public function sortPrice()
    {
        $books = DB::table('books')->orderBy('price')->paginate(15);
        return view('main', compact('books'));
    }


    public function sortName()
    {
        $books = DB::table('books')->orderBy('title')->paginate(15);
        return view('main', compact('books'));
    }


    public function search(Request $request)
    {
        $search=$request->get('search');
        $books=DB::table('books')->where('title','like','%'.$search.'%')->paginate(15);
        return view('main', compact('books'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
