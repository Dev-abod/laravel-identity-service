<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
     protected $table = 'departments';

    protected $fillable = [
        'college_id',
        'name',
    ];

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
