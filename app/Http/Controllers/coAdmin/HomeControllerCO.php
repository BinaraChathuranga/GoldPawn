<?php

namespace App\Http\Controllers\coAdmin;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
 use DB;
 use App\kValues;
 use App\kPrices;
 use App\transactions;
 use App\ledger;
 use App\CompletedTransactions;
 use App\renewTransactions;
 use App\User;
 use App\AlertNotice;
 






class HomeControllerCO extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transac=transactions::where('status','!=','completed')->get();
        return view('co_admin.homeCO')->with('transac',$transac);
      
        
    }
     public function transView($id)
     {
        $transaction=transactions::find($id);
        return view('co_admin.transactionDetailsCO')->with('Trans',$transaction);
     
     }
     public function comtransView($id)
     {
        $comtransaction=CompletedTransactions::find($id);
        return view('co_admin.ComtransactionDetails')->with('Trans',$comtransaction);
     
     }

     public function renewtransView($id)
     {
        $renewtransaction=renewTransactions::find($id);
        return view('co_admin.RenewtransactionDetails')->with('Trans',$renewtransaction);
     
     }



     public function completeTransaction($id)
     {
        $transaction=transactions::find($id);
        $transaction->status='completed';
        $transaction->save();
        return redirect()->route('co-home')->with('status','Transaction was Successfully completed !');
     
     }

     public function deleteTransaction($id=null)
     {
         transactions::where(['id'=>$id])->delete();
        
       
        return redirect()->route('co-home')->with('status','Transaction was Successfully deleted !');
     
     }


     public function renewInvoice($id)
     {
        $transaction=transactions::find($id);
        $transaction->delete();


        $RenewTrans=renewTransactions::where('status','renewed')->latest()->first();
        return view('co_admin.renewTransCO')->with('RenewTrans', $RenewTrans);
     
     }

     public function renewTrans(Request $request, transactions $transactions, renewTransactions $renewTransactions )
     {
      $transactions->fullName=$request->ReName;
      $transactions->address=$request->ReAddress;
      $transactions->contactNo=$request->Recontact;
      $transactions->nicNo=$request->ReNIC;
      $transactions->email=$request->Reemail;
      $transactions->article=$request->articleName;
      $transactions->kValue=$request->karrotId;
      $transactions->goldWeight=$request->Regw;
      $transactions->marketPrice=$request->RetMPrice;
      $transactions->assessedPrice=$request->RefaPrice;
      $transactions->advance=$request->Readvance;
      $transactions->inBy=$request->Reuser;
      $transactions->monthInterest=$request->Reinterest;
      $transactions->interestRate=$request->ReinterestRate;
      $transactions->invoiceIssued=1;
      $transactions->status='renewed';

      $transactions->save();


      

      return redirect()->route('co-home')->with('status','Transaction was Successfully renewed !');
     
     }

  

     public function invoiceAuto()
     {
        $autoInvoice=transactions::where('invoiceIssued',0)->first();
        return view('co_admin.invoice1CO')->with('invo', $autoInvoice);
     
     }

     public function invoiceIssued($id)
     {
       $invoice=transactions::find($id);
       $invoice->invoiceIssued=1;
       $invoice->save();
       return redirect()->route('co-home')->with('status','Transaction was Successfull !');
     
     }

     public function getMprice()
     {
        //  $mPrice=kPrices::where('kId',$id)->pluck("marketPrice","id");
        //  return json_encode($mPrice);
           $k_id=Input::get('k_id');
           $mprice=kPrices::where('kValue','=',$k_id)->get();
            return response()->json($mprice);
      
      }

     public function getAprice()
      {
        //   $aPrice=kPrices::where('kId',$id)->pluck("assessedPrice","id");
        //   return json_encode($aPrice);
        $k_id=Input::get('k_id');
           $aprice=kPrices::where('kValue','=',$k_id)->get();
            return response()->json($aprice);
      }

      public function getIRate()
      {
        //   $aPrice=kPrices::where('kId',$id)->pluck("assessedPrice","id");
        //   return json_encode($aPrice);
        $k_id=Input::get('k_id');
           $iRate=kPrices::where('kValue','=',$k_id)->get();
            return response()->json($iRate);
      }

  
      public function kValues()
     {

      
           $art_id=Input::get('art_id');
           $kValue=kValues::where('article','=',$art_id)->get();
            return response()->json($kValue);
     
     }

     public function warning1(Request $request)
     {
        $warningDays1=$request->war1;
        $warningDays2=$request->war2;
        $warningDuration1=$warningDays1;
        $warningDuration2=$warningDays2;
        $date=Carbon::today()->subDays($warningDuration1);
        $date1=Carbon::today()->subDays($warningDuration2);
        $ex=transactions::where('warnIssued','=', '0')
                        ->where('created_at','>',$date)
                        ->where('status','!=','completed')
                           
                        ->get()->all();
        return view ('co_admin.warning1CO')->with('day',$ex);
     }

     public function warning2(Request $request)
     {
        $warningDays2=$request->war2;
        $warningDays3=$request->war3;
        $warningDuration2=$warningDays2;
        $warningDuration3=$warningDays3;
        $date=Carbon::today()->subDays($warningDuration2);
        $date1=Carbon::today()->subDays($warningDuration3);
        $ex=transactions::where('warnIssued','=',1)
                        ->where('created_at','<',$date1)
                        ->where('status','!=','completed')
                         ->get()->all();
        return view ('co_admin.warning2CO')->with('day',$ex);
     }

     public function warning3(Request $request)
     {
       
        $warningDays3=$request->war3;
        $warningDuration3=$warningDays3;
        $date3=Carbon::today()->subDays($warningDuration3);
        $ex=transactions:: where('warnIssued','=',2) 
                          ->where('created_at', '<' ,$date3)
                          ->where('status','!=','completed')
                          ->get()->all();
        return view ('co_admin.warning3CO')->with('day',$ex);
     }

     public function warn1letter($id)
     {
        $warn1=transactions::find($id);
        return view('co_admin.warn1letterCO')->with('warn1',$warn1);
     
     }

     public function warn2letter($id)
     {
        $warn1=transactions::find($id);
        return view('co_admin.warn2letterCO')->with('warn1',$warn1);
     
     }

     public function warn3letter($id)
     {
        $warn1=transactions::find($id);
        return view('co_admin.warn3letterCO')->with('warn1',$warn1);
     
     }

     public function warn1letterIssued($id)
     {
        $warn1=transactions::find($id);
        $warn1->warnIssued=1;
        $warn1->save();
        return redirect()->route('co-warnin1');
     
     }

     public function warn2letterIssued($id)
     {
      $warn2=transactions::find($id);
      $warn2->warnIssued=2;
      $warn2->save();
      return redirect()->route('co-warning2');
     
     }

     public function warn3letterIssued($id)
     {
      $warn3=transactions::find($id);
      $warn3->warnIssued=3;
      $warn3->save();
      return redirect()->route('co-warning3');
     
     }

   //   public function warn1View($id)
   //   {
   //      $transaction=transactions::find($id);
   //      return view('co_admin.warn1EmailCO')->with('warn',$transaction);
     
   //   }
     


     
    

    



 

    
    
   
   


}
