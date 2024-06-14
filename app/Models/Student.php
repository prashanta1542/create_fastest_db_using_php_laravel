<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey='student_id';
    protected $fillable = [];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
    
    public function parentOfStudent():HasOne{
      return $this->hasOne(ParentOfStudent::class);
    }

    public function attendence():HasMany{
        return $this->hasMany(Attendence::class);
      }
}
