<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
