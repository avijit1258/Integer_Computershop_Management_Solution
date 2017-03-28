<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Product;
use App\SubCatagory;
use App\Sell;

use Carbon\Carbon;

class SellController extends Controller
{
    public function index(Request $request)
    {

    	$products = Product::all();
        $catagories = Catagory::all();
        $sub_catagories = SubCatagory::all();

        return view('sell.index', compact('products', 'catagories', 'sub_catagories'));
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        

        $sell = new Sell;
        //var_dump($request);
        for($i=0 ; $i < count($request->product_id) ; $i++){

            $sell->date = Carbon::now();
            $sell->quantity = $request->quantity[$i];
            $sell->unit_sell_price = $request->unit_sell_price[$i];
            $sell->total_sell_price = $request->quantity[$i];
            $sell->product_id = $request->product_id[$i];
            //$sell->customer_name = $request->customer_name;
            $sell->contact_no = $request->contact_no;
            //$sell->address = $request->address;
            $sell->voucher_id = 3;
            $sell->save();    
        }

        

        return redirect('/sells');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($id)
    {
        //$this->authorize('destroy', $task);

        //$task->delete();

        Sell::destroy($id);

        return redirect('/sells');
    }
}
