<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddClassController extends Controller
{
    //
    public function index() {
    	return view('addClass');
    }

    public function addNewClass(Request $request) {
    	$name = $request->input('className');
    	// add to database with the teacher or school id, need to think about how to distinguish the same class over multiple years
    	// with new students or how to carry them over when they go up a year
    }
}
