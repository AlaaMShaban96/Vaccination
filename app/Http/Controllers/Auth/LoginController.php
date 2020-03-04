<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
// use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
     
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
  $user=  User::where('email','=',$loginData['email'])->first();
        if ($user->status == 2) {
            return redirect()->back()->withErrors(['المركز خارج الخدمة مؤقتا']);
        }else {
           
            
                if(!auth()->attempt($loginData)) {
                
                    return redirect()->back()->withErrors([' البريد الاكتروني غير صحيحة ','او',' كلمة السر غير صحيحة']);
                    // Redirect::back()->withErrors();
                    // return response(['message'=>'Invalid credentials'],401);User::where('email',$loginData['email'])->where('password',$loginData['password'])->get()
                }
                // dd('sucssful',auth()->user());
                switch (auth()->user()->account_type) {
                    case 1:
                        return redirect('/admin/index');
                        break;
                    case 2:
                    return redirect('/user/index');
                        break;
                    
                
                }
            }
        // return (new UserResource( auth()->user()))->response()->setStatusCode(200);
    }
    public function logout(Request $request)
    {
        if (auth()->check()) {

            return redirect('login')->with(Auth::logout());
            
        }
    }
    
}
