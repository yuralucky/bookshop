<?php

namespace App\Http\Controllers;

use App\Book;
//use App\Cart;
use App\Mail\DemoMail;
use Cart;
//use Darryldecode\Cart\Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


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
        $bests = DB::table('books')->where('price', '<', 500)->paginate(3);
        return view('index', compact('latest', 'bests'));
    }

    /**
     * Display all books
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        $books = DB::table('books')->paginate(15);
        return view('books', compact('books'));
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
    public function show(Book $book)
    {

        return view('single', compact('book'));

    }


    public function cart()
    {
        $carts = Cart::getContent();
        $total = Cart::getTotal();
        $quantity = Cart::getTotalQuantity();
        return view('shop_cart', compact('carts', 'total', 'quantity'));
    }

    public function addCart(Request $request)
    {
//        dd($request);
//        $book = Book::find(2);
//        dd($book);
//        $g = Cart::add($request->id, $request->title, $request->price, 1);
        return redirect('books')->with('success', 'book added to shopping cart');

    }


}
