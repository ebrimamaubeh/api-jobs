<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Education;
class EducationController extends Controller
{
    public function index(){
        return Education::all();
    }

    
    public function store(Request $request){

    }

}
