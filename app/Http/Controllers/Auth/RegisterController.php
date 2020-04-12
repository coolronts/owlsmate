<?php

namespace OWLSMATE\Http\Controllers\Auth;

use OWLSMATE\User;
use OWLSMATE\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;





class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|min:5',
            'year' => 'required',
            'program' => 'string|min:4|max:255',
            'image' => 'nullable|file|mimes:jpeg,png',
            
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \OWLSMATE\User
     */
    protected function create(array $data)
    {
        if (strpos($data['email'], '@usn.no' ) != false) {

            if (strlen($data['email']) == 13 ){
                $v = '1';

            }
            else{
                $v = '0';
            }
        }
        else{
            $v = '0';
        }
        
       
        $user = User::create([
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' =>  $data['last_name'],
            'phone' => $data['phone'],
            'year' => $data['year'],
            'program' => $data['program'],
            'verified' => $v,
            'verify_token' =>  Str::random(40),
           
        ]);
        
        
        if(request()->hasFile('image')){

            $image = request()->file('image')->getClientOriginalName();
            $user->update([
                'image' => request()->file('image')->store('images','public'),
            ]);
           
        }
       
        $user->sendEmailVerificationNotification();

        return $user;

    }
    public function VerifyEmailFirst()
    {
        return view('email.VerifyEmailFirst');
    }
    
}
