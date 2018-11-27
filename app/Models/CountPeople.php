<?php

namespace App\Models;

use App\Models\Spread;
use Illuminate\Database\Eloquent\Model;

class CountPeople extends Model
{

    public $timestamps = false;
    protected $fillable = [
    	'people','money','sid'
    ];


    protected $hidden = [
        'money'
    ];

    public function spread()
    {
    	return $this->belongsTo(Spread::class,'sid','id');
    }

    public function getPeopleAttribute($value)
    {
        return floor($value);
    }

    public function getOwn($user)
    {

        if ($user->hasRole('超级管理员') || $user->hasRole('管理员')) {
            return true;
        } else {

        }
    }
}
