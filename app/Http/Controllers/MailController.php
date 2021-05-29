<?php

namespace App\Http\Controllers;
use Mail;
use App\transactions;
use App\Mail\SendEmail;
use Session;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function homeEmail1($id)
    {
        $transaction=transactions::find($id);
        return view('co_admin.warn1EmailCO')->with('warn',$transaction);
       
    }

    public function homeEmail2($id)
    {
        $transaction=transactions::find($id);
        return view('co_admin.warn2EmailCO')->with('warn',$transaction);
       
    }

    public function homeEmail3($id)
    {
        $transaction=transactions::find($id);
        return view('co_admin.warn3EmailCO')->with('warn',$transaction);
       
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
        
        return redirect()->route('warning1')->with('status','1st warn was email sent successfully to customer !');
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
        
        return redirect()->route('warning2')->with('status','2nd warn email was sent successfully to customer !');


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
    
    return redirect()->route('warning3')->with('status','3rd warn email was sent successfully to customer !');


}
}
