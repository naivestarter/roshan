<?php

namespace App\Http\Controllers\Municipality\Auth;

use Illuminate\Routing\Controller ;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller
{
  use AuthenticatesUsers;

  protected $redirectTo = '/municipality/dashboard';

  public function __construct()
  {
    $this->middleware('guest:municipality')->except('logout');
  }
  
  public function showLoginForm()
  {
    
   return view('municipality.auth.login');
 } 

 protected function attemptLogin(Request $request)
 {    
   
   return $this->guard()->attempt(
     $this->credentials($request), $request->filled('remember')
   );

 }

 public function logout(Request $request)
 {
   
   $this->guard()->logout();
   $request->session()->invalidate();
   return redirect('municipality');
 }

     /**
      * Get the guard to be used during authentication.
      *
      * @return \Illuminate\Contracts\Auth\StatefulGuard
      */
     protected function guard()
     {
       return Auth::guard('municipality');
     }
}