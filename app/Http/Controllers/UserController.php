<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
    
    public function index(){
        return response()->json('User engine');
    }

    public function store(Request $request){

        $name = $request->input('name');
        $age = $request->input('age');
        $email = $request->input('email');

        $user = new User;
        $user->name = $name;
        $user->age = $age;
        $user->email = $email;

        $user->save();

        return response()->json('success add');

    }

    public function all(){

        $data = User::all();

        return response()->json($data);

    }

    public function details(Request $request){

        $id = $request->input('id');

        $details = User::find($id);

        return response()->json($details);
    }
    

}