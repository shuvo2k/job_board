<?php

namespace App\Http\Controllers\Apllicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apllicant;
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
                 // cache the file
                 $file = $request->file('profile_picture');
                 // generate a new filename. getClientOriginalExtension() for the file extension
                 $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();
                 // save to storage/app/photos as the new $filename
                 $path = $file->storeAs('public/assets/apllicant/images', $filename);
                 $apllicant->image = 'storage/assets/apllicant/images'.'/'.$filename;
             }

             if($request->hasFile('resume')) {
                   $file = $request->file('resume');
                   // generate a new filename. getClientOriginalExtension() for the file extension
                   $filename = 'resume-' . time() . '.' . $file->getClientOriginalExtension();
                   // save to storage/app/photos as the new $filename
                   $path = $file->storeAs('public/assets/apllicant/resumes', $filename);
                   $apllicant->resume = 'storage/assets/apllicant/resumes'.'/'.$filename;
               }

        $apllicant->save();
        session()->flash('success', 'Profile Updated Successfully.');
        return redirect()->route('company.home');
    }
}
