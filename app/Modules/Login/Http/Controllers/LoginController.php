<?php


namespace App\Modules\Login\Http\Controllers;


class LoginController
{
    public function index()
    {
        return view('Login::login');
    }
}
