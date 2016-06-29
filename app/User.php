<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public function code()
	{
	   	return $this-belongsTo('App\Code');
	}   
}
