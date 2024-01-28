<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    // use AuthorizesRequests, ValidatesRequests;
    public function index(): string
    {
        return 'Home page !!!';
    }

    public function test(): string
    {
        return 'TEST page !!!';
    }
}

