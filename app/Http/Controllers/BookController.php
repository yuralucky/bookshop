<?php

namespace App\Http\Controllers;

use App\Book;

//use App\Cart;
//use Mail;
use App\FeedBack;
use App\Order;
use Cart;
//use Darryldecode\Cart\Cart;
use DataTables;
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
    public function allBooks()
    {
        $books = Book::paginate(15);
        return view('books', compact('books'));
    }


    /**
     * Display books  sort by price
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortPrice()
    {
        $books = DB::table('books')->orderBy('price')->paginate(15);
        return view('books', compact('books'));
    }


    /**
     * Display  books sort by name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortName()
    {
        $books = DB::table('books')->orderBy('title')->paginate(15);
        return view('books', compact('books'));
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
        return view('books', compact('books'));

    }


    /**
     * Show contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('contactUs');
    }

    /**
     * Show delivery page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delivery()
    {
        return view('delivery');
    }

    public function confirmOrder(Request $request)
    {
        $total = $request->total;
        return view('confirmOrder', compact('total'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createOrder(Request $request)
    {
        Order::create($request->all());
        return redirect(route('main'));

    }

    /**
     * Create new feedback
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactUs(Request $request)
    {

        $book = FeedBack::updateOrCreate([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message]
        );
        return back();
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


    /**
     *
     * View shopping cart
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cart()
    {
        $carts = Cart::getContent();
        $total = Cart::getTotal();
        $quantity = Cart::getTotalQuantity();
        return view('shop_cart', compact('carts', 'total', 'quantity'));
    }

    /**
     * Add book to shopping cart
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addCart(Request $request)
    {
        $id = $request->get('id');
        $book = Book::find($id);
        Cart::add($book->id, $book->title, $book->price, 1);
        return back()->with('success', 'Book added');
    }


}
