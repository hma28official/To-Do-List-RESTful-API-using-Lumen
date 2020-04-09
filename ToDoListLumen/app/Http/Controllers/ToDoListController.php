<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = ToDoList::all();
        return response($data);
    }
    
    public function show($id)
    {
        $data = ToDoList::where('id',$id)->get();
        return response($data);
    }
    
    public function store(Request $request)
    {
        $data = new ToDoList();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();
    
        return response('Create Data Success');
    }

    public function update(Request $request, $id)
    {
        $data = ToDoList::where('id',$id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();
    
        return response('Update Data Success');
    }
    
    public function destroy($id)
    {
        $data = ToDoList::where('id',$id)->first();
        $data->delete();
    
        return response('Delete Data Success');
    }
}