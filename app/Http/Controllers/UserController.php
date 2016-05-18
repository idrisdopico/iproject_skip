<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function showProfile()
    {	
    	$page_title = 'Profiel';
    	$user = Auth::user();

    	$data = array(
    		"page_title"=> $page_title, 
    		"user" => $user
    	);

        return view('user.profile', $data);
    }

}
