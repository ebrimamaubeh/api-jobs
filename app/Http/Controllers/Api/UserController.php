<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:api',['only'=>['index','store','apply']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return response()->json([
            'message' => 'logged in user',
            'error'=> false,
            'data'=> [
              'user'=> Auth::user()
            ],
            'status'=>true
          ],200);
    }


    public function apply(Request $request){
           $user = Auth::user();
           $user->applications()->attach($request->only(['job_id']));
            return response()->json([
                'message'=>'job application recieved',
                'data'=> $user->applications
            ],200);
    }

    public function allUsers(){
      return response()->json([
        'message' => 'display all users',
        'error'=> false,
        'data'=> [
          'users'=> User::where('userable_type','like','%JobSeeker%')->get()
        ],
        'status'=>true
      ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return response()->json([
        'message' => 'login successful',
        'error'=> false,
        'data'=> [
          'user'=>$user
        ],
        'status'=>true
      ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function emailCheck($email){
      return response()->json([
        'message' => 'search results',
        'error'=> false,
        'data'=> [
          'result'=>User::where('email','=',$email)->take(1)->get()
        ],
        'status'=>true
      ],200);

    }
}
