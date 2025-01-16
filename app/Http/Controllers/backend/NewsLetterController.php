<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\NewLetter;
use Exception;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    
    function emailStore (Request $request){
        try{
            $request->validate([
                'email' => 'required|email|max: 85'
            ]);
            
            NewLetter::create([
                'email' => $request->input('email')
            ]);

            return response()->json([
                "status"=> "success",
                "message" => "Thanks for your email submittion"
            ],200);

        }catch(Exception $e){
            return response()->json([
                "status"=> "failed",
                "message" => "Request failed"
            ],200);
             // return $e->getMessage();
        };
    }
}
