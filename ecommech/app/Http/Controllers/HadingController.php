<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hading;

class HadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Advicement.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $head=Hading::latest()->get();
        return view('Advicement.list',compact('head'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $head=new Hading;
        $head->image=$request['image'];

        if($request->hasFile('image')) { $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $request->file('image')->storeAs('image/',$name);
            $file->move(public_path('image/'),$name);
            $head->image = $name;
            }
        $head->heading=$request['head'];
        $head->name=$request['name'];
        $head->price=$request['price'];
        $head->save();
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $head=Hading::find($id);
        $url=url('/heading/update')."/".$id;
        return view('Advicement.edit',compact('head','url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $head=Hading::find($id);

        if($request->hasFile('photo')) { $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $head->photo=$request['photo'];
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $head->photo = $name;
        }

        $head->name=$request['name'];
        $head->price=$request['price'];
        $head->heading=$request['head'];


        $head->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $head=Hading::find($id)->delete();
        return back();
    }
}
