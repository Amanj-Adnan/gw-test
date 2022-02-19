<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'salary',
        'gender',
        'job-title',
        'hired-date',
    ];

    public function manager()
    {
        return $this->hasMany(Manager::class);
    }
}
