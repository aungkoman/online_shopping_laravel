<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;

class ColorController extends Controller
{
    // list view
    public function index(){
        $data = array();
        $data['colors'] = Color::all();
        return view('color.color_table', $data);
    }
    // edit form view
    public function edit($id = null){
        $color;
        if($id == null ) $color = new Color;
        else $color = Color::find($id);
        $data = array();
        $data['color'] = $color;
        return view('color.color_form',$data);
    }
    // insert to db and redirect to list view
    public function insert($id = null){
        $color;
        if($id == null) $color = new Color;
        else $color = Color::find($id);        
        $color->name = request()->name;
        $color->save();
        return redirect()->route('color.index');
    }
    // delete and redirect to list view
    public function delete($id){
        Color::destroy($id);
        return redirect()->route('color.index');
    }
}
