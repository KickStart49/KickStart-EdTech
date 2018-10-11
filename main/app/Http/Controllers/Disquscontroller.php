<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Disquscontroller extends Controller
{
    public function add(){
    	return view('Admin.user.disqus');
    }
}
