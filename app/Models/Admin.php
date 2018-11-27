<?php

namespace App\Models;

use App\Models\Channel;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasRoles,Notifiable;
    protected $guard_name = 'admin';
    protected $fillable = [
    	'phone','password'
    ];

    protected $hidden = [
        'password'
    ];

     public function channel()
    {
        return $this->hasOne(Channel::class,'uid','id');
    }
}
