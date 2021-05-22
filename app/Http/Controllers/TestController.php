<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = ['hi', 'hi two'];

        $something = 'Im a new person';
        return view('welcome', compact('users', 'something'));
    }

    public function new()
    {
        $newMe = 'from new method';

        return view('welcome', compact('newMe'));
    }
}