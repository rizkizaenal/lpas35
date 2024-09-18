<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboardadmin');
     }
     public function home(){
        return view('dashboardadmin');
     }
     
     public function akun(){
        return view('datakunuser');
     }


}
