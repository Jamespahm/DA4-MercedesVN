<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function darshboard(){
        return view('Admin.darshboard');
    }
}
