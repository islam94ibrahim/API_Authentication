<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organization;
class OrgController extends Controller
{
    public function index() {    	
    	$user=User::first();
    	return view("Token", compact('user'));
    }
}
