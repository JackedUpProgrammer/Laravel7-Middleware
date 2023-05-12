<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) // added Request $request for session injection
    {   
        //  $request->session->put(['johan'=>'studen']);
        // echo $request->session()->get('johan');
    //    return $request->session()->all(); //debugging them


           $request->session()->forget('johan');
           //$request->session()->flush(); deletes everything from session


           //flash and flush is not the same //flasing data will only stay for one request
            $request->session()->flash('message', 'Post has been created'); //when commenting this out the session will saty but with flash it wont
            return $request->session()->get('message');
        
        $user = Auth::user();//this is just for name
        return view('home', compact('user'));
    }

    // public function index()
    // {   $user = Auth::user();
    //     return view('home', compact('user'));
    // }
}
