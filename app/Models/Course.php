<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function features()
    {
        return $this->hasMany(CourseFeature::class, 'course_id');
    }
    public function videos()
    {
        return $this->hasMany(CourseVideo::class, 'course_id')->orderBy('sort', 'ASC');
    }

    public function video() {
        return $this->hasOne(CourseVideo::class, 'course_id', 'id')->orderBy('sort', 'ASC');
    }
}
