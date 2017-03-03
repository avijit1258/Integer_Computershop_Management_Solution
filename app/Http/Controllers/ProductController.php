<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    	$brands = Brand::all();
        $sub_catagories = SubCatagory::all();

        return view('product.index', compact('brands', 'sub_catagories'));
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
            'model' => 'required|max:255',
            'sub_catagory_id' => 'required',
            'specification' => 'required',
            'details' => 'required',
            'brand_id' => 'required',
        ]);

        $product = new Product;

        $product->model = $request->model;
        $product->brand_id = $request->brand_id;
        $product->sub_catagory_id = $request->sub_catagory_id;
        $product->specification = $request->specification;
        $product->details = $request->details;

        $product->save();

        return redirect('/products');
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

        Product::destroy($id);

        return redirect('/products');
    }
}