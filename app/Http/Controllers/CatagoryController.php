<?php

namespace App\Http\Controllers;
use App\catagory;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
      
    public function index(Request $request)
    {
    	$catagories = Catagory::all();
        return view('catagory.index', compact('catagories'));
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

       $catagory=new Catagory;
       $catagory->name=$request->name;
       $catagory->save();


        return redirect('/catagories');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($catagory_id)
    {
    	$catagory=catagory::destory($catagory_id);
        

        return redirect('/catagories');
    }
}
