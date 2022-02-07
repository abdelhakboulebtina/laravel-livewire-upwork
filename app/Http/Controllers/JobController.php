<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\models\Job;
class JobController extends Controller
{
    public function index(){
           $jobs =Job::online()->latest()->get();
           return view('jobs.index',['jobs'=>$jobs]);  
    }
    public function show( Job $id){
     return view('jobs.show',['job'=>$id]);
    }
}
