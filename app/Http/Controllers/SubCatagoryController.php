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
    	$catagories = Catagory::paginate(15);
        $sub_catagories = SubCatagory::paginate(15);

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

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy($sub_catagory_id)
    {
        //$this->authorize('destroy', $task);

        //$task->delete();

        SubCatagory::destroy($sub_catagory_id);

        return redirect('/sub_catagories');
    }
}
