<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model import list
use App\Models\Goods;
use App\Models\Category;
use App\Models\Color;
use App\Models\Photo;
use App\Models\Size;

use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller
{
    //
    public function index(){
        $data = array();
        $data['goods'] = Goods::all();
        return view('admin.goods_table', $data);
    }
    
    public function shop(){
        $data = array();
        $data['goods'] = Goods::all();
        
        for($i=0; $i < count($data['goods']); $i++){
            for($j=0; $j < count($data['goods'][$i]->photos); $j++){
                $data['goods'][$i]->photos[$j]['url'] = Storage::disk('local')->url(
                    $data['goods'][$i]->photos[$j]['name']
                );
                // 1620581892-Kpnr2.jpg
                // storage/app/public/1620581892-Kpnr2.jpg
                //echo "<img src='..".$data['goods'][$i]->photos[$j]['url']."' />";
            }
        }

        // return json_encode($data);
        return view('shop.index', $data);
    }

    public function detail($id){
        $goods = Goods::find($id);
        //return json_encode($goods);
        $data = array();
        $data['goods'] = ($goods == null ) ? new Goods : $goods;
        // null ဖြစ်နေရင် , result မရှိရင် 404 not found ပြမှပဲ ရလိမ့်မယ်။
        // တောင်းဆိုသော အချက်အလက် မရှိပါ။ နောက်ကို ပြန်သွားရန်
        // ဒါမျိုး view ပြပေးမယ် ဆိုပါတော့
        if($goods == null ) {
            return view('error.not_found');
        }
        return view('admin.goods_detail', $data);
    }
    public function edit($id = null){
        //if($id == null ) $id = "NULL";
        $goods;
        if($id == null ) $goods = new Goods;
        else $goods = Goods::find($id);

        if($goods == null) $goods = new Goods;
        //return json_encode($goods->colors);
        $data = array();
        $data['goods'] = $goods;
        $data['colors'] = Color::all();
        $data['sizes'] = Size::all();
        $data['categories'] = Category::all();
        return view('admin.goods_form',$data);
    }
    public function insert($id = null){
        $goods;
        $data = request()->all();
        $data['photos'] = array();
        //return json_encode($data);

        //$photos = request()->file('photos');
        //return "photos is ".json_encode($photos).json_encode(request()->all());
        
        //return count(request()->photos).",".json_encode(request()->all());
        // upload images 
        // $request->file('image');
        //print_r($_FILES);
        // return "file count ".count(request()->file());

        //echo "hello world <br>";
        /*
        for($i = 0; $i < count(request()->file('photos')); $i++){
            //echo "loop for i $i <br>";
            if (request()->file('photos')[$i] == null ) continue;

            $fileName = time()."-".request()->file('photos')[$i]->getClientOriginalName();
            echo "file Name is $fileName <br>";
            // Request::file('photo')->move($destinationPath, $fileName);
            try{
                request()->file('photos')[$i]->move(public_path('uploads'), $fileName);
                $data['photos'][$i] = $fileName;
            }catch(exp){
                // pass
            }
            
        }
        */
          
   
        if(request()->file('photos') != null) {
            for($i = 0; $i < count(request()->file('photos')); $i++){
                if (request()->file('photos')[$i] == null ) continue;
                $fileName = time()."-".request()->file('photos')[$i]->getClientOriginalName();
                try{

                    /*
                    $path = request()->file('photos')[$i]->storeAs(
                        'public',
                        $fileName,
                        'local'
                    );
                    $data['photos'][$i] = $path;
                    */
                    request()->file('photos')[$i]->move(public_path('uploads'), $fileName);
                    $data['photos'][$i] = $fileName;
                    //echo $path;
                }catch(exp){
                    //echo "s3 upload exp<br>";
                    //echo exp.getMessage();
                }
                
            }
        }
        
          
        

        for($i =0; $i < count($data['photos']); $i++){
            /*
            Storage::temporaryUrl(
                'file.jpg', now()->addMinutes(5)
            );
            */
            /*
            $tempUrl = Storage::disk('s3')->temporaryUrl(
                $data['photos'][$i], now()->addMinutes(5)
            );
            */
            $url = Storage::disk('local')->url(
                $data['photos'][$i]
            );
            //echo "<img src='$tempUrl' />";
        }
        // 
        //return json_encode($data);

        //if($id == null) $goods = Goods::create(request()->all());
        if($id == null) $goods = Goods::create($data);
        else{
            $goods = Goods::find($id);
            //$goods->fill(request()->all())->save();
            $goods->fill($data)->save();
        }
        // $goods = Goods::updateOrCreate(request()->all());

        $goods->colors()->sync(request()->colors);
        $goods->sizes()->sync(request()->sizes);
        $goods->categories()->sync(request()->categories);
        //for($i = 0; $i < count(request()->photos); $i++){
        for($i = 0; $i < count($data['photos']); $i++){
            // skip current loop if photo is null
            //if(request()->photos[$i] == null) continue;
            if($data['photos'][$i] == null) continue;
            $photo = new Photo;
            $photo->name = $data['photos'][$i];
            $photo->goods_id = $goods->id;
            $photo->save();
        }
        //return json_encode($goods);
        return redirect()->route('goods.index');
    }
    
    public function delete($id){
        $goods = Goods::find($id);
        $goods->colors()->detach();
        $goods->sizes()->detach();
        $goods->categories()->detach();
        for($i = 0; $i < count($goods->photos) ; $i++){
            $goods->photos[$i]->forceDelete();
        }
        Goods::destroy($id);
        return redirect()->route('goods.index');
    }
}
