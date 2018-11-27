<?php

namespace App\Models;

use App\Models\Channel;
use App\Models\Product;
use App\Models\CountPeople;
use Illuminate\Database\Eloquent\Model;

class Spread extends Model
{
	protected $fillable = [
		'cid','peopel','pid'
	]; 


	public function channel()
	{
		return $this->belongsTo(Channel::class,'cid','id');
	}

	public function product()
	{
		return $this->belongsTo(Product::class,'pid','id');
	}

	public function countPeople()
	{
		return $this->hasMany(CountPeople::class);
	}
}
