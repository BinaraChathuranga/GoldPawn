<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminRegController extends Controller
{
    public function index()
    {
        return view('adminReg');
    }

    public function AdminReg(Request $request)
    {    
        $this->validation($request);
        // User::create($request->all());
             User::create([
            'name' =>  $request['name'],
            'email' =>  $request['email'],
            'role' =>$request['role'],
            
            'password' => bcrypt( $request['password']),
        ]);

     
        return redirect('/home')->with('status','User Successfully registered !');
    }

    public function validation($request)
    {
        return $this->validate($request, [
                'name' => 'required | max:255',
                'email' => 'required |email|unique:users|max:255',
                'password' => 'required|confirmed|max:255',
        ]);
    }

    public function activeUsers()
    {
       
        $aUsers=User::where('role','!=','customer')->get();
        return view('activeUsers')->with('aUsers', $aUsers);
    }

    public function regCustomers()
    {
       
        $aUsers=User::where('role','=','customer')->get();
        return view('customers')->with('aUsers', $aUsers);
    }


}
