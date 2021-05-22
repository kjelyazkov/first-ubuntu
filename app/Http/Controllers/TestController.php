<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = ['hi', 'hi two'];

        for ($i=0; $i < 10; $i++) { 
            $users[] = 'I am ' . $i . 'user';
        }
        
        return view('welcome', compact('users'));
    }
}