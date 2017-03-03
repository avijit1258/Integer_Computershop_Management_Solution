<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
    	
       
        return view('vendor.index');
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
            'name' => 'required',
            'adress' => 'required',
            'contact_number''required'
            
        ]);

        $vendor= new Vendor;

        $vendor->name = $request->name;
       
        $vendor->adress=$equest->adress;
        $vendor->contact_number->request->contact_number;
       $vendor->save();

        

        return redirect('/vendors');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($vendor_id)
    {
        //$this->authorize('destroy', $task);

        //$task->delete();

        SubCatagory::destroy($vendor_id);

        return redirect('/vendor');
    }
}
