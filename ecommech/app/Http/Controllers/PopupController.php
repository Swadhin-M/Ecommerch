<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Discount.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $popup=Popup::latest()->get();
        return view('Discount.list',compact('discount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $popup=new Popup;
        $popup->dis_pic=$request['dis_pic'];

        if($request->hasFile('dis_pic')) { $file=$request->file('dis_pic');
            $name=$file->getClientOriginalName();
            $request->file('dis_pic')->storeAs('dis_pic/',$name);
            $file->move(public_path('dis_pic/'),$name);
            $popup->dis_pic = $name;
            }
        $popup->popup=$request['discount'];
        $popup->name=$request['name'];
        $popup->price=$request['price'];
        $popup->save();
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
        $popup=Popup::find($id);
        $url=url('/popup/update')."/".$id;
        return view('discount.edit',compact('discount','url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $popup=Popup::find($id);

        if($request->hasFile('dis_pic')) { $file=$request->file('dis_pic');
        $name=$file->getClientOriginalName();
        $discount->dis_pic=$request['dis_pic'];
        $request->file('dis_pic')->storeAs('dis_pic/',$name);
        $file->move(public_path('dis_pic/'),$name);
        $popup->dis_pic = $name;
        }

        $popup->discount=$request['discount'];
        $popup->name=$request['name'];
        $popup->price=$request['price'];
        $popup->save();
        return redirect('discount/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $popup=Popup::find($id)->delete();
        return back();
    }
}
