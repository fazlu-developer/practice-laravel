<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;


class CrudController extends Controller
{
    
    public function index(){
        
         return view('crud/index');
         
    }

    public function insert(Request $request){
        
        $validated = Validator::make($request->all(),[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
        ]);
        if($validated->fails()){
            return false;
        }


    }

}
