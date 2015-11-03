<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table='customers';

	protected $fillable = [
	'email', 'password', 'ph_no', 'address','first_name'
	];
}
