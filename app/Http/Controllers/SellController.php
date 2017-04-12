<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Product;
use App\SubCatagory;
use App\Sell;
use App\Purchase;
use App\Customer;

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
        $purchase = new Purchase;
        $customer = new Customer;

        $total = 0;
        //my_sql_insert_id();
        //var_dump($request);
        $request->session()->put('quantity', $request->quantity);
        $request->session()->put('unit_sell_price', $request->unit_sell_price);
        
        $request->session()->put('product_id', $request->product_id);

        $request->session()->put('contact_no', $request->contact_no);

        $request->session()->put('customer_name', $request->customer_name);

        $voucher_id = mt_rand();
        $request->session()->put('voucher_id', $voucher_id);
        $customer->name = $request->customer_name;
        $customer->contact_no = $request->contact_no;
        $customer->save();
        for($i=0 ; $i < count($request->product_id) ; $i++){
            $purchase = Purchase::find($request->product_id[$i]);
            $sell->date = Carbon::now();
            $sell->unit_sell_price = $request->unit_sell_price[$i];
            $sell->quantity = $request->quantity[$i];
            $sell->total_sell_price = $request->quantity[$i]
             * $request->unit_sell_price[$i];
            //transaction
            $sell->product_id = $request->product_id[$i];
            $purchase->quantity -= $request->quantity[$i];
            $sell->contact_no = $request->contact_no;
            $sell->voucher_id = $voucher_id;
            $sell->save(); 
            $purchase->save();
            $total +=  $sell->total_sell_price;   
        }

        $request->session()->put('total', $total);

        return redirect('/sells/invoice');
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

    public function invoice()
    {

        return view('sell.invoice');
    }

    public function ledger()
    {
        $sells = Sell::paginate(15);

        return view('sell.ledger', compact('sells'));
    }
}
