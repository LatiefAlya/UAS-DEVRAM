<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('app');
    }
    function admin()
    {
        return view('app');
    }
    function user()
    {
        echo "Halo";
        echo "<a href='/logout'>Logout >></a>";
    }
    function dashboard()
    {
        return view('dashboard');
    }
}
