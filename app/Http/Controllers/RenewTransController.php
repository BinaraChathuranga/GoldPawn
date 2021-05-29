<?php

namespace App\Http\Controllers;
use App\renewTransactions;
use App\ledger;
use App\income;

use Illuminate\Http\Request;

class RenewTransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $renewed=renewTransactions::get()->all();
      return view('renewedTransaction')->with('renewed',$renewed); 
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
    public function store(Request $request, renewTransactions $Rtransactions,ledger $ledger,income $income )
    {
        $Rtransactions->transId=$request->RtransId;
        $Rtransactions->fullName=$request->RName;
        $Rtransactions->address=$request->RAddress;
        $Rtransactions->contactNo=$request->Rcontact;
        $Rtransactions->nicNo=$request->RNIC;
        $Rtransactions->email=$request->Remail;
        $Rtransactions->article=$request->RarticleName;
        $Rtransactions->kValue=$request->RkarrotId;
        $Rtransactions->goldWeight=$request->Rgw;
        $Rtransactions->marketPrice=$request->RtMPrice;
        $Rtransactions->assessedPrice=$request->RfaPrice;
        $Rtransactions->advance=$request->Radvance;
        $Rtransactions->completedBy=$request->Ruser;
        $Rtransactions->inBy=$request->Rinuser;
        $Rtransactions->interestPay=$request->Rinterest;
        $Rtransactions->intrestRate=$request->RinterestRate;
        $Rtransactions->monthInterest=$request->RmonthIntrest;
        $Rtransactions->totalPay=$request->Rinterest;
        $Rtransactions->transCreated_at=$request->createdat;

       
        
       
        $Rtransactions->save();

        $RenewInvoice=renewTransactions::where('status','renewed')->latest()->first();
        return view('renewInvoice')->with('RenewTrans', $RenewInvoice);
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
        //
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
