<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //
}
