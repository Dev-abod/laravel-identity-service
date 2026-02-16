<?php

namespace App\Modules\UserManagement\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
     protected $table = 'universities';

    protected $fillable = [
        'name',
        'country',
        'city',
    ];

    public function colleges()
    {
        return $this->hasMany(College::class);
    }
}
