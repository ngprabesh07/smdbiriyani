<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\Biriyani;

class BiriyaniController extends Controller
{
    public function index()
    {
        $biriyaniItems = Biriyani::all();

        return view('biriyani.biriyani', ['items'=>$biriyaniItems]);
    }
    //get all biriyanis her e
    public function getBiriyani(){
        $biriyanis = Biriyani::all();
        if(!$biriyanis){
            return response()->json([['message'=>'server error'],404]);
        }
        return response()->json([
            'code'=>200,
            'message'=>'okey',
            'products' => $biriyanis],200);
    }
       //get biriyani item by id 
       public function getbiriyaniById($id){
        $biriyani = Biriyani::find($id);
        if(!$biriyani){
            return response()-> json([
                'code'=>200,
                'message' => 'no biriyani avialable '
            ],404);
        }
        return response()->json($biriyani,200); 
     }
      // add new biriyani item
    public function addBiriyani(Request $request){
        //validate the user input data 
        $validate = Validator::make($request->all(),[
           'name'=>'required',
           'min_price'=>'required',
           'max_price'=>'required',
           'description'=>'required',
           'sku'=>'required',
           'category'=>'required',
           'imageurl'=>'required',
           'reviews'=>'required',

           
        ]);
        if($validate->fails()){
           $response = [
               'success'=> false,
               'message'=>$validate->errors()
           ];
           return response()->json($response,403);

        }
        $input = $request->all();
        $biriyani = Biriyani::create($input);
        $response = [
           'success' => true,
           'message' =>'biriyani created successfully',
           'data' =>$biriyani
        ];
   
        return response()->json($response,201);
       }
}