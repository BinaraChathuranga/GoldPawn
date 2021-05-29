<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompletedTransactions;
use App\transactions;
use App\ledger;
use App\income;
class CompletedTransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $completed=CompletedTransactions::get()->all();
      return view('CompletedTransactions')->with('completed',$completed);
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
    public function store(Request $request, CompletedTransactions $Ctransactions, ledger $ledger, income $income)
    {
        $Ctransactions->transId=$request->transId;
        $Ctransactions->fullName=$request->Name;
        $Ctransactions->address=$request->Address;
        $Ctransactions->contactNo=$request->contact;
        $Ctransactions->nicNo=$request->NIC;
        $Ctransactions->email=$request->email;
        $Ctransactions->article=$request->articleName;
        $Ctransactions->kValue=$request->karrotId;
        $Ctransactions->goldWeight=$request->gw;
        $Ctransactions->marketPrice=$request->tMPrice;
        $Ctransactions->assessedPrice=$request->faPrice;
        $Ctransactions->advance=$request->advance;
        $Ctransactions->completedBy=$request->user;
        $Ctransactions->inBy=$request->inuser;
        $Ctransactions->interestPay=$request->interest;
        $Ctransactions->intrestRate=$request->interestRate;
        $Ctransactions->monthInterest=$request->monthIntrest;
        $Ctransactions->transCreated_at=$request->createdat;

        $Ctransactions->totalPay=$request->totalpaid;

         

        $Ctransactions->save();
      

        $CompleteInvoice=CompletedTransactions::where('status','completed')->latest()->first();
        return view('completedInvoice')->with('completedTrans', $CompleteInvoice);
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
      
    }
}
