<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sub_categories;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    // list view
    public function index(){
        $data = array();
        $data['sub_categories'] = sub_categories::all();
        return view('sub_categories.sub_categories_table', $data);
    }
    // edit form view
    public function edit($id = null){
        $sub_categories = null;
        if($id == null ) $sub_categories = new sub_categories;
        else $sub_categories = sub_categories::find($id);
        $data = array();
        $data['sub_categories'] = $sub_categories;
        $data['categories'] = Category::all();
        return view('sub_categories.sub_categories_form',$data);
    }
    // insert to db and redirect to list view
    public function insert($id = null){
        $sub_categories = null;
        if($id == null) $sub_categories = new sub_categories;
        else $sub_categories = sub_categories::find($id);
        $sub_categories->name = request()->name;
        $sub_categories->category_id = request()->category_id;
        $sub_categories->save();
        return redirect()->route('sub_categories.index');
    }
    // delete and redirect to list view
    public function delete($id){
        sub_categories::destroy($id);
        return redirect()->route('sub_categories.index');
    }
    //
}
