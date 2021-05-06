<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    // list view
    public function index(){
        $data = array();
        $data['sizes'] = Size::all();
        return view('size.size_table', $data);
    }
    // edit form view
    public function edit($id = null){
        $size;
        if($id == null ) $size = new Size;
        else $size = Size::find($id);
        $data = array();
        $data['size'] = $size;
        return view('size.size_form',$data);
    }
    // insert to db and redirect to list view
    public function insert($id = null){
        $size;
        if($id == null) $size = new Size;
        else $size = Size::find($id);        
        $size->name = request()->name;
        $size->save();
        return redirect()->route('size.index');
    }
    // delete and redirect to list view
    public function delete($id){
        Size::destroy($id);
        return redirect()->route('size.index');
    }
    //
}
