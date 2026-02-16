<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicRank extends Model
{
     protected $table = 'academic_ranks';

    protected $fillable = [
        'name',
    ];
}
