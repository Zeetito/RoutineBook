<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'questionaireable_id',
        'questionaireable_type',
        'semester_id',
    ];
    // RELATIONSHIPS
    // Retrieve the related Model
    public function questionaireable(){
        return $this->morphTo();
    }
}
