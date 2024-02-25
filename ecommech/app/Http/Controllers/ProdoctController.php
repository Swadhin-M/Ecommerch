<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcatagory;
use App\Models\Prodoct;

class ProdoctController extends Controller
{
    public function index(){
        $subcatagory=Subcatagory::all();
        return view('Prodoct.create', compact('subcatagory'));
    }
    public function list(){
        $prodoct=Prodoct::latest()->get();
        return view('Prodoct.list',compact('prodoct'));
    }

    public function store(Request $request){
        $prodoct= new Prodoct;

        $prodoct->photo=$request['photo'];

        if($request->hasFile('photo')) { $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $prodoct->photo = $name;
        }

        $prodoct->name=$request['name'];
        $prodoct->price=$request['price'];
        $prodoct->discription=$request['discription'];
        $prodoct->subcatagory_id=$request['subcatagory_id'];

        $prodoct->save();
        return redirect('prodoct/list');


    }
    public function delete($id){
        $prodoct=Prodoct::find($id)->delete();
        return back();


    }
    public function show($id){
        $subcatagory=Subcatagory::get();
        $url=url('/prodoct/update')."/".$id;
        $prodoct=Prodoct::find($id);
        return view('Prodoct.edit',compact('url','prodoct','subcatagory'));
    }
    public function upload($id, Request $request){

        $prodoct=Prodoct::find($id);

        if($request->hasFile('photo')) { $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $prodoct->photo=$request['photo'];
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $prodoct->photo = $name;
        }

        $prodoct->name=$request['name'];
        $prodoct->price=$request['price'];
        $prodoct->discription=$request['discription'];
        $prodoct->subcatagory_id=$request['subcatagory_id'];

        $prodoct->save();

        return redirect('prodoct/list');
    }
}
