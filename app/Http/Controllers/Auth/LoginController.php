<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\Auth\LoginController;
use App\Providers\RouteServiceProvider;
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
//   $user=  Admin::where('email','=',$loginData['email'])->first();
  $user=  User::where('email','=',$loginData['email'])->first();

        if ( !auth()->attempt($loginData)) {

            return redirect()->back()->withErrors([' البريد الاكتروني غير صحيحة ','او',' كلمة السر غير صحيحة']);

        }else {
            // dd(auth('admin')->user()->name);
                if($user->status == 2) {

                    return redirect()->back()->withErrors(['المركز خارج الخدمة مؤقتا']);
                }
                switch (auth()->user()->account_type) {

                    case 1:

                        return redirect('/admin/index');
                        break;
                    case 2:

                         return redirect('/user/index');
                        break;
                }
            }
    }
    public function logout(Request $request)
    {
        if (auth()->check()) {

            return redirect('login')->with(Auth::logout());

        }
    }

}
