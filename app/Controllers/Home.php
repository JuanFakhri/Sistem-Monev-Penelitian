<?php

namespace App\Controllers;

use App\Models\M_Siswa;


class Home extends BaseController
{

    public function index()
    {
        return view("welcome_message");
    }

    public function login()
    {
        return view("auth/login");
    }
    public function register()
    {
        session();
        $data = [
            'validate' => \Config\Services::validation(),
        ];
        return view("auth/register", $data);
    }
}
