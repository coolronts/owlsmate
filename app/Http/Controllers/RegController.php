<?php

namespace OWLSMATE\Http\Controllers;
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
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Mail;
use OWLSMATE\Mail\VerifyEmail;
use Session;
use Illuminate\Support\MessageBag;
class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:8',
            'year' => 'required',
            'program' => 'string|min:4|max:255',
            'image' => 'nullable|image',
            'university' => 'required',
            
        ]);
        
    }
    public function create(array $data)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        
       Session::flash('status','Please! Check Your Email For The Verification Email! ');
            
        
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
        $rules = [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:8',
            'year' => 'required',
            'program' => 'required|string|min:4|max:255',
            'image' => 'nullable|image',
            'university' => 'required',

        
        ];
        $this->validate($data,$rules);
        
        $user = User::create([
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' =>  $data['last_name'],
            'phone' => $data['phone'],
            'year' => $data['year'],
            'program' => $data['program'],
            'verified' => $v,
            'verifyToken' =>  Str::random(40),
            'university' => $data['university'],
           
        ]);
        
        $this->storeImage($user);
        $thisUser = User::findorfail($user->id);
        $this->sendEmail($thisUser);
      //return $user;
      //  $this->resendsendEmail($thisUser);
        return view('/verifyemail',compact('thisUser'));
      
    }

    public function getData(Request $request){
         $thisUser = User::where(['email' => $request->data])->first();
        if ($thisUser){
            if ($thisUser->verifyToken != Null){
                $this->sendEmail($thisUser);
                 Session::flash('status','Verification Email has been Reinboxed into your Mail Inbox! ');
                return view('verifyemail',compact('thisUser'));
            }
            else{
               Session::flash('alert','The account email has already been verified!');

                return view('verifyemail',compact('thisUser'));
            }
        echo "addas";
    }
        return $request->all();
    }


    public function sendEmail($thisUser){
        Mail::to($thisUser['email'] )->send(new VerifyEmail($thisUser));
    }

    public function VerifyEmailFirst() {
        return view('email.VerifyEmailFirst');

    }

    public function sendEmailDone($email,$verifyToken) {

        $user = User::where(['email' => $email, 'verifyToken' => $verifyToken])->first();
        if ($user){
            User::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['status' => '1', 'verifyToken' => NULL]);
            return redirect('login');
        }
        else {
            return redirect('error');
        }
        

    }
    public function resendEmail(Request $request) {
        $user = User::where(['email' => $request])->first();
        if ($user){

            if ($user->verifyToken != Null){
                $this->sendEmail($user);
                return redirect()->back()->with('success','Verfication Email Has beeen Sent!');
            }
            else {

                return redirect()->back()->with('alert','This email has already been verified!');  
            }
        }
        else{
            return redirect()->back()->with('alert','No User has been found with this email!');
        }
        
        
    }

    private function storeImage($New_User){
    
        if (request()->has('image')){
            $New_User->update([
                'image'=>request()->image->store('images','public'),
        ]);

            $image = Image::make(public_path('storage/'.$New_User->image));
            $image->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
