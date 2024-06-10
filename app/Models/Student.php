<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\age;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'student_id',
        'age'
    ];

    // public function Age(){
    //     return $this->belongsTo(age::class);
    //     }
        public function Age(){
            return $this->belongsToMany(age::class);
            }
            
        
}

