<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\transactions;
use App\CompletedTransactions;

use App\kValues;
use App\kPrices;
use App\ledger;
use App\cost;

use Illuminate\Http\Request;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      return view ('inTrans');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, transactions $transactions, ledger $ledger, cost $cost)
    {
        
        
        $transactions->fullName=$request->Name;
        $transactions->address=$request->Address;
        $transactions->contactNo=$request->contact;
        $transactions->nicNo=$request->NIC;
        $transactions->email=$request->email;
        $transactions->article=$request->articleName;
        $transactions->kValue=$request->karrotId;
        $transactions->goldWeight=$request->gw;
        $transactions->marketPrice=$request->tMPrice;
        $transactions->assessedPrice=$request->faPrice;
        $transactions->advance=$request->advance;
        $transactions->inBy=$request->user;
        $transactions->monthInterest=$request->interest;
        $transactions->interestRate=$request->interestRate;

        $ledger->mainBal=$request->totalBal;
        $ledger->avaBal=$request->mainBalance1;

       

        $transactions->save() && $ledger->save();
        
        // return redirect('/home');
        return redirect('/invoice');
        
       
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
        $transaction=transactions::find($id);
        return view('editTrans')->with('eTrans',$transaction);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
         
        // $transactions->fullName=$request->eName;
        // $transactions->address=$request->eAddress;
        // $transactions->contactNo=$request->econtact;
        // $transactions->nicNo=$request->eNIC;
        // $transactions->email=$request->eemail;
        // $transactions->article=$request->art;
        // $transactions->kValue=$request->karrotId;
        // $transactions->goldWeight=$request->egw;
        // $transactions->marketPrice=$request->etMPrice;
        // $transactions->assessedPrice=$request->efaPrice;
        // $transactions->advance=$request->eadvance;
        // $transactions->upBy=$request->euser;
        // $transactions->monthInterest=$request->einterest;
        // $transactions->interestRate=$request->einterestRate;
        
        

         $transactions1=$request->eName;
         $transactions2=$request->eAddress;
         $transactions3=$request->econtact;
         $transactions4=$request->eNIC;
         $transactions5=$request->eemail;
         $transactions6=$request->articleName;
         $transactions7=$request->karrotId;
         $transactions8=$request->egw;
         $transactions9=$request->etMPrice;
         $transactions10=$request->efaPrice;
         $transactions11=$request->eadvance;
         $transactions12=$request->euser;
         $transactions13=$request->einterest;
         $transactions14=$request->einterestRate;

         $data=transactions::find($id);

         $data->fullName=$transactions1;
         $data->address=$transactions2;
         $data->contactNo=$transactions3;
         $data->nicNo=$transactions4;
         $data->email=$transactions5;
         $data->article=$transactions6;
         $data->kValue=$transactions7;
         $data->goldWeight=$transactions8;
         $data->marketPrice=$transactions9;
         $data->assessedPrice=$transactions10;
         $data->advance=$transactions11;
         $data->upBy=$transactions12;
         $data->monthInterest=$transactions13;
         $data->interestRate=$transactions14;

         $data->save();
         return redirect()->route('home')->with('status','Transaction was Successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transacD=transactions::find($id);
        $transacD->delete();
        return redirect()->route('home');

    }
}
