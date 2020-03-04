<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;///

class UserController extends Controller
{
    use RegistersUsers;////
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::orderBy('name')->get();//->paginate(10);; 
        $cities = City::all();
        return view('admin/users',compact('users','cities'));

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
    public function store(Request $request)
    {
   
        // $this->validator($request->all())->validate();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'city_id' => 'required',
            'phone_number' => 'required',
            'account_type' => 'required',


        ]);
    //     $request->password =Hash::make($request->password);

        // User::Create($request->all()); 

        User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city_id' => $request->city_id,
            'phone_number' => $request->phone_number,
            'account_type' => $request->account_type,
    
    
        ]); 

       
   
    // event(new Registered($user = $this->create($request->all())));

        return response()->json([ 'succeful'=>'تمت اضافة الحساب بنجاح'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->status = 2;
        $user->save();
        return response()->json([ 'succeful'=>'تمت إلغاء تفعيل الحساب بنجاح'], 200);
    }



/// مركز التطعيمات ///////////////////////////////////////////////////////////////


    public function show()
    {
        $user=User::find(auth()->user()->id);
        $cities=City::all();
        return view('VaccinationCenters.user_profile',compact('user','cities'));
    }


   
    public function update(Request $request)
    {
        $this->validate($request, [
          
           
            'password' => 'required',
            'resetPassword' => 'required',
            'phone_number' => 'required|max:11|min:10',

        ]);
        
       


        if ($request->password === '0' ) {
            
          
            auth()->user()->phone_number = $request->phone_number;

      
            auth()->user()->save();
           
            // return response()->json(['update phone number is done'], 200);
            

        }elseif (Hash::check( $request->password, auth()->user()->password)) {
            
         
 
             auth()->user()->phone_number= $request->phone_number;
             auth()->user()->password= Hash::make($request->resetPassword);
             auth()->user()->save();
             auth()->login(auth()->user());
            return response()->json(['update password is done'], 200);

        }else {
           

            return response()->json(['errors'=>['password'=>'الرمز السري الحالي غير صحيحة']], 422);
        }
        dd(auth()->user()->phone_number);


    }

}
