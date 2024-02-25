<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        return view('Settings.create');
    }
    public function list(){
        $setting=Setting::latest()->get();
        return view('setting.list');
    }

    public function store(Request $request){
        $setting= new Setting;

        $setting->logo=$request['logo'];

        if($request->hasFile('logo')) { $file=$request->file('logo');
        $name=$file->getClientOriginalName();
        $request->file('logo')->storeAs('logo/',$name);
        $file->move(public_path('logo/'),$name);
        $setting->logo = $name;
        }

        $setting->facebook=$request['facebook'];
        $setting->instagram=$request['instagram'];
        $setting->twitter=$request['twitter'];
        $setting->linknd=$request['linknd'];
        $setting->head_image=$request['head_image'];

        if($request->hasFile('head_image')) { $file=$request->file('head_image');
            $name=$file->getClientOriginalName();
            $request->file('head_image')->storeAs('head_image/',$name);
            $file->move(public_path('head_image/'),$name);
            $setting->head_image = $name;
            }

        $setting->heading=$request['heading'];
        $setting->name=$request['name'];
        $setting->price=$request['price'];
        $setting->testmonial_image=$request['testmonial_image'];

        if($request->hasFile('testmonial_image')) { $file=$request->file('testmonial_image');
            $name=$file->getClientOriginalName();
            $request->file('testmonial_image')->storeAs('testmonial_image/',$name);
            $file->move(public_path('testmonial_image/'),$name);
            $setting->testmonial_image = $name;
            }
        $setting->testmonial_name=$request['testmonial_name'];
        $setting->testmonial_sub_des=$request['testmonial_sub_des'];
        $setting->testmonial_full_des=$request['testmonial_full_des'];
        $setting->discount_image=$request['discount_image'];
        $setting->discount=$request['discount'];
        $setting->discount_head=$request['discount_head'];
        $setting->discount_price=$request['discount_price'];

        $setting->save();
        // return redirect('setting/list');


    }
    public function delete($id){
        $setting=Setting::find($id)->delete();
        return back();


    }
    public function show($id){
        $url=url('/setting/update')."/".$id;
        $setting=Setting::find($id);
        return view('Prodoct.edit',compact('url','prodoct','subcatagory'));
    }
    public function upload($id, Request $request){

        $setting=Setting::find($id);

        if($request->hasFile('photo')) { $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $setting->photo=$request['photo'];
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $setting->photo = $name;
        }

        $setting->name=$request['name'];
        $setting->price=$request['price'];
        $setting->discription=$request['discription'];
        $setting->subcatagory_id=$request['subcatagory_id'];

        $setting->save();

        return redirect('prodoct/list');
    }
}
