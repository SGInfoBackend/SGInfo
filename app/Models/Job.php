<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = "sg_info_job";

    public function typeofrole()
    {
        return $this->hasMany(JobTypeOfRole::class, 'Typeofrole_ID');
    }
}
