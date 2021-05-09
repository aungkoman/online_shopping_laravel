<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# use Redirect;

// model import list
use App\Models\MmUser;
use App\Models\Role;

class MmUserController extends Controller
{
    //
    public function index(){
        $data = array();
        $data['mmusers'] = MmUser::all();
        return view('mmuser.mmuser_table', $data);
    }
    public function detail($id){
        $mmuser = MmUser::find($id);
        $data = array();
        $data['mmuser'] = ($mmuser == null ) ? new MmUser : $mmuser;
        return view('mmuser.mmuser_detail', $data);
    }
    public function edit($id = null){
        $mmuser;
        if($id == null ) $mmuser = new MmUser;
        else $mmuser = MmUser::find($id);
        $data = array();
        $data['mmuser'] = $mmuser;
        $data['roles'] = Role::all();
        return view('mmuser.mmuser_form',$data);
    }
    public function insert($id = null){
        $mmuser;
        if($id == null) $mmuser = MmUser::create(request()->all());
        else{
            $mmuser = MmUser::find($id);
            $mmuser->fill(request()->all())->save();
        }
        return redirect()->route('mmuser.index');
    }
    
    public function delete($id){
        MmUser::destroy($id);
        return redirect()->route('mmuser.index');
    }
    // login
    
    public function login(){
        // input validation SERVER SIDE
        $data = request()->all();
        $username = isset($data['username']) ? $data['username'] : '';
        $password = isset($data['password']) ? $data['password'] : '';

        // relationship တွေကိုပါ load လုပ်ထားမှ toJson မှာ ပါလာမှာ ဖြစ်တယ်။ ->with('role') in this case
        // မဟုတ်ဘူး load လုပ်ထားပြီးရင် တန်းသုံးလို့ ရနေပြီ။ run time မှ ပါလာမှာ မဟုတ်ဘူး
        $mmuser = MmUser::where('username',$username)->where('password',$password)->with('role')->get()->first();

        // with errors တို့ with success တို့က session ထဲမှာ flash လုပ်တာမျိုးလား မသိ။
        if($mmuser == null){
            // return json_encode(array('status'=>false));
            return redirect()->back()->withErrors(['Username and Password does not match']);
        } 
        // add user data to session
        //request()->session()->put('login_status',true);
        request()->session()->put('login_user_id',$mmuser->id);
        return redirect()->route('shop')->withSuccess("Login Success");
        // return redirect()->route('goods.index');
        //return Redirect::back()->withSuccess("Login Success");
        //$res = array();
        //$res['status'] = true;
        //$res['message'] = 'login ok';
        //$res['data'] = $mmuser;
        //return $mmuser->toJson();
        //return json_encode($res);
        //$data = array();
        //$data['mmuser'] = ($mmuser == null ) ? new MmUser : $mmuser;
       // return view('mmuser.mmuser_detail', $data);

       /*
            login ဝင်ပြီးသွားရင် ဘာလုပ်မှာလဲ?
            အဆင်မပြေရင် back ပြန်သွား message တစ်ခုနဲ့
       */
    }
    
    public function logout(){
        request()->session()->flush();
        return redirect()->route('shop.login_form')->withSuccess("Logout Success");
    }
}
