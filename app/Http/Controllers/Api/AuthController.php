<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use App\Employer;
use App\JobSeeker;
use Auth;
use Mail;

class AuthController extends Controller
{


    public function login(Request $request){

       $validate = Validator::make( $request->all(),[
          'email' => 'required | email',
          'password'=> 'required'
       ]);

       if($validate->fails()){

         return response()->json([
           'message' => 'validation failed',
           'error'=> $validate->errors(),
           'data'=> false,
           'status'=>false
         ],401);

       }

       if(Auth::attempt(['email'=>request('email'),'password'=> request('password') ])){
           $user = Auth::user();
           $user = auth()->user();
           $data = array(
            'name' => "Learning Laravel",
        );

              return response()->json([
                'message' => 'login successful',
                'error'=> false,
                'data'=> [
                      'token'=>$user->createToken('aCm12s')->accessToken,
                      'user'=>$user
                ],
                'status'=>true
              ],200);
       }


          return response()->json([
            'message' => 'Incorrect Username or password',
            'error'=> 'username or password is incorrect',
            'data'=> false,
            'status'=>false
          ],401);

    }


    public function register(Request $request){

      $validate = Validator::make( $request->all(),[
         'name' => 'required',
         'email' => 'required | email | unique:users',
         'password'=> 'required',
         'user_type'=> 'required',
         'c_password' => 'required|same:password',
      ]);
      if($validate->fails()){
              return response()->json([
                'message' => 'validation failed',
                'error'=> $validate->errors(),
                'data'=> false,
                'status'=>false
              ],401);
      }
      $user = null;
        if(request('user_type')!==1 && request('user_type')!==2 ){
          return response()->json([
                'message' => 'wrong user type intered',
                'error'=> [
                  'user_type'=>'user type can only be 1 or 2.The value '.request('user_type').' is invalid'
                ],
                'data'=> false,
                'status'=>false
          ],401);
        }
        $created = false;
      if(request('user_type')===1){
              $validate = Validator::make( $request->only(['name']),[
                 'name' => 'required',
              ]);
              if($validate->fails()){
                      return response()->json([
                        'message' => 'validation failed',
                        'error'=> $validate->errors(),
                        'data'=> false,
                        'status'=>false
                      ],401);
              }
                $user = new Employer();
                $user->why_us="nothing set on why you should choose us";
                $user->about="nothing set on about us ";
                $user->name = request('name');
                $created =  $user->save();
      }
      if(request('user_type')===2){

              $validate = Validator::make( $request->only(['username']),[
                 'username' => 'required',
              ]);
              if($validate->fails()){
                    return response()->json([
                      'message' => 'validation failed',
                      'error'=> $validate->errors(),
                      'data'=> false,
                      'status'=>false
                    ],401);
              }
                $user = new JobSeeker();
                $user->username = request('username');
                  $created  = $user->save();

      }

     if($created){

      // Mail::send('emails.welcome', $user, function ($message) {
      //
      //   $message->from('massaybah@gmail.com', 'Registeration');
      //
      //   $message->to('massaybah@gmail.com')->subject('Learning Laravel test email');
      //   });

        $user->users()->create([
            'email' => Request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name')
        ]);
        return response()->json([
          'message' => 'account created successfully',
          'error'=> false,
          'data'=> $user,
          'status'=>true
        ],201);

     }






    }
}
