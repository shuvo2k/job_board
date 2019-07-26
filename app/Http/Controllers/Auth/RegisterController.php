<?php
namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Apllicant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:company');
        $this->middleware('guest:apllicant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


//company registration system

    public function showCompanyRegisterForm()
    {
        return view('auth.company_register');
    }

    protected function createCompany(Request $request)
    {

      $validator = Validator::make($request->all(), [
              'first_name'  => 'required',
              'last_name' => 'required',
              'business_name' => 'required',
              'email' => 'required|unique:companies',
              'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
              'password_confirmation' => 'min:6'
          ]);

         if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator)->withInput();
         }

        $company = Company::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'business_name' => $request['business_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('company.login');
    }

//apllicant registration system
    public function showApllicantRegisterForm()
    {
        return view('auth.apllicant_register');
    }

    protected function createApllicant(Request $request)
    {
      //dd($request->all());
      //$this->validator($request->all())->validate();
      $validator = Validator::make($request->all(), [
              'first_name'  => 'required',
              'last_name' => 'required',
              'email' => 'required|unique:apllicants',
              'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
              'password_confirmation' => 'min:6'
          ]);

         if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator)->withInput();
         }

        $apllicant = Apllicant::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/apllicant');
    }
}
