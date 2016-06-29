<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;

use App\User;

use App\Code;

class UserController extends CodesController
{
    public function store(Request $req)
    {
		$user = new User;
		$code = $this->getCode();

		$user->first_name = $req->first_name;
		$user->last_name = $req->last_name;
		$user->email = $req->email;
		$user->country_tag = $req->country;
		$user->code_id = $code->id;
		
		Mail::send('emails.test', ['name' => 'Easy'], function ($message)
		{
			$message->to('tiropolska@gmail.com', 'Some guy')->subject('Welcome!');
		});
    }
}
