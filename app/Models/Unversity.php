<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Unversity extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table ='unversitys';
    protected $primaryKey = 'un_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'un_id',
        'un_name',
        'un_address',
        'un_phone',
        'un_sys',
        'un_web',
        'un_email',
        'un_branchs',
        'un_email',
        'un_code'        
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    /**
     * The roles that belong to the Unversity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Collage()
    {
        return $this->belongsToMany(Collage::class, 'college_universities', 'un_id', 'co_id','un_id','co_id');
    }

    
}
