<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(Request $request){

        $validator =  Validator::make($request->all(),[
            'email' => 'required |max:191',
            'password' => 'required',
        ]);

        if($validator->fails()){
            
            return response()->json([
                'validation_errors'=> $validator->messages(),
            ]);

        }
        else{

            $user = User::where('email', $request->email)->first();

            if (! $user || ! Hash::check($request->password, $user->password)) {
                
                return response()->json([
                    'status'=>401,
                    'message'=>'Invalid Credentials',
                ]);
                
            }else{

                $token = $user->createToken($user->email.'_Token')->plainTextToken;
                return response()->json([
                    'status'=>200,
                    'username'=> $user->name,
                    'token'=>$token,
                    'message'=>'Logged In Seccessfully',
                ]);

            }

        }
    }
}
