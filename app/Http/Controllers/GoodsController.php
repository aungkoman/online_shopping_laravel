<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model import list
use App\Models\Goods;
use App\Models\Category;
use App\Models\Color;
use App\Models\Photo;
use App\Models\Size;

class GoodsController extends Controller
{
    //
    public function index(){
        $data = array();
        $data['goods'] = Goods::all();
        return view('admin.goods_table', $data);
    }
    public function detail($id){
        return view('admin.goods_detail');
    }
    public function edit($id = null){
        return view('admin.goods_form');
    }
    public function insert($id = null){
        return redirect()->route('goods.index');
    }
}
