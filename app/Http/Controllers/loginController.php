<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller {

    public function index() {
        return view('login');
    }

    public function getLogin(Request $data) {
        //$users = DB::table('users')->get();  obtiene tabla usuarios
        $users = DB::table('users')
                ->where('name', '=', $data['uname'])
                ->get();

        foreach ($users as $user) {
            $u = $user->name;
            $p = $user->password;

            if ($u == $data['uname'] && $p == $data['password']) {
                return view('home2')
                                ->with('data', $data);
            }
        }

        return view('login')->with('error', 'Login Error!!!');


        /*
          $user = DB::table('users')
          ->where('name','=','basukitris')
          ->get();
          /*
          if($uname){

          }
         */
        //return'User :'.$data['uname'].' | Password :'.$data['password'];
        /* return view('home2')
          ->with('nombre', $uname)
          ->with('pass', $password); */

        //  return view('home2')
        //    ->with('data', $data);
        //->with('dbuser', $user);
    }

}
