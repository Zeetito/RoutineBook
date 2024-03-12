<?php

namespace App\Models;

use App\Models\Semester;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AcademicYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_year',
        'end_year',
    ];


        // RELATIONSHIPS
        public function semesters()
        {
            return $this->hasMany(Semester::class);
        }



    // STATIC FUNCTIONS

}
