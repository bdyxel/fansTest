<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserInfoPost;
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
    public function index()
    {
        $user_info = Auth::user()->toArray();

        return view('home',['user_info'=>$user_info]);
    }

    public function userInfoStore(StoreUserInfoPost $request)
    {

        die;
        $user_info = Auth::user()->toArray();

        return view('home',['user_info'=>$user_info]);
    }
}
