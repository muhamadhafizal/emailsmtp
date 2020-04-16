<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use App\User;

class EmailController extends Controller {
    
    public function index(){
        return response()->json('mail engine');
    }
    
    public function mail()
    {

      //$id = $request->input('id');
  
      //$users = User::where('id',$id)->first();

      $messages = 'hello hafizal';
      $receiver = 'hafizal@synapse.my';

         Mail::raw( $messages ,function ($message) use($receiver)
           {
            $message->to($receiver);
            $message->from('testemaillumen123@gmail.com', 'Admin');
            $message->subject('5% off all our website');


            });

            return response()->json('success send to your email');
    }

}