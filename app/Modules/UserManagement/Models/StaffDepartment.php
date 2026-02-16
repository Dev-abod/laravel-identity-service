<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class StaffDepartment extends Model
{
     protected $table = 'staff_departments';

    protected $fillable = [
        'staff_profile_id',
        'department_id',
    ];
}
