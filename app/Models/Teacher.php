<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;
    protected $primaryKey='teacher_id';
    protected $fillable = [];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];

    public function classrooms():HasMany{
        return $this->hasMany(Classroom::class);
    }
}
