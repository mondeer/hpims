<?php

namespace hpims\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
  public function login(Request $request) {

      if ( Sentinel::forceAuthenticate($request->all()) ) {

        if(Sentinel::getUser()->roles()->first()->slug == 'records')
          return redirect('/dashboard');
        elseif (Sentinel::getUser()->roles()->first()->slug == 'ward')
          return redirect('/dashboard');
      } else {
        return redirect()->back()->with(['error' => 'Have you forgoten your credentials?']);
      }

    }

    public function logout() {
      Sentinel::logout();

      return redirect('/');
    }
}
