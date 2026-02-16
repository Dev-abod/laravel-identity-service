<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
     protected $table = 'colleges';

    protected $fillable = [
        'university_id',
        'name',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
