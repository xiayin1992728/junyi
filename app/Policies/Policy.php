<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    public function before($admin,$ability)
    {
        // 如果用户拥有管理内容的权限，即授权通过
        if ($admin->can('manage_contents')) {
            return true;
        }
    }
  
}
