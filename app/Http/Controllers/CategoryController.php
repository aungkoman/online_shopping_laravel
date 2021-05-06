<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // list view
    public function index(){
        $data = array();
        $data['categories'] = Category::all();
        return view('category.category_table', $data);
    }
    // edit form view
    public function edit($id = null){
        $category;
        if($id == null ) $category = new Category;
        else $category = Category::find($id);
        $data = array();
        $data['category'] = $category;
        return view('category.category_form',$data);
    }
    // insert to db and redirect to list view
    public function insert($id = null){
        $category;
        if($id == null) $category = new Category;
        else $category = Category::find($id);        
        $category->name = request()->name;
        $category->save();
        return redirect()->route('category.index');
    }
    // delete and redirect to list view
    public function delete($id){
        Category::destroy($id);
        return redirect()->route('category.index');
    }
    //
}
