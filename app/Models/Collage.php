<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Collage extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    public $table ='collages';
    protected $primaryKey = 'co_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'co_name',
        'co_code',
    ];


        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'co_id',
        'updated_at',
        'created_at'
    ];

    /**
     * The roles that belong to the Collage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Specialization()
    {
        return $this->hasMany(Specialization::class,'sp_id');
    }

    public function student()
    {
        return $this->hasMany('App\student');
    } 
}
