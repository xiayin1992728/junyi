<?php

namespace App\Observers;

use App\Models\Admin;

class AdminObserver
{
	public function creating(Admin $admin)
	{
		$admin->password = bcrypt($admin->password);
	}
}