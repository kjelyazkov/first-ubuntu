<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = ['hi', 'hi two'];
        return view('welcome', compact('users'));
    }
}
