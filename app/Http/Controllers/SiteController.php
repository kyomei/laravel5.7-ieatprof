<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function quem_somos()
    {
        return view('welcome');
    }
}