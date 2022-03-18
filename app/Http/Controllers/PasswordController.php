<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function sendPassword( Request $request)
    {
        $request->validate([
            'email' => 'email|required',          
        ]);
  
        $user  =  User::where('email','=', $request->email)->first();


        if (empty($user)) {
            return redirect()->back()->withErrors([' البريد الاكتروني غير صحيحة ']);
        }
        $data  = ['password'=>mt_rand(100000, 999999)];

        $email = $user->email;
        
        $user->password= Hash::make($data['password']);

        $user->save();

        dd($data['password']);
          try {
                 
                 Mail::send('emails.resetPassword',compact('data','user'), function($message) use ($email) {

                $message->to($email)->subject('تغيير كلمة السر');
    
                 });
          } catch (\Throwable $th) {

            return redirect()->back()->withErrors([' هناك مشكلة في الانترنت ']);
            
          }
       

    

       return redirect('/login');

    }
}
