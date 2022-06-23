<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','nationality_id',
    'date_of_birth','gender','mother_name','place_of_living','email','phone',
    'sp_id','co_id','recipe','academic_year_id','date_of_registration','note','stat'
      ];

    public function Nationality()
    {
        return $this->belongsTo(Nationality::class);
    }
    public function AcademicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
    public function Collage()
    {
        return $this->belongsTo(Collage::class,'co_id');
    }
    public function Specialization()
    {
        return $this->belongsToMany(Specialization::class, 'CollegeUniversity', 'co_id', 'sp_id','sp_id');
    }
}
