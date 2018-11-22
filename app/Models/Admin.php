<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	use HasRoles;
	protected $fillable = [
		'email','name','password'
	];
    
}
