<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{

  public function index(){
    $jobs = Job::where('company_id', Auth::user()->id)->get();
    if(isset($jobs)){
        return view('company.company', compact('jobs'));
    }else{
      $jobs = null;
        return view('company.company', compact('jobs'));
    }
  }

    public function submitJob(Request $request){
    //  dd(Auth::user()->id);
      $validator = Validator::make($request->all(), [
              'job_title'  => 'required',
              'salary' => 'required',
              'location' => 'required',
              'country' => 'required',
              'description' => 'required'

          ]);

         if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator)->withInput();
         }

        $company = Job::create([
            'company_id' => Auth::user()->id,
            'job_title' => $request['job_title'],
            'salary' => $request['salary'],
            'location' => $request['location'],
            'country' => $request['country'],
            'job_description' => $request['description'],
        ]);
        session()->flash('success', 'Job Posted Successfully.');
        return redirect()->route('company.home');
    }
}
