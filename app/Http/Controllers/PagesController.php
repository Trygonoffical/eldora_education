<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function student(){
        return view('pages.student');
    }
    public function admin(){
        return view('pages.admin');
    }
    
}
