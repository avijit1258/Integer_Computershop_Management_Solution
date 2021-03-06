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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catagory.index');
    }

    public function purchase()
    {
        return view('purchase');
    }
    public function catagory()
    {
        return view('catagory');
    }
    public function product()
    {
        return view('product');
    }
    public function storeCatagory(Request $request)
    {
        
        DB::insert("INSERT INTO catagory (catagory_id,catagory_name) VALUES ('','$request->catagory_name')");

         
        return redirect()->back();
    }

    




}
