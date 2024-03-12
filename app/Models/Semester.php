<?php

namespace App\Models;

use App\Models\AcademicYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year_id',
        'name',
        'started_at',
        'ended_at',
        'is_active',
    ];


    // RELATIONSHIPS
    // Academic Year
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

      // Get the active Semester
      public static function active_semester()
      {
          return self::where('is_active', 1)->first();
      }
  
}
