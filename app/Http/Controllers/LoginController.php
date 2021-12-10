<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('admin.login.index');
    }
    public function loginProses(Request $request)
    {
            if (!Auth::attempt(['nik'=> $request->nik, 'password'=>$request->password])){
                // dd('ELSE');
                session(['berhasil_login'=>true]);
                return redirect()->route('login');       
            }
            return redirect()->route('home.dashboard');
            // dd('OK');
    }
    public function logout(){

        \Auth::logout();

        return redirect()->route('login');
    }
}
