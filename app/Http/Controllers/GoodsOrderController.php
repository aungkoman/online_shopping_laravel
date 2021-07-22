<?php

namespace App\Http\Controllers;

use App\Models\GoodsOrder;
use App\Models\Goods;
use App\Models\Category;
use App\Models\Color;
use App\Models\Photo;
use App\Models\Size;
use App\Models\Brand;
use App\Models\OrderStatus;
use App\Models\OrderItem;

use Illuminate\Http\Request;

class GoodsOrderController extends Controller
{
    //
    public function index()
    {
        $data = array();
        $data['goods_orders'] = GoodsOrder::all();
        return view('goods_order.index', $data);
    }

    public function detail($id)
    {
        $goods_order = GoodsOrder::find($id);
        $data = array();
        $data['goods_order'] = ($goods_order == null) ? new GoodsOrder : $goods_order;
        if ($goods_order == null) {
            return view('error.not_found');
        }
        return view('goods_order.detail', $data);
    }

    // return form
    public function edit($id = null)
    {
        $goods_order;
        if ($id == null) $goods_order = new GoodsOrder;
        else $goods_order = GoodsOrder::find($id);
        if ($goods_order == null) $goods_order = new GoodsOrder;
        $data = array();
        $data['goods_order'] = $goods_order;
        $data['goods'] = Goods::all();
        $data['colors'] = Color::all();
        $data['sizes'] = Size::all();
        $data['order_statuses'] = OrderStatus::all();
        return view('goods_order.form', $data);
    }

    // update / insert
    public function insert($id = null)
    {
        $goods_order;
        $data = request()->all();
        //return json_encode($data);
        if ($id == null) $goods_order = GoodsOrder::create($data);
        else {
            $goods_order = GoodsOrder::find($id);
            $goods_order->fill($data)->save();
        }
        /* ပြဿနာက စပြီ၊ json နဲ့လာမလား ? form data နဲ့ လာမလား? */
        /**
         * အပေါ်တစ်ပိုင်းကတော့ json / form data ဘာပဲဖြစ်ဖြစ် အိုကေပေမယ့်၊ အောက်က order item list ကတော့ တိုင်ပတ်မယ်။
         * form နဲ့ဆိုရင် order item တွေက array အများကြီးနဲ့လာမှာ
         * ဒီလိုမျိုး id = [], colors = [] , size = [], quantity = [] စသည်ဖြင့်ပေါ့
         * 
         * json နဲ့လာမယ် ဆိုရင်တော့ order item object array နဲ့ လာမယ်။
         * အိုကေ json object ပဲ ဆောက်ပေးလိုက်မယ် client side မှာ
         * 
         * form ကနေပဲ ယူလိုက်ပါမယ်။
         * client မှာလည်း အလုပ်မရှုပ်
         * နောက် server side မှာလဲ တစ်ခါပဲ လုပ်ရအောင်လို့
         * 
         * render ပြန်လုပ်တာက သပ်သပ် ဒီမှာ စဉ်းစားစရာ မလိုသေးဘူး
         */
        /* object array
        for($i = 0; $i < count($data['order_items']); $i++){
            // skip current loop if photo is null
            //if(request()->photos[$i] == null) continue;
            $order_item;
            if($data['order_items'][$i] == null) continue;
            if($data['order_items'][$i]['id'] == null) $order_item = OrderItem::create($$data['order_items'][$i]);
            else{
                $order_item = OrderItem::find($id);
                $order_item->fill($data)->save();
            }
        }
        */

        // separated array
        for ($i = 0; $i < count($data['goods_id']); $i++) {
            $order_item;
            if ($data['goods_id'][$i] == null) {
                // insert
                $order_item = new OrderItem;
                $order_item->goods_id = $data['goods_id'][$i];
                $order_item->color_id = $data['color_id'][$i];
                $order_item->size_id = $data['size_id'][$i];
                $order_item->quantity = $data['quantity'][$i];
                $order_item->price = $data['price'][$i];
                $order_item->cost = $data['cost'][$i];
                $order_item->goods_order_id = $data['goods_order_id'][$i];
                $order_item->save();
            } else {
                // update
                $order_item = OrderItem::find($data['goods_id'][$i]);
                if ($order_item != null) {
                    $order_item->goods_id = $data['goods_id'][$i];
                    $order_item->color_id = $data['color_id'][$i];
                    $order_item->size_id = $data['size_id'][$i];
                    $order_item->quantity = $data['quantity'][$i];
                    $order_item->price = $data['price'][$i];
                    $order_item->cost = $data['cost'][$i];
                    $order_item->goods_order_id = $data['goods_order_id'][$i];
                    //$order_item->fill($data)->save();
                    $order_item->save();
                }
            }
        }
        return redirect()->route('goods_order.index');
    }

    // delete
    public function delete($id)
    {
        $goods_order = GoodsOrder::find($id);
        for ($i = 0; $i < count($goods_order->order_items); $i++) {
            $goods_order->order_items[$i]->forceDelete();
        }
        GoodsOrder::destroy($id);
        return redirect()->route('goods_order.index');
    }
}
