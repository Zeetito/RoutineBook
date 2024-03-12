<?php

namespace App\Models;

use App\Models\Questionaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class College extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',

    ];

    // RELATIONSHIPS
    // return related questionaire
    public function questionaire(){
        return $this->morphOne(Questionaire::class,'questionaireable')->where('is_active',1);
    }
}
