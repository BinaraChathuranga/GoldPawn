<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\AlertNotice;
class warnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editWarning');
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
    public function store(Request $request)
    {
        //
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
        $warn1du=$request->warn1duration;
        $warn1no= $request->warn1notice;
        $warn1noEng= $request->warn1noticeeng;

        $warn2du=$request->warn2duration;
        $warn2no= $request->warn2notice;
        $warn2noEng= $request->warn2noticeeng;

        $warn3du=$request->warn3duration;
        $warn3no= $request->warn3notice;
        $warn3noEng= $request->warn3noticeeng;

        
        $data=AlertNotice::find($id);

        $data->warn1_duration=$warn1du;
        $data->warn1_notice=$warn1no;
        $data->warn1_notice_eng=$warn1noEng;

        $data->warn2_duration=$warn2du;
        $data->warn2_notice=$warn2no;
        $data->warn2_notice_eng=$warn2noEng;

        $data->warn3_duration=$warn3du;
        $data->warn3_notice=$warn3no;
        $data->warn3_notice_eng=$warn3noEng;

         $data->save();
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
