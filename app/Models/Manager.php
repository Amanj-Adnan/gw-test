<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'founder_id',
        'name',
        'age',
        'salary',
        'gender',
        'job-title',
        'hired-date',
    ];

    public function founder()
    {
        return $this->belongsTo(Founder::class);
    }
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
