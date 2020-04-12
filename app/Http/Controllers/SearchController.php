<?php

namespace OWLSMATE\Http\Controllers;
use OWLSMATE\Book;
use OWLSMATE\House;
use OWLSMATE\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        //$data retrieves all value and show
        $data_book = Book::orderBy('id','desc')->where ('product_type', '=', '1')->get();
        $data_note = Book::orderBy('id','desc')->where ('product_type', '=', '2')->get();
        $data_tutor = Book::orderBy('id','desc')->where ('product_type', '=', '3')->get();
        
        foreach ($data_tutor as $tutor) {
            $tutor_data = User::find($tutor->s_id);
        }
        
        $data_house = House::orderBy('id','desc')->get();
        foreach ($data_house as $user) {
            $house_user = User::find($user->user_id);
        }
        

        
        
         //search word
        $d = $request->get('search');
        $search = Book::query()
        ->where('author', 'LIKE', "%{$d}%")
        ->where ('product_type', '=', '1')
        ->where('product_type','=', '2')
        ->orwhere('name', 'LIKE', "%{$d}%")
        ->orwhere('isbn', 'LIKE', "%{$d}%")
        ->orwhere('course_id', 'LIKE', "%{$d}%")
        ->orwhere('course_name', 'LIKE', "%{$d}%")
        ->get();
        foreach ($search as $user_search) {
            $user = User::find($user_search->s_id);
        }
       
        return view('welcome',compact('search','user','data_book','data_note','data_tutor', 'data_house','tutor_data' ,'d','house_user'));
    }

    public function search(Request $request)
    {
        
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
