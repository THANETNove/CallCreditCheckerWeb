<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('users')
        ->where('status',0)
        ->where('status_login',NULL)
        ->orderBy('id','DESC')
        ->paginate(2);
        $data2 = DB::table('users')
        ->where('status',0)
        ->where('status_login',1)
        ->orderBy('id','DESC')
        ->paginate(2);
        return view('home',['data' => $data,'data2'=> $data2]);
    }
}