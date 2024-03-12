<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Controllers\ProudectController;
use App\Models\Proudect;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order=Order::where("user_id",auth::id())->get();
        return view('order.index')->with('orders',$order);
    }
    public function order()
    {
        $order=Order::all();
        return view('order.allorder')->with('orders',$order);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $order=Proudect::findOrFail($id);
        return view('order.create')->with('order',$order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $order=Proudect::findOrFail($id);
        $proudect=Proudect::findOrFail($id);

        $order=Order::create([
            'count'=> $request->count,
            'user_id'=> Auth::id(),
            'proudect_id'=>$proudect->id,
            'address'=>$request->address,            
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
