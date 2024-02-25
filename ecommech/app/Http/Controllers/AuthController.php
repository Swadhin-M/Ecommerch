<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        if(Auth::id()){
            $type=Auth::user()->type;
            if($type=='user'){
                return view('users.welcome');
            }
            else if($type=='admin'){
                return view('admin.dashboard');
            }
            else if($type=='owner'){
                return view('owner.dashboard');
            }
        }
        else{
            return view('welcome');
        }
    }
}
