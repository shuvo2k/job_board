<?php

namespace App\Http\Controllers\Apllicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apllicant;
use App\Apllication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{

  public function index(){
    return view('apllicant.apllicant');
  }

    public function profileUpdate(Request $request){
      $validator = Validator::make($request->all(), [
              'first_name'  => 'required',
              'last_name' => 'required',
              'skill' => 'required',
              'profile_picture' => 'mimes:png, jpg, jpeg',


          ]);

         if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator)->withInput();
         }

         $apllicant = Apllicant::where('id', Auth::user()->id)->first();

         $apllicant->first_name = $request['first_name'];
          $apllicant->last_name = $request['last_name'];
           $apllicant->skills = $request['skill'];

           if($request->hasFile('profile_picture')) {
                 $file = $request->file('profile_picture');
                 $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();
                 $path = $file->storeAs('public/assets/apllicant/images', $filename);
                 $apllicant->image = 'storage/assets/apllicant/images'.'/'.$filename;
             }

             if($request->hasFile('resume')) {
                   $file = $request->file('resume');
                   $filename = 'resume-' . time() . '.' . $file->getClientOriginalExtension();
                   $path = $file->storeAs('public/assets/apllicant/resumes', $filename);
                   $apllicant->resume = 'storage/assets/apllicant/resumes'.'/'.$filename;
               }

        $apllicant->save();
        session()->flash('success', 'Profile Updated Successfully.');
        return redirect()->route('company.home');
    }



    public function quickApply($id){
      if(Auth::guard('apllicant')->check() && Auth::user()->resume){
        $check = Apllication::where('job_id', $id)->where('apllicant_id', Auth::user()->id)->first();
        if(isset($check)){
          session()->flash('error', 'You have already Apllied.');
          return redirect()->route('home');
        }

        $application = new Apllication();
        $application->job_id = $id;
        $application->apllicant_id = Auth::user()->id;
        $application->save();
        session()->flash('success', 'You have Successfully Apllied.');
        return redirect()->route('home');

      }else{
          session()->flash('error', 'Please Upload Resume to Apply.');
          return redirect()->route('apllicant.home');
      }
    }
}
