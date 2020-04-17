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
    
    public function mail(Request $request)
    {

      $id = $request->input('id');
  
      $user = User::where('id',$id)->first();

      $messages = 'congrates, you successfull register in our system';
      $subject = 'new message from admin system';

         Mail::raw( $messages ,function ($message) use($user,$subject)
           {
            $message->to($user->email);
            $message->from('ijaldev16@gmail.com', 'Admin System');
            $message->subject($subject);


            });

            return response()->json('success send to your email');
    }

}