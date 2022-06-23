<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','place_of_living','phone'];

    public function subject()
    {
        return $this->hasMany(subject::class);
    }
}
