<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Specialization extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public $table='specializations';
    protected $primaryKey ='sp_id';

    protected $fillable =[
        'sp_name'
    ];

    protected $hidden =[
        'sp_id',
        'created_at',
        'updated_at',
    ];

    public function Collage()
    {
        return $this->hasOne('App\Models\Collage','co_id');
    }

    public function student()
    {
        return $this->hasMany('App\student');
    }
}
