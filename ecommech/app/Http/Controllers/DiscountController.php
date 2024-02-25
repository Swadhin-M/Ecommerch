<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
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
        $discount=Discount::latest()->get();
        return view('Discount.list',compact('discount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $discount=new Discount;
        $discount->dis_pic=$request['dis_pic'];

        if($request->hasFile('dis_pic')) { $file=$request->file('dis_pic');
            $name=$file->getClientOriginalName();
            $request->file('dis_pic')->storeAs('dis_pic/',$name);
            $file->move(public_path('dis_pic/'),$name);
            $discount->dis_pic = $name;
            }
        $discount->discount=$request['discount'];
        $discount->name=$request['name'];
        $discount->price=$request['price'];
        $discount->save();
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
        $discount=Discount::find($id);
        $url=url('/discount/update')."/".$id;
        return view('discount.edit',compact('discount','url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $discount=Discount::find($id);

        if($request->hasFile('dis_pic')) { $file=$request->file('dis_pic');
        $name=$file->getClientOriginalName();
        $discount->dis_pic=$request['dis_pic'];
        $request->file('dis_pic')->storeAs('dis_pic/',$name);
        $file->move(public_path('dis_pic/'),$name);
        $discount->dis_pic = $name;
        }

        $discount->discount=$request['discount'];
        $discount->name=$request['name'];
        $discount->price=$request['price'];
        $discount->save();
        return redirect('discount/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $discount=Discount::find($id)->delete();
        return back();
    }
}
