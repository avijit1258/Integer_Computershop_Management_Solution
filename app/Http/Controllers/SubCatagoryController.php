<?php

namespace App\Http\Controllers;

use App\SubCatagory;
use App\Catagory;

use Illuminate\Http\Request;

class SubCatagoryController extends Controller
{
    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
    	$catagories = Catagory::all();
        $sub_catagories = SubCatagory::all();

        return view('sub_catagory.index', compact('catagories', 'sub_catagories'));
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
            'catagory_id' => 'required',
        ]);

        $sub_catagory = new SubCatagory;

        $sub_catagory->name = $request->name;
        $sub_catagory->catagory_id = $request->catagory_id;

        $sub_catagory->save();

        return redirect('/sub_catagories');
    }

    public function edit($id)
    {
        $sub_catagory = SubCatagory::find($id);
        $catagories = Catagory::all();

        return view('sub_catagory.edit', compact('sub_catagory', 'catagories'));
    }

    public function update(Request $request, $id)
    {
        $sub_catagory = SubCatagory::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'catagory_id' => 'required',
        ]);

        $sub_catagory->name = $request->name;
        $sub_catagory->catagory_id = $request->catagory_id;

        $sub_catagory->save();
        
        
        return redirect('/sub_catagories/');
    }

    public function cat_to_sub($catagory_id)
    {
        $data = DB::table('sub_catagories')->where('catagory_id', $catagory_id)->get();
        return $data;
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($sub_catagory_id)
    {
        
        SubCatagory::destroy($sub_catagory_id);

        return redirect('/sub_catagories');
    }
}
