<?php

namespace OWLSMATE\Http\Controllers;

use OWLSMATE\Book;
use OWLSMATE\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $data = Note::where('s_id',Auth::user()->id)->get();
        return view('note_table',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'author' => 'required', 
            'price' => 'required',
            'course_id' => 'required',
        ];
        $this->validate($request,$rules);
       
        
        
       // $request->s_id = 1;
        Note::create($request->all());
        $new = Note::find('4');
        $new->pictures()->create([
        'image_name' => '1'
        ]);
        

        return redirect()->back()->with('success','Insert Successfully');
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
                if ( $data->product_type == 2){
                    return view('show',compact('data','user_data'));
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
        $book = Book::find($id);
        if ($book){
            if($book->product_type==2){
            
                return view('edit_book',compact('book'));
            }
            else{
                return view('error');
            }
        }
        else{
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
