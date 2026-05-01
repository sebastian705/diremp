<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $response = ["success" => false];
        //validacion
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $response = ['error' => $validator->errors()];
            return response()->json($response, 200);
        }

        $input = $request->all();
        $input["password"] = bcrypt($input['password']);

        $user = User::create($input);
        $user->assignRole('admin');

        $response["success"] = true;
        //$response["token"] = $user->createToken("Codea")->plainTextToken;

        return response()->json($response, 200);
    }

    public function login(Request $request) {
        $response = ["success" => false];
        //validacion
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $response = ['error' => $validator->errors()];
            return response()->json($response, 200);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {

        }
    }
}
