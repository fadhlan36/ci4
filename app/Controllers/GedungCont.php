<?php

namespace App\Controllers;

class GedungCont extends BaseController
{
    public function awal()
    {
         return view('gedung/login');
        
    }

    public function signup()
    {
         return view('gedung/signUp');
        
    }
}