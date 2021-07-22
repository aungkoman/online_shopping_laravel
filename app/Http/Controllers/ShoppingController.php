<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Goods;
use App\Models\GoodsOrder;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\MmUser;
use App\Models\OrderItem;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ShoppingController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $maincarousels = [];
        $newarrival = Category::find(1)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $specialoffer = Category::find(2)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $popularcategories = Category::inRandomOrder()->take(6)->get();
        $popularproducts = Category::find(3)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $brands = Brand::all();

        $newarrival =
            Goods::orderBy('created_at', 'desc')->paginate(8);
        $specialoffer =
            Goods::orderBy('created_at', 'desc')->paginate(8);
        $popularproducts
            = Goods::orderBy('created_at', 'desc')->paginate(8);

        // dd($categories);

        return view('home', [
            'categories' => $categories,
            'maincarousels' => $maincarousels,
            'newarrival' => $newarrival,
            'specialoffer' => $specialoffer,
            'popularcategories' => $popularcategories,
            'popularproducts' => $popularproducts,
            'brands' => $brands,

        ]);
    }


    public function products()
    {
        $products = Goods::orderBy('created_at', 'desc')->paginate(8);
        $categories = Category::all();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();



        return view('products', [
            'title' => 'ALL PRODUCTS',
            'categories' => $categories,
            'products' => $products,
            'popularcategories' => $popularcategories,
            'brands' => $brands,

        ]);
    }


    public function newarrival()
    {
        $id = 1;
        $products = Category::find($id)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $products = Goods::orderBy('created_at', 'desc')->paginate(8);
        $categories = Category::all();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();



        return view('products', [
            'title' => 'NEW ARRIVAL',
            'categories' => $categories,
            'products' => $products,
            'popularcategories' => $popularcategories,
            'brands' => $brands,

        ]);
    }


    public function specialoffer()
    {
        $id = 2;
        $products = Category::find($id)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $products = Goods::orderBy('created_at', 'desc')->paginate(8);
        $categories = Category::all();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();



        return view('products', [
            'title' => 'SPECIAL OFFER',
            'categories' => $categories,
            'products' => $products,
            'popularcategories' => $popularcategories,
            'brands' => $brands,

        ]);
    }


    public function mostpopular()
    {
        $id = 3;
        $products = Category::find($id)->goods()->orderBy('created_at', 'desc')->paginate(8);
        $products = Goods::orderBy('created_at', 'desc')->paginate(8);
        $categories = Category::all();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();



        return view('products', [
            'title' => 'MOST POPULAR',
            'categories' => $categories,
            'products' => $products,
            'popularcategories' => $popularcategories,
            'brands' => $brands,

        ]);
    }


    public function category(Category $category)
    {

        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();
        $popularproducts = $category->goods()->paginate(8);
        $categories = Category::all();
        // dd($category);
        return view('category', [
            'categories' => $categories,
            'category' => $category,
            'popularcategories' => $popularcategories,
            'brands' => $brands,
            'products' => $popularproducts,
        ]);
    }


    public function detail(Goods $goods)
    {
        $categories = Category::all();



        return view('detail', [
            'goods' => $goods,
            'categories' => $categories,
        ]);
    }


    public function cart(Request $request)
    {

        // dd($request);
        $items = $request->items;
        $goods_id[] = explode(',', $items);

        $categories = Category::all();
        $data = array();
        foreach ($goods_id as  $value) {
            $item = Goods::find($value);
            $data = $item;
        }

        $popularproducts = Goods::inRandomOrder()->take(8)->get();
        //dd($popularproducts);
        // dd($data);

        return view('cart', [
            'categories' => $categories,
            'products' => $data,
        ]);
    }



    public function order(Request $request)
    {

        // dd($request->mmuser_id);

        $this->validate($request, [
            'payment_address' => 'required',

        ]);

        $goods_order = GoodsOrder::create([
            'mmuser_id' => $request->mmuser_id,
            'payment_address' => $request->payment_address,
            'order_status_id' => 1,

        ]);

        // separated array

        $data = json_decode($request->cart_list);
        //dd(($request->cart_list));
        for ($i = 0; $i < count($data); $i++) {

            // insert
            $order_item = new OrderItem();
            $order_item->goods_id = $data[$i]->product_id;
            $order_item->color_id = empty($data[$i]->product_color) ? 1 : $data[$i]->product_color;
            $order_item->size_id = empty($data[$i]->product_size) ? 1 : $data[$i]->product_size;
            $order_item->quantity = $data[$i]->product_quantity;
            $order_item->price = $data[$i]->product_price;
            $order_item->cost = $data[$i]->product_quantity * $data[$i]->product_price;
            $order_item->goods_order_id = $goods_order->id;
            $order_item->save();
        }
        //return redirect()->route('goods_order.index');
        $categories = Category::all();
        $maincarousels = [];
        $newarrival = Goods::orderBy('id', 'desc')->take(8)->get();
        $specialoffer = Goods::take(8)->get();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $popularproducts = Goods::inRandomOrder()->take(8)->get();
        $brands = Brand::all();

        // dd($categories);
        //dd($goods_order);
        return view('success', [
            'categories' => $categories,
            'maincarousels' => $maincarousels,
            'newarrival' => $newarrival,
            'specialoffer' => $specialoffer,
            'popularcategories' => $popularcategories,
            'popularproducts' => $popularproducts,
            'brands' => $brands,
            'order' => $goods_order,


        ]);
        // return view('success', [
        //     'order' => $goods_order,
        // ]);


    }



    public function search(Request $request)
    {



        $categories = Category::all();
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();

        $value = $request->get('find');

        $products = Goods::orderBy('created_at', 'desc')->where(function ($query) use ($value) {
            $query->where('name', 'LIKE', '%' . $value . '%')
                ->orWhere('description', 'LIKE', '%' . $value . '%');
        })->paginate(4);
        $products->appends(array('find' => $request->get('find'),));


        return view('search', [

            'categories' => $categories,
            'products' => $products,
            'popularcategories' => $popularcategories,
            'brands' => $brands,

        ]);
    }



    public function searchbybrand(Request $request, Category $category = null)
    {
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();
        $categories = Category::all();

        $brand_id = $request->brand;
        if ($category == null) {
            $products = Goods::where('brand_id', $brand_id)->paginate(1);
            $products->appends(array('brand' => $request->brand));
            return view('search', [
                'categories' => $categories,
                'popularcategories' => $popularcategories,
                'brands' => $brands,
                'products' => $products,
            ]);
        } else {
            $id = $category->id;
            $products = Category::find($id)->goods()->where('brand_id', $brand_id)->paginate(1);
            $products->appends(array('brand' => $request->brand));
            return view('category', [
                'categories' => $categories,
                'category' => $category,
                'popularcategories' => $popularcategories,
                'brands' => $brands,
                'products' => $products,
            ]);
        }


        //dd($request);


    }


    public function searchbyprice(Request $request, Category $category = null)
    {
        // dd($request);

        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $popularcategories = Category::inRandomOrder()->take(4)->get();
        $brands = Brand::all();
        $categories = Category::all();

        if ($category == null) {

            $products = Goods::whereBetween('price_original', [$min_price, $max_price])->paginate(1);
            $products->appends(array('min_price' => $request->min_price));
            $products->appends(array('max_price' => $request->max_price));
            return view('search', [
                'categories' => $categories,
                'popularcategories' => $popularcategories,
                'brands' => $brands,
                'products' => $products,
            ]);
        } else {

            $id = $category->id;
            $products = Category::find($id)->goods()->whereBetween('price_original', [$min_price, $max_price])->paginate(1);
            $products->appends(array('min_price' => $request->min_price));
            $products->appends(array('max_price' => $request->max_price));

            return view('category', [
                'categories' => $categories,
                'category' => $category,
                'popularcategories' => $popularcategories,
                'brands' => $brands,
                'products' => $products,
            ]);
        }
    }



    public function login(Request $request)
    {

        // input validation SERVER SIDE
        $data = $request;
        $username = isset($data['name']) ? $data['name'] : '';
        $password = isset($data['password']) ? $data['password'] : '';

        // dd($request);

        // relationship တွေကိုပါ load လုပ်ထားမှ toJson မှာ ပါလာမှာ ဖြစ်တယ်။ ->with('role') in this case
        // မဟုတ်ဘူး load လုပ်ထားပြီးရင် တန်းသုံးလို့ ရနေပြီ။ run time မှ ပါလာမှာ မဟုတ်ဘူး
        $mmuser = MmUser::where('username', $username)->where('password', $password)->with('role')->get()->first();

        // with errors တို့ with success တို့က session ထဲမှာ flash လုပ်တာမျိုးလား မသိ။
        if ($mmuser == null) {
            // return json_encode(array('status'=>false));
            return redirect()->back()->withErrors(['Username and Password does not match']);
        }
        // add user data to session
        //request()->session()->put('login_status',true);
        request()->session()->put('login_user', $mmuser);
        return redirect()->back()->withSuccess("Login Success");
    }



    public function register(Request $request)
    {

        // dd($request);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',

        ]);

        //store data 

        //first way
        MmUser::create([
            'username' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone,
            'password' => $request->password,

        ]);


        return redirect()->back()->withSuccess("Successfully registered . login Now !!!");
    }


    public function logout()
    {

        request()->session()->flush();
        return redirect()->route('home')->withSuccess("Successfully logout");
    }
}
