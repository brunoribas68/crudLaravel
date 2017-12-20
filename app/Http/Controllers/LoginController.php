<?php

namespace App\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
      return view('form.login');
    }
    public function login(){
      $credenciais = Request::only('email', 'password');
      if(Auth::attempt($credenciais))
      {
        return redirect('/');
      }
      else
      {
        return redirect('/login');
      }
    }
}
