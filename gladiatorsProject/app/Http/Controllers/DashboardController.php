<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class DashboardController extends Controller
{

    public function index() { 	

    	$user = Auth::user();

    	return view('dashboard', ['user' => $user]);
    }
}
