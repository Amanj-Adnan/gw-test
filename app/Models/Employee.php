<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'manager_id',
        'name',
        'age',
        'salary',
        'gender',
        'job-title',
        'hired-date',
    ];


    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
