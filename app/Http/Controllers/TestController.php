<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        for ($i=0; $i < 10; $i++) { 
            $users[] = 'I am ' . $i . 'user';
        }
        
        $something = 'Im a new person';

        $newMe = 'from dev';
        
        return view('welcome', compact('users', 'something'));
    }
}