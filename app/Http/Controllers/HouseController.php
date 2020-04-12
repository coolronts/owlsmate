<?php

namespace OWLSMATE\Http\Controllers;

use Illuminate\Http\Request;
use OWLSMATE\User;
use OWLSMATE\House;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Arr;

class HouseController extends Controller
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
        
        $data =House::find($id);
        if($data){
             $user_data = User::find($data->user_id);
            if ($user_data){
                return view('house.view',compact('data','user_data'));
            }
            else{
                $data -> delete();
                return view('error');
            }
        }
        else{
            return view('error');
        }
    }

    public function showBuddyUp($id)
    {
        
        $data =House::find($id);
        if($data){
             $user_data = User::find($data->user_id);
            if ($user_data){
                return view('house.view',compact('data','user_data'));
            }
            else{
                $data -> delete();
                return view('error');
            }
        }
        else{
            return view('error');
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $house = House::find($id);

        if ($house){
            if ($house->house_type==1){
            return view('house.edit',compact('house'));
            }
            elseif($house->house_type==2){
                return view('house.edit',compact('house'));
            }
        }
        else {
            return view('error');
        }
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
       

        $rules = [
            'room_type' => 'sometimes',
            'accomodate' => 'sometimes',
            'address'=> 'sometimes',
            'postcode'=> 'sometimes',
            'city' => 'sometimes' ,
            'bath_type' => 'sometimes' ,
            'describe_me' =>'sometimes',
            'describe_others' =>'sometimes',
            'rent' => 'sometimes' ,
            'internet' => 'sometimes' ,
            'electricity' => 'sometimes' ,
            'bond' => 'sometimes' ,
           // 'min_stay' => 'sometimes' ,
            'smoking' => 'sometimes' ,
            'pet' => 'sometimes' ,
            'title' => 'sometimes|max:60',
            
            
            ];
        $this->validate($request,$rules);
        $update_house = House::find($id);
        
        if ($update_house){
            $update_house->update(array_filter($request->all()));
            if ($request->pet == null){
                $update_house->update([
                    'pet' => '0',
                ]);
            }
            if ($request->smoking == null){
                $update_house->update([
                    'smoking' => '0',
                ]);
            }
            if ($request->electricity == null){
                $update_house->update([
                    'electricity' => '0',
                ]);
            }
            if ($request->internet == null){
                $update_house->update([
                    'internet' => '0',
                ]);
            }
            $this->storeImage($update_house);
        
           // $this->storeImage($New_Book);
            //$this->image_delete($request,$New_Book);
              
            return redirect()->back()->with('success','Updated Successfully!');
        }
        else {
            return view('error');
        }
    }

    //Store Image

    private function storeImage($update_house){

        if (request()->has('image_1')){
            $update_house->update([
                'image_1'=>request()->image_1->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_1))->resize(200,180);
         $image->save();

        }
        
        if (request()->has('image_2')){
            $update_house->update([
                'image_2'=>request()->image_2->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_2))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_3')){
            $update_house->update([
                'image_3'=>request()->image_3->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_3))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_4')){
            $update_house->update([
                'image_4'=>request()->image_4->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_4))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_5')){
            $update_house->update([
                'image_5'=>request()->image_5->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_5))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_6')){
            $update_house->update([
                'image_6'=>request()->image_6->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$update_house->image_6))->resize(200,180);
         $image->save();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = House::find($id);
        if ($record){
            $record->delete();
            return redirect()->back()->with('success','Delete Successfully');
        }
        else{
            return view('error');
        }
    }
}
