<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiAuthHomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
