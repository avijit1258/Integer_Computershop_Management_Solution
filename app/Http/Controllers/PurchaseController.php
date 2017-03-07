<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->validate($request, [
            'warrenty' => 'required',
            'vendor_id' => 'required',
            'product_id' => 'required',
            'sale_price' => 'required',
            'purchase_price' => 'required',
            'date' => 'required',
            'quantity' => 'quantity' ,
        ]);

        $purchase = new Purchase;

        $purchase->warrenty = $request->model ;
        $purchase->date = $request->date ;
        $purchase->product_id = $request->product_id ;
        $purchase->vendor_id = $request->vendor_id ;
        $purchase->quantity = $request->quantity ;
        $purchase->sale_price = $request->sale_price ;
        $purchase->purchase_price = $request->purchase_price ;



        $purchase->save();

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
