<?php

namespace App\Http\Controllers;

use App\User;

use App\Code;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Helpers\functions;

class CodesController extends Controller
{
	public function getCode()
	{
		$keyNumber = rand(1, 100);
		$code = Code::find($keyNumber);
		return $code;
	}
}
