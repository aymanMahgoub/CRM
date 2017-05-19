<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

   
    public function index()
    {
        
        return view('Admin.home.index');
    }

    
   
}
