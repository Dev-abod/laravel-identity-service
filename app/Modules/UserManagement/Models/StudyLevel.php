<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class StudyLevel extends Model
{
     protected $table = 'study_levels';

    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany(StudentProfile::class);
    }
}
