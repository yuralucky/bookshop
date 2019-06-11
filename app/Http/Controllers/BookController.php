<?php

namespace App\Http\Controllers;

use App\Book;
use App\Mail\DemoMail;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
        return view('index', compact('latest'));
    }

    /**
     * Display all books
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        $books = DB::table('books')->paginate(15);
        return view('main', compact('books'));
    }

    /**
     * Display books with sort by price
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortPrice()
    {
        $books = DB::table('books')->orderBy('price')->paginate(15);
        return view('main', compact('books'));
    }


    /**
     * Display all books sort by name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortName()
    {
        $books = DB::table('books')->orderBy('title')->paginate(15);
        return view('main', compact('books'));
    }


    /**
     * Show result for search
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = DB::table('books')->where('title', 'like', '%' . $search . '%')
            ->orWhere('author', 'like', '%' . $search . '%')->paginate(15);
        return view('main', compact('books'));

    }

    public function searchlive(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->get('search');
            $books = DB::table('books')->where('title', 'like', '%' . $search . '%')->paginate(15);
            return view('main', compact('books'));

        }
    }

    public function send(Request $request)
    {
        $body = $request->message;
        $from = $request->email;
        $name = $request->name;
        Mail::to('yuralucky83@gmail.com')->send(new DemoMail($body, $from));
    }

    /**
     * show single resource
     *
     * @param Book $book
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $book=Book::find(5);

        return view('single', compact('book'));

    }


}
