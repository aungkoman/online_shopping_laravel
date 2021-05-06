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
        $goods = Goods::create(request()->all());
        $goods->colors()->attach(request()->colors);
        $goods->sizes()->attach(request()->sizes);
        $goods->categories()->attach(request()->categories);
        for($i = 0; $i < count(request()->photos); $i++){
            $photo = new Photo;
            $photo->name = request()->photos[$i];
            $photo->goods_id = $goods->id;
            $photo->save();
        }
        return json_encode($goods);
        //return redirect()->route('goods.index');
    }
}
