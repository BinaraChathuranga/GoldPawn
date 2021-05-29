<?php

namespace App\Http\Controllers;
use App\articles;
use App\kPrices;
use APP\kValues;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $art=articles::all();
        return view('articles');

        

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
    public function store(Request $request, articles $articles)
    {
        $us=articles::where('artName',$request['artName'])->count();
        if($us>0){
        return redirect()->route('home.articles.index')->with('Redstatus','This article already exist !');   
        }

        else
        $articles->artName=$request->artName;
        $articles->save();
        return redirect()->route('home.articles.index')->with('status','Article added Successfully !');
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
        
        $us=articles::where('artName',$request['eartName'])->where('status',$request['Astatus'])->count();
        if($us>0){
        return redirect()->route('home.articles.index')->with('Redstatus','This article already exist !');   
        }

        else
        $articles=$request->eartName;
        $articles1=$request->Astatus;
        $data=articles::find($id);
        $data->artName = $articles;
        $data->status = $articles1;

        $data->save();
        
        return redirect()->route('home.articles.index')->with('status','Article updated Successfully !');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artD=articles::find($id);
        $artD->status="deleted";
        $artD->save();
        
        return redirect()->route('home.articles.index');
    }
}
