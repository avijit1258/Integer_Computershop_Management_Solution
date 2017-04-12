<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Product;
use Carbon\Carbon;
use App\Purchase;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
    	$vendors = Vendor::all();
        $products = Product::all();

        return view('purchase.index', compact('vendors', 'products'));
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        

        $purchase = new Purchase;

        $purchase->warrenty = 4 ;

        //dd(count($request->product_id));
        for($i = 0; $i < count($request->product_id); $i++)
        {
         $purchase->date  = Carbon::now();
         $purchase->product_id = $request->product_id[$i];
         $purchase->vendor_id = $request->vendor_id[$i];
         $purchase->quantity = $request->quantity[$i];
         $purchase->sale_price = $request->unit_sale_price[$i];
         $purchase->purchase_price = $request->unit_purchase_price[$i] ;
         $purchase->save();
         
        }
     
     

     return redirect('/purchases');
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
        
        Purchase::destroy($id);

        return redirect('/purchases');
    }
}
