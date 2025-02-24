<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth/login'); // Arahkan ke app/Views/auth/login.php
    }

    public function register()
    {
        return view('auth/register'); // Menampilkan halaman register
    }

}

