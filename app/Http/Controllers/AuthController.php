<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use Carbon\Carbon;
use App\Notifications\SignupActivate;


class AuthController extends Controller
{
    public $successStatus = 200;

    /** 
    * login api 
    * 
    * @return \Illuminate\Http\Response 
    */


    public function adminLogin(Request $request){ 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
          ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $credentials = request(['email', 'password']);
        // $credentials['active'] = 1;
        $credentials['deleted_at'] = null;
        // return $credentials;
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
            
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $token = $this->respondWithToken($tokenResult);
        $data = json_decode($token->getContent(), true);
        $user=Auth::user();
        $request->session()->put('access_token', $data['access_token']);
        $request->session()->put('username', $user['name']);
        return redirect('admin/dashboard')->with(['token' => $token]);
    }

    /** 
    * Register api 
    * 
    * @return \Illuminate\Http\Response 
    */

    public function adminRegister(Request $request) 
    { 
        // return $request;
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',  
        ]);   
        if ($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        }  
        $user = new User([
            'userName' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activation_token' => str_random(60)
        ]);
        $user->save();
        // $user->notify(new SignupActivate($user));
        $token = $user->activation_token;
        return redirect('admin')->with(['token' => $token]);
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /** 
    * details api 
    * 
    * @return \Illuminate\Http\Response 
    */ 
    
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
    protected function respondWithToken($tokenResult)
    {
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ]);
    }
     /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function adminLogout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        // return $request;
        return response()->json($request->user());
    }

    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json([
                'message' => 'This activation token is invalid.'
            ], 404);
        }
        $user->active = true;
        $user->activation_token = '';
        $user->save();
        return $user;
    }
}
