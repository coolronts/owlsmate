<?php

namespace OWLSMATE\Http\Controllers;

use Illuminate\Http\Request;
use OWLSMATE\Book;
use OWLSMATE\User;
use OWLSMATE\House;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Book List View
        $data_book = Book::orderBy('product_type')
        ->where([
            ['s_id', Auth::user()->id],
            ['product_type', 1],               
        ])->get();

        //Note List View

        
        $data_note = Book::orderBy('product_type')
        ->where([
            ['s_id', Auth::user()->id],
            ['product_type', 2],               
        ])->get();
        
        


        //Tutor List View
        $data_tutor = Book::orderBy('product_type')
        ->where([
            ['s_id', Auth::user()->id],
            ['product_type', 3],               
        ])->get();

        //House List View
         $data_house = House::where([
            ['user_id', Auth::user()->id],
        ])->get();

         //$User Data

        // $user_data = User::find(Auth::user()->id);
         

        return view('book_table',compact('data_book','data_note','data_tutor','data_house'));
        

        
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

     public function validator($request){

        if($request->product_type == 1){
            $rules = [
            'name' => 'required',
            'author' => 'required', 
            'isbn' => 'required|numeric|size:13',
            'price' => 'required|numeric',
            'description' => 'sometimes',
            'course_id' => 'required',
            'course_name' => 'required',
            'image_1' =>'sometimes|image',
            'image_2' =>'sometimes|image',
            'image_3' =>'sometimes|image',
            'image_4' =>'sometimes|image',
            'image_5' =>'sometimes|image',
            'image_6' =>'sometimes|image',

        ];
        $attributes = [
            'name' => 'Book Name',
            'author' => 'Book Author',
            'description' => 'Product Info',
            'isbn' => 'ISBN',
            'price' => 'Book Price',
            'image_1'  => '1st Picture',
            'image_2'  => '2nd Picture',
            'image_3'  => '3rd Picture',
            'image_4'  => '4th Picture',
            'image_5'  => '5th Picture',
            'image_6'  => '6th Picture',
            
        ];
        
        $customMessages = [
            'isbn.numeric' => 'ISBN needs to be 13 digits number',
            'isbn.size' => 'ISBN needs to be 13 digits number',
            'price.numeric' => 'Book Price needs to be number',
            'required' => 'You need to fill up :attribute',
            'image_1.image' => 'You need to upload proper image file format',
            'image_2.image' => 'You need to upload proper image file format',
            'image_3.image' => 'You need to upload proper image file format',
            'image_4.image' => 'You need to upload proper image file format',
            'image_5.image' => 'You need to upload proper image file format',
            'image_6.image' => 'You need to upload proper image file format',
        ];

        }
        elseif ($request->product_type == 2) {
            
             $rules = [
            'name' => 'required',
            'author' => 'required', 
            'description' => 'required',
            'price' => 'required|numeric',
            'course_id' => 'required',
            'course_name' => 'required',
            'image_1' =>'sometimes|image',
            'image_2' =>'sometimes|image',
            'image_3' =>'sometimes|image',
            'image_4' =>'sometimes|image',
            'image_5' =>'sometimes|image',
            'image_6' =>'sometimes|image',
            'year' => 'required|numeric|size:4',
            ];

            $attributes = [
                'name' => 'Note Name',
                'author' => 'Note Author',
                'description' => 'Product Info',
                'isbn' => 'ISBN',
                'price' => 'Note Price',
                'image_1'  => '1st Picture',
                'image_2'  => '2nd Picture',
                'image_3'  => '3rd Picture',
                'image_4'  => '4th Picture',
                'image_5'  => '5th Picture',
                'image_6'  => '6th Picture',
            ];
            
            $customMessages = [
                
                'price.numeric' => 'Note Price needs to be number',
                'required' => 'You need to fill up :attribute',
                'image_1.image' => 'You need to upload proper image file format',
                'image_2.image' => 'You need to upload proper image file format',
                'image_3.image' => 'You need to upload proper image file format',
                'image_4.image' => 'You need to upload proper image file format',
                'image_5.image' => 'You need to upload proper image file format',
                'image_6.image' => 'You need to upload proper image file format',
                'year.numeric' => 'Year needs to be in numeric',
                'year.size' => 'Year needs to be in "xxxx" format',

            ];
        }
        elseif ($request->product_type == 3) {
          
            $rules = [
            'price' => 'required|numeric',
            'course_id' => 'required',
            'course_name' => 'required',
            'course_description' => 'required',
            'description' => 'required',
            'available' => 'required',
            
            ];

            $attributes = [
                'price' => 'Hourly Rate',
                'description' => 'Bio',
            ];
            
            $customMessages = [
                'available.required' => 'You need to specify your availability',
                'required' => 'You need to fill up :attribute'
            ];
        }
        elseif ($request->house_type == 1) {
           
            $rules = [
            'house_type' => 'sometimes' ,
            'room_type' => 'required',
            'accomodate' => 'required',
            'address'=> 'required',
            'postcode'=> 'required',
            'city' => 'required' ,
            'bath_type' => 'required' ,
            'describe_me' =>'sometimes',
            'describe_others' =>'sometimes',
            'rent' => 'required|numeric' ,
            'internet' => 'sometimes' ,
            'electricity' => 'sometimes' ,
            'bond' => 'sometimes|required|numeric',
           // 'min_stay' => 'sometimes' ,
            'smoking' => 'sometimes' ,
            'pet' => 'sometimes' ,
            'user_id' => 'required' ,
            'title' => 'required|max:60',
            'image_1' => 'sometimes|image',
            'image_2' => 'sometimes|image',
            'image_3' => 'sometimes|image',
            'image_4' => 'sometimes|image',
            'image_5' => 'sometimes|image',
            'image_6' => 'sometimes|image',
            'gender' => 'required',
            
            ];
            $attributes = [
                'accomodate' => 'No. of Mates',
                'describe_me' => 'Your Description',
                'describe_others' => 'Preferred Mate',
                'image_1'  => '1st Picture',
                'image_2'  => '2nd Picture',
                'image_3'  => '3rd Picture',
                'image_4'  => '4th Picture',
                'image_5'  => '5th Picture',
                'image_6'  => '6th Picture',
                'room_type' => 'Type of Room',
                'bath_type' => 'Type of Bath',

                
            ];
            
            $customMessages = [
                'accomodate.required' => 'You need to specify the number of your Flatmate',
                'required' => 'You need to fill up :attribute',
                'numeric' => ':attribute needs to numbers',
                'title.max' => 'Title needs to be less than 60 character with space',
                'image_1.image' => 'You need to upload proper image file format',
                'image_2.image' => 'You need to upload proper image file format',
                'image_3.image' => 'You need to upload proper image file format',
                'image_4.image' => 'You need to upload proper image file format',
                'image_5.image' => 'You need to upload proper image file format',
                'image_6.image' => 'You need to upload proper image file format',
            ];
        }
        elseif ($request->house_type == 2) {
            $rules = [
                'user_id' => 'required',
                'smoking' => 'sometimes' ,
                'pet' => 'sometimes' ,
                'describe_me' =>'required',
                'house_description' => 'required',
                'rent' => 'required|numeric',
                'bond' => 'sometimes|required|numeric',
                'describe_others' => 'sometimes',
                'gender'=>'required',
               
             ];

             $attributes = [
               
                'describe_me' => 'Your Description',
                'describe_others' => 'Preferred Mate',
                'house_description'  => 'Preferred House',
                

                
            ];
            
            $customMessages = [
                'accomodate.required' => 'You need to specify the number of your Flatmate',
                'required' => 'You need to fill up :attribute',
                'numeric' => ':attribute needs to be in number',
               
            ];

        }
         
         $this->validate($request, $rules, $customMessages, $attributes);
        
        
       


     }

//End 

      public function house_store($request){

         $New_Book = House::create($request->all());
               
            if ($request->house_type == 1){
                $this->storeImage($New_Book);
            }
          
      }

//End


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

       $this->validator($request);

       if($request->house_type != null){
            $this->house_store($request);
         
            return redirect()->back()->with('success','Insert Successfully');
       }

       

       elseif($request->house_type == null){
           if ($request->available != null){
                $d =join (';', $request->available);
                Book::create([
                    'available' => $d,
                    'description' => $request->description,
                    'course_id' => $request->course_id,
                    'course_name' => $request->course_name,
                    'price' => $request->price,
                    'course_description' => $request->course_description,
                    's_id' => $request->s_id,
                    'product_type' => $request->product_type,
                ]);
                return redirect()->back()->with('success','You have Enlisted, Successfully!');
            
            }
            
           // $this->validate($request,$rules);
            $New_Book = Book::create($request->all());
            
            $this->storeImage($New_Book);

            return redirect()->back()->with('success','Insert Successfully');
        }
    }
//End


   

    private function storeImage($New_Book){

        if (request()->has('image_1')){
            $New_Book->update([
                'image_1'=>request()->image_1->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_1))->resize(200,180);
         $image->save();

        }
        
        if (request()->has('image_2')){
            $New_Book->update([
                'image_2'=>request()->image_2->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_2))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_3')){
            $New_Book->update([
                'image_3'=>request()->image_3->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_3))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_4')){
            $New_Book->update([
                'image_4'=>request()->image_4->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_4))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_5')){
            $New_Book->update([
                'image_5'=>request()->image_5->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_5))->resize(200,180);
         $image->save();

        }
        if (request()->has('image_6')){
            $New_Book->update([
                'image_6'=>request()->image_6->store('images','public'),
        ]);

         $image = Image::make(public_path('storage/'.$New_Book->image_6))->resize(200,180);
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
        
        $data = Book::find($id);
        if($data){
             $user_data = User::find($data->s_id);
            if ($user_data){
                if ($data->product_type == 1 | $data->product_type == 2){
                    return view('show',compact('data','user_data'));
                }
                else {
                    return view('tutor1',compact('data','user_data'));
                }
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

            return view('error');
       
 
        
    }

    //End Book Edit


    //Start House Edit
    public function house_edit($id)
    {
       
 
        
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
            'name' => 'sometimes',
            'author' => 'sometimes', 
            'isbn' => 'sometimes',
            'course_id' => 'required',
            'image_6' => 'sometimes|image',
            'image_1' =>'sometimes|image',
            'image_2' =>'sometimes|image',
            'image_3' =>'sometimes|image',
            'image_4' =>'sometimes|image',
            'image_5' =>'sometimes|image',
            'price' => 'numeric|required',

        ];
        $this->validate($request,$rules);

        $New_Book = Book::find($id);
        
        if ($request->available != null){
            $d =join (';', $request->available);
            
            $New_Book->update([
                
                'available' => $d,
                'description' => $request->description,
                'course_id' => $request->course_id,
                'course_name' => $request->course_name,
                'price' => $request->price,
                'course_description' => $request->course_description,
            ]);
            return redirect()->back()->with('success','Updated Successfully!');
        
        }
        if ($New_Book){
            $New_Book->update(array_filter($request->all()));
        
            $this->storeImage($New_Book);
            $this->image_delete($request,$New_Book);
              
            return redirect()->back()->with('success','Updated Successfully!');
        }
        else {
            return view('error');
        }
    }

     public function image_delete($request,$Book){
        if ($request->delete_img_1 == 1){
            $Book->update(['image_1' => null]);
        }
        if ($request->delete_img_2 == 1){
            $Book->update(['image_2' => null]);
        }
        if ($request->delete_img_3 == 1){
            $Book->update(['image_3' => null]);
        }
        if ($request->delete_img_4 == 1){
            $Book->update(['image_4' => null]);
        }
        if ($request->delete_img_5 == 1){
            $Book->update(['image_5' => null]);
        }
        if ($request->delete_img_6 == 1){
            $Book->update(['image_6' => null]);
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
        $record = Book::find($id);
        if ($record){
            $record->delete();
            return redirect()->back()->with('success','Delete Successfully');
        }
        else{
            return view('error');
        }

    }
    
}
