<?php

namespace App\Http\Controllers;


use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('home')->with('notifications', $user->unreadNotifications);
    }
}
