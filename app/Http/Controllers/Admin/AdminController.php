<?php

namespace App\Http\Controllers\Admin;

use App\Book;
//use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::orderBy('id', 'desc')->paginate('8');

        return view('admin.index', compact('books'));
    }


    public function getData()
    {
        $books=Book::query();
        return DataTables::of($books)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $response
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $response)
    {

        $book = Book::updateOrCreate(
            ['id' => $request->id,
                'title' => $request->title,
                'author' => $request->author,
                'ISBN' => $request->ISBN,
                'category' => $request->category,
                'pages' => $request->pages,
                'year' => $request->year,
                'language' => $request->language,
                'description' => $request->description,
                'price' => $request->price
            ]

        );
        return $response->json('book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('admin.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $book = $book->update($request->all());
        return view('admin.index')->with('success', 'Book updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id', $id)->delete();

        return \Response::json($book);
    }
}
