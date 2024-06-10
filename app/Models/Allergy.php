<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;
    protected $fillable = [
        'allergy_id',
    ];

public function students()
{
    return $this->belongsToMany(Student::class, 'student_allergies', 'allergy_id', 'student_id');
}
}