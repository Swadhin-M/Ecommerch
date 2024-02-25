<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
    public function index(){
        return view('Catagory.create');
    }
    public function list(){
        $catagorys=Catagory::latest()->get();
        return view('Catagory.list',compact('catagorys'));
    }
    public function store(Request $request){
        $catagorys= new Catagory;
        $catagorys->name=$request['name'];
        $catagorys->save();
        return redirect('catagory/list');


    }
    public function delete($id){
        $catagorys=Catagory::find($id)->delete();
        return back();


    }
    public function show($id){
        $url=url('/catagory/update')."/".$id;
        $catagorys=Catagory::find($id);
        return view('Catagory.edit',compact('url','catagorys'));
    }
    public function upload($id, Request $request){
     $catagorys=Catagory::find($id);
     $catagorys->name=$request['name'];
     $catagorys->save();

    return redirect('catagory/list');
    }
}
