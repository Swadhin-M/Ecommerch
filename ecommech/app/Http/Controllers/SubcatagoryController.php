<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcatagory;
use App\Models\Catagory;

class SubcatagoryController extends Controller
{
    public function index(){
        $Catagory=Catagory::all();
        return view('sub_catagory.create',compact('Catagory'));
    }
    public function list(){
        $Subcatagory=Subcatagory::latest()->get();
        $catagory=Catagory::all();
        return view('sub_catagory.list',compact('Subcatagory','catagory'));
    }
    public function store(Request $request){
        $Subcatagory= new Subcatagory;
        $Subcatagory->name=$request['name'];
        $Subcatagory->catagory_id=$request['catagory_id'];
        $Subcatagory->save();
        return redirect('subcatagory/list');


    }
    public function delete($id){
        $Subcatagory=Subcatagory::find($id)->delete();
        return back();


    }
    public function show($id){
        $catagory=Catagory::all();
        $url=url('/subcatagory/update')."/".$id;
        $Subcatagory=Subcatagory::find($id);
        return view('sub_catagory.edit',compact('url','Subcatagory','catagory'));
    }
    public function upload($id, Request $request){
     $Subcatagory=Subcatagory::find($id);
     $Subcatagory->name=$request['name'];
     $Subcatagory->catagory_id=$request['catagory_id'];
     $Subcatagory->save();

    return redirect('subcatagory/list');
    }
}
