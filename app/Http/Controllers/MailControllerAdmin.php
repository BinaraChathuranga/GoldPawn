<?php

namespace App\Http\Controllers;
use Mail;
use App\transactions;
use App\Mail\SendEmail;
use Session;

use Illuminate\Http\Request;

class MailControllerAdmin extends Controller
{
    public function homeEmail1Admin($id)
    {
        $transaction=transactions::find($id);
        return view('warn1Email')->with('warn',$transaction);
       
    }

    public function homeEmail2Admin($id)
    {
        $transaction=transactions::find($id);
        return view('warn2Email')->with('warn',$transaction);
       
    }

    public function homeEmail3Admin($id)
    {
        $transaction=transactions::find($id);
        return view('warn3Email')->with('warn',$transaction);
       
    }

    public function sendemail1(Request $get)
    {
        $this->validate($get,[
            "email"=>"required",
            "subject"=>"required",
            "messege"=>"required",

        ]);

       
        $id=$get->id;
        $email=$get->email;
        $subject=$get->subject;
        $messege=$get->messege;
        $warn=transactions::find($id);
        $warn->warnIssued= 1;

        
        

        Mail::to($email)->send(new SendEmail($subject,$messege,$warn));
        $warn->save();
        Session::flash("sucess");
        
        return redirect()->route('co-warning1')->with('status','1st warn was email sent successfully to customer !');


}

      public function sendemail2(Request $get)
    {
        $this->validate($get,[
            "email"=>"required",
            "subject"=>"required",
            "messege"=>"required",

        ]);

       
        $id=$get->id;
        $email=$get->email;
        $subject=$get->subject;
        $messege=$get->messege;
        $warn=transactions::find($id);
        $warn->warnIssued= 2;
        
        

        Mail::to($email)->send(new SendEmail($subject,$messege,$warn));
        $warn->save();
        Session::flash("sucess");
        
        return redirect()->route('co-warning2')->with('status','2nd warn was email sent successfully to customer !');


}

public function sendemail3(Request $get)
{
    $this->validate($get,[
        "email"=>"required",
        "subject"=>"required",
        "messege"=>"required",

    ]);

   
    $id=$get->id;
    $email=$get->email;
    $subject=$get->subject;
    $messege=$get->messege;
    $warn=transactions::find($id);
    $warn->warnIssued= 3;
    
    

    Mail::to($email)->send(new SendEmail($subject,$messege,$warn));
    $warn->save();
    Session::flash("sucess");
    
    return redirect()->route('co-warning3')->with('status','3rd warn was email sent successfully to customer !');


}
}
