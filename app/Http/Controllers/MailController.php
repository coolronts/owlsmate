<?php

namespace OWLSMATE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

class MailController extends Controller
{
    public function index(){

    	Mail::to('zahid.ronty@gmail.com')->send(new Mailtrap());
    }

}
