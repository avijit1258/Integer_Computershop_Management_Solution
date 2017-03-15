<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Product;

class SellController extends Controller
{
    public function index(Request $request)
    {

    	$products = Product::all();
        $catagories = Catagory::all();

        return view('sell.index', compact('products', 'catagories'));
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
            'date' => 'required',
            'unit_sell_price' => 'required',
            'total_sell_price' => 'required',
            'quantity' => 'required',
            'product_id' => 'required',
        ]);

        $sell = new Sell;

        $sell->date = $request->date;
        $sell->quantity = $request->quantity;
        $sell->unit_sell_price = $request->unit_sell_price;
        $sell->total_sell_price = $request->total_sell_price;
        $sell->product_id = $request->product_id;

        $sell->save();

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
