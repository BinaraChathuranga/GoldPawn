<?php

namespace App\Http\Controllers;
use App\kPrices;
use App\kValues;

use Illuminate\Http\Request;

class KvalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kval=kValues::all();
        return view('articles')->with('kval',$kval);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, kValues $kValues)
    {
        
        $kValues->kValues=$request->kValue;
        $kValues->save();
       

        return redirect()->route('home.kvalue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kValues=$request->ekValue;

        $data=kValues::find($id);
        $data->kValues = $kValues;

        $data->save();
        
        return redirect()->route('home.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kValueD=kValues::find($id);
        $kValueD->status="deleted";
        $kValueD->save();

        
        return redirect()->route('home.kvalue.index');
    }
}
