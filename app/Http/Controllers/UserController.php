<?php

namespace OWLSMATE\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use OWLSMATE\User;
use Illuminate\Support\MessageBag;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
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
        //
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
        //print_r($request->year);
        //print_r($request->program);
        //die();
        $rules = [
            
            'program' => 'sometimes', 
            'year' => 'sometimes',
            'first_name' => 'sometimes|alpha|max:12',
            'last_name' => 'sometimes|alpha|max:12',
            'phone' => 'sometimes|integer',
            'image' => 'sometimes|image',
            'password' => 'sometimes|string|min:6',
        
        ];
        $this->validate($request,$rules);
        
        $id = Auth::User()->id;
       
        $record = User::find($id);
       
        if ($request->password != null)
        {
            //$this->changePassword($request);
           
            if (Hash::check($request->old_password, Auth::user()->password)) {
                
                if(strcmp($request->password,$request->password_confirmation) == 0){
                    $record->update([
                        'password' => Hash::make(request()->password),
                    ]);
                    return redirect()->back()->withsuccess('Password Updated Successfully!');
                }
                else {
                
                    return redirect()->back()->witherror('Your New Password and Confirm Password does not match!');
                }
            }
            else{
                return redirect()->back()->witherror('Type your current password correctly!');
            }
        }
        else{
            $record->update(array_filter($request->all()));
            if ($request->image != null)
            {
                $this->storeImage($record);
            }
            return redirect()->back()->with('success','Updated Successfully');
        } 
        return redirect()->back()->witherror('sdaasdSuccessfully');
    }
    private function storeImage($record)
    {
      
        if (request()->has('image')){
            $record->update([
                'image'=>request()->image->store('images','public'),
            ]);
        }
        $image = Image::make(public_path('storage/'.$record->image))->resize(400, 400);
        $image->save();

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
