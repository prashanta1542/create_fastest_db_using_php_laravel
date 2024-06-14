<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParentOfStudent extends Model
{
    use HasFactory;
    protected $primaryKey='parent_id';
    protected $fillable = [];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];

    public function students():HasMany{
        return $this->hasMany(Student::class);
    }
}
