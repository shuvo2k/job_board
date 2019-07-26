<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:company')->except('logout');
        $this->middleware('guest:apllicant')->except('logout');
    }

//company login  functionality
    public function showCompanyLoginForm()
    {
        return view('auth.company_login');
    }

    public function companyLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/company');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


//applicant login functionality
    public function showApllicantLoginForm()
   {
       return view('auth.apllicant_login');
   }


   public function apllicantLogin(Request $request)
   {
       $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required|min:6'
       ]);

       if (Auth::guard('apllicant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

           return redirect()->intended('/apllicant');
       }
       return back()->withInput($request->only('email', 'remember'));
   }
}
