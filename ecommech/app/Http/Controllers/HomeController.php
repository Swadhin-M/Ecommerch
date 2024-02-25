<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front_theme.main_content');
    }
    public function view(){
        return view('users.welcome');
    }
    public function show(){
        return view('Admin_dasboard.layouts.master');
    }
}
