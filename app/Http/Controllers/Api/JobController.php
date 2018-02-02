<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Validator;
use Auth;
class JobController extends Controller
{

 public function __construct()
 {
     $this->middleware('auth:api',['only'=>['store']]);
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try{
        return Job::with('user')->get();
      }catch(Exception $e){
        return 'error';
      }

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
      // $test = request('descriptions');
      // $collection = collect($test);
      // $data = $collection->each(function($item,$key){
      //       return ['name'=>$item];
      // });
      // return $data;
      // return $request->all();
          $validate = Validator::make( $request->all(), [
              'title'=>'required',
              'type_id'=>'required',
              'summary'=> 'required',
              'level_id'=>'required',
            //   'status_id'=>'required',
            //   'closing_date'=>'required | date',
              'price'=>'required'
          ]);
          if($validate->fails()){
              return response()->json([
                    'message'=>'validation fails',
                    'status'=>false,
                    'errors'=> $validate->errors(),
                    'data'=> false
              ],401);
          }
          $job =new Job();
          $job->title =request('title');
          $job->level_id =request('level_id');
          $job->summary =request('summary');
          $job->type_id =request('type_id');
          $job->status_id = 2;
          $job->closing_date ='2019-01-01';
        //   request('closing_date')
          $job->price =request('price');
          $job->user_id =Auth::id();
          $job->save();
          $job->descriptions()->createMany(request('descriptions'));
          $job->categories()->attach(request('categories'));
          return response()->json([
                'message'=>'job successfully created',
                'status'=>true,
                'errors'=> false,
                'data'=> [
                   'jobs' => Job::all(),
                   'created'=>$job
                ]
          ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
