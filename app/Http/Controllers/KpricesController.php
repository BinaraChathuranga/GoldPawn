<?php

namespace App\Http\Controllers;
use App\kPrices;
use App\kValues;
use Illuminate\Http\Request;

class KpricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kprice=kPrices::all();
        return view('articles')->with('kprice',$kprice);
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
    public function store(Request $request, kPrices $kPrices)
    {
        $us=kPrices::where('kValue',$request['karrotVal'])->count();
        if($us>0){
        return redirect()->route('home.kPrices.index')->with('Redstatus','This karat value already exist !');   
        }

        else
        $kPrices->kValue=$request->karrotVal;
        $kPrices->marketPrice=$request->marketP;
        $kPrices->assessedPrice=$request->assessedP;
        $kPrices->intrest_rate=$request->intrest;
    
        $kPrices->save();
       

        return redirect()->route('home.kPrices.index')->with('status','Karat value added Successfully !');
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
    
        $prices1=$request->ekarrotVal;
        $prices2=$request->emarketP;
        $prices3=$request->eassessedP;
        $prices4=$request->eintrest;
        $prices5=$request->status;


        $data=kPrices::find($id);

        $data->kValue = $prices1;
        $data->marketPrice = $prices2;
        $data->assessedPrice = $prices3;
        $data->intrest_rate = $prices4;
        $data->status= $prices5;


        $data->save();
        
        return redirect()->route('home.articles.index')->with('status','Karat Value updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kPriceD=kPrices::find($id);
        $kPriceD->status='deleted';
        $kPriceD->save();
        
        return redirect()->route('home.kPrices.index');
    }
}
