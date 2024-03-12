<?php

namespace App\Http\Controllers;

use App\Models\Proudect;
use Illuminate\Http\Request;
use Auth;

class ProudectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $proudect=Proudect::all();
       return view('proudect.index')->with('proudects',$proudect);
    }
    public function new(){
        $proudect=Proudect::all();
        return view('new')->with('proudects',$proudect);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proudect.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        "name"=>"required",
        "description"=>"required",
        ]);
        $proudect=Proudect::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'user_id'=> Auth::id(),
            
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Proudect $proudect ,$id)
    {
        $proudect=Proudect::where('id',$id)->first();
        return view('proudect.show')->with('proudect',$proudect);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proudect $proudect ,$id)
    {
        $proudect=Proudect::findOrFail($id);
        return view('proudect.edit')->with('proudect',$proudect);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proudect $proudect ,$id)
    {
        $this->validate($request,[
            "name"=>"required",
            "description"=>"required",
        ]);
        $proudect=Proudect::findOrFail($id);
        $proudect->name=$request->name;
        $proudect->description=$request->description;
        $proudect->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proudect $proudect,$id)
    {
        $proudect=Proudect::findOrFail($id);
        $proudect->delete();
        return redirect()->back();
    }
}
