<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    //login api
    public function login(Request $request){
        $token = Str::random(40);

        $encodedToken = base64_encode($token);
    
        error_log($encodedToken);
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            $user = Auth::user();
            $success['token']= $encodedToken;
            $success['name']=$user->full_name;
    
            $response = [
            'success' => true,
            'data'=>$success,
            'message'=> 'user login successfully'
            ];
            return response()->json($response,200);
        }else{
            $response = [
                'success'=>false,
                'error_message'=>'email and password may be incorrect '
            ];
            return response()->json($response,401);

        }

    }
    public function register(Request $request){
        //validate 
        $validator = Validator::make($request->all(),[
            'full_name'=>'required',
            'address'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'comform_password'=>'required|same:password'

        ]);
        if($validator->fails()){
            $response = [
                'success' =>false,
                'message' =>$validator->errors()
            ];
            return response()->json($response,401);
        }
        $input = $request->all();

        $userEmail = User::find($input['email']);
        if($userEmail){
            $response = [
                'success'=> false,
                'message'=>"email already exists "
            ];
            return response()->json($response,403);
        }
        $input['password']= bcrypt($input['password']);
        $user = User::create($input);

        $success['token']= $user->createToken('ecommerceapp')->plainTextToken;
        $success['name']=$user->full_name;

        $response = [
            'success' => true,
            'data'=>$success,
            'message'=> 'user created successfully'
        ];
        return response()->json($response,201);
    }
}
