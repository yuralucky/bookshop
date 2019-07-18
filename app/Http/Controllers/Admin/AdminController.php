<?php

namespace App\Http\Controllers\Admin;

use App\Book;
//use DataTables;
use App\FeedBack;
use App\Order;
use DB;
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

        $newfeedback=FeedBack::where('ready',0)->count();
        $neworder=Order::where('ready',0)->count();
        $order= DB::table('orders')->count();
        $usersCOUNT=DB::table('users')->count();
        $booksCOUNT=DB::table('books')->count();
        $orderALL=DB::table('orders')->sum('total');
        return view('admin.dashboard', compact('newfeedback','neworder','order','usersCOUNT','booksCOUNT','orderALL'));
    }


}
