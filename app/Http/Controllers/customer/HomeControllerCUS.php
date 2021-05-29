<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\transactions;

class HomeControllerCUS extends Controller
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
    public function index(){

        return view('customer.homeCUS');
    }

    public function showDetails(Request $request){
        $nic=$request->nic;
        $cusinfo=transactions::where('nicNo','=',$nic)
                            ->where('status','=','not_complete')
        
                             ->get();
        return view('customer.cusInfo')->with('transac',$cusinfo);
    }

    public function transView($id)
    {
       $transaction=transactions::find($id);
       return view('customer.transactionDetailsCUS')->with('Trans',$transaction);
    
    }
}
