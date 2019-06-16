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


class BookController extends Controller
{

//    private $cart;
//
//    public function __construct(Cart $cart)
//    {
//        $this->cart=$cart;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest = DB:: table('books')->paginate(4);
        $bests=DB::table('books')->where('price','<',500)->paginate(3);
        return view('index', compact('latest','bests'));
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
        $book = Book::find(5);

        return view('single', compact('book'));

    }

    public function cart()
    {
     $carts = Cart::getContent();
        return view('shop_cart', compact('carts'));
    }

    public function addCart(Request $request)
    {
        $userId=1;
        $g=Cart::add(3,'news',25,1);
        dd($g);
    }

}
