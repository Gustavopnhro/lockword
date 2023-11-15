<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function board()
    {
        return view('board');
    }


}
