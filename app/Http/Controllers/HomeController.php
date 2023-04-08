<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Redirect;
use App\Models\User;
use App\Models\Agent;
use App\Models\Patient;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }
}
