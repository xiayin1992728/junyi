<?php

namespace App\Models;

use App\Models\Channel;
use App\Models\Spread;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name','saleman'
	];

    public function spread()
    {
    	return $this->hasMany(Spread::class);
    }
}
