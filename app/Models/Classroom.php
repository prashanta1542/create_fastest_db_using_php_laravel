<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    use HasFactory;

    protected $primaryKey='classroom_id';
    protected $fillable=[];

    public function classRoomStudents():HasMany{
        return $this->hasMany(Classroom_student::class);
    }
}
