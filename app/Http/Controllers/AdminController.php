<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('IsAdmin'); //from kernel
    }

    public function index(){
        return "you are a administrator";
    }



}
