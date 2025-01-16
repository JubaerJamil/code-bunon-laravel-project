<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminPanel(){
        return view('backend.layout.app');
    }

    public function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
