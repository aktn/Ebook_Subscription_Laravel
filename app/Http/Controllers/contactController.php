<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequests;

class contactController extends Controller
{
    public function create()
    {
    	return view('contact.create');
    }

    public function store()
    {
    	$data = [
    		'name' => $request->get('name'),
    		'email' => $request->get('email'),
    		'user_message' => $request->get('message'),
    	];


    	return \Redirect::route('contact')->with('message','Your message has been received');
    }


}
