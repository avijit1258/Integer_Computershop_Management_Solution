<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;


class BrandController extends Controller
{
    
     public function index(Request $request)
    {
    	$brands = Brand::all();
        return view('brand.index', compact('brands'));
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
            'name' => 'required|max:255',
        ]);

       $brand=new Brand;
       $brand->name=$request->name;
       $brand->save();


        return redirect('/brands');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($brand_id)
    {
    	$brand=Brand::destory($brand_id);
        

        return redirect('/brands');
    }
}
